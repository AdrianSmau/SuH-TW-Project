<?php
class DBManager
{
    private $conn;

    function __construct()
    {
        $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $cleardb_server = $cleardb_url["host"];
        $cleardb_username = $cleardb_url["user"];
        $cleardb_password = $cleardb_url["pass"];
        $cleardb_db = substr($cleardb_url["path"], 1);
        $active_group = 'default';
        $query_builder = TRUE;

        $this->conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
        if ($this->conn->connect_error) {
            die("Connection error: " . $this->conn->connect_error);
        }
    }

    function __destruct()
    {
        $this->conn = null;
    }

    public function getConn(){
        return $this->conn;
    }

    private function getBindTypes($array)
    {
        $bindTypes = '';
        for ($i = 0; $i < count($array); $i++) {
            $c = getType($array[$i])[0];
            if ($c == 'b') {
                $array[$i] = (int) $array[$i];
                $c = 'i';
            }

            $bindTypes .= $c;
        }
        return $bindTypes;
    }

    public function execSelect($query, $binds = [])
    {
        $stmt = $this->conn->prepare($query);

        if (!empty($binds))
            $stmt->bind_param($this->getBindTypes($binds), ...$binds);

        if (!$stmt->execute())
            return false;
        $data = $stmt->get_result();
        $rows = $data->fetch_all(MYSQLI_ASSOC);

        return $rows;
    }

    public function execInsert($query, $binds = [])
    {
        $stmt = $this->conn->prepare($query);
        if ($stmt == false)
            return false;

        if (!empty($binds))
            $stmt->bind_param($this->getBindTypes($binds), ...$binds);

        if ($stmt->execute())
            return true;
        else
            return false;
    }

    public function execUpdate($query, $binds = [])
    {
        $stmt = $this->conn->prepare($query);

        if (!empty($binds))
            $stmt->bind_param($this->getBindTypes($binds), ...$binds);

        if ($stmt->execute())
            return true;
        else
            return false;
    }

    public function execDelete($query, $binds = [])
    {
        $stmt = $this->conn->prepare($query);

        if (!empty($binds))
            $stmt->bind_param($this->getBindTypes($binds), ...$binds);

        if ($stmt->execute())
            return true;
        else
            return false;
    }
}
