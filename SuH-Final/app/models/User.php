<?php

class User
{
    private $instance;
    public function __construct()
    {
        require_once 'DatabaseHandler.php';

        $this->instance = new DBManager();
    }

    public function register($data)
    {
        $username = $data['username'];
        $first_name = $data['first-name'];
        $last_name = $data['last-name'];
        $email = $data['email'];
        $password = $data['password'];
        $confirm_password = $data['confirm-password'];

        if (empty($username) || empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
            return "Fill all fields!";
        } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            return "Invalid username!";
        } else if ($password !== $confirm_password) {
            return "Password Mismatch!";
        } else {
            $select = $this->instance->execSelect("select username from users where username=?", [$username]);
            if ($select != false) {
                return "Username already taken!";
            } else {
                $select = $this->instance->execSelect("select email from users where email=?", [$email]);
                if ($select != false) {
                    return "Mail already used!";
                }
                $hash_pwd = password_hash($password, PASSWORD_DEFAULT);
                $insert = $this->instance->execInsert("insert into users (username,first_name,last_name,email,pwd) values (?,?,?,?,?)", [$username, $first_name, $last_name, $email, $hash_pwd]);
                if ($insert == false) {
                    return "SQLError!";
                }
                $insert = $this->instance->execInsert("insert into score (username) values (?)", [$username]);
                if ($insert == false) {
                    return "SQLError!";
                }
                return "SUCCESS";
            }
        }
    }

    public function login($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        if (empty($username) || empty($password)) {
            return "Empty Fields!";
        } else {
            $select = $this->instance->execSelect("select * from users where username=?", [$username]);
            if ($select == false) {
                return "Unexistent User!";
            }
            $select = $select[0];
            $pass_check = password_verify($password, $select['pwd']);
            if ($pass_check == false) {
                return "Wrong Password!";
            } else if ($pass_check == true) {
                session_start();
                $_SESSION['id'] = $select['idUser'];
                $_SESSION['usr'] = $select['username'];
                $_SESSION['fname'] = $select['first_name'];
                $_SESSION['lname'] = $select['last_name'];
                $_SESSION['mail'] = $select['email'];
                $_SESSION['adm'] = $select['isAdmin'];
                $_SESSION['lang'] = "ENGLISH";
                return "SUCCESS";
            } else {
                return "Wrong Password!";
            }
        }
    }
    public function changePasswordFromEmail($data, $selector, $validator)
    {
        if (empty($selector) || empty($validator)) {
            return "Could not validate your request !";
        }
        if (ctype_xdigit($selector) !== true || ctype_xdigit($validator) !== true) {
            return "Could not validate your request !";
        }
        $password = $data['pwd'];
        $passwordRepeat = $data['pwd-repeat'];
        if (empty($password) || empty($passwordRepeat)) {
            return "Fill all fields!";
        }
        if ($password != $passwordRepeat) {
            return "Password not the same!";
        }
        $currentDate = date("U");
        $select=$this->instance->execSelect("select * from pwdReset where pwdResetSelector=? and pwdResetExpires >= ?",[$selector, $currentDate]);
        $tokenBin = hex2bin($validator);
        $tokenCheck = password_verify($tokenBin, $select[0]['pwdResetToken']);
        if($tokenCheck === false)
        {
            return "You need to re-submit";
        }
        if($tokenCheck === true)
        {
            $tokenEmail=$select[0]['pwdResetEmail'];
            $select=$this->instance->execSelect("select * from users where email=?",[$tokenEmail]);
            if($select==false)
            {
                return "You are not registered on our application!";
            }
            $newpwdHash = password_hash($password, PASSWORD_DEFAULT);
            $this->instance->execUpdate("update users set pwd=? where email=?",[$newpwdHash, $tokenEmail]);
            $this->instance->execDelete("delete from pwdReset where pwdResetEmail=?",[$tokenEmail]);
            return "SUCCESS";
        }
    }
    public function changePasswordFromAccount($data,$user)
    {
        $password = $data['pwd'];
        $passwordRepeat = $data['pwd-repeat'];
        if (empty($password) || empty($passwordRepeat)) {
            return "Fill all fields!";
        }
        if ($password != $passwordRepeat) {
            return "Password not the same!";
        }
        $newpwdHash = password_hash($password, PASSWORD_DEFAULT);
        $this->instance->execUpdate("update users set pwd=? where username=?",[$newpwdHash,$user]);
        return "SUCCESS";
    }
}
