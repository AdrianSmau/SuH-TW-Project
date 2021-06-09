<?php
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
define('DB_HOST', $cleardb_url["host"]);
define('DB_NAME', 'heroku_2a86a1f42904452');
define('DB_CHARSET', 'utf8');
define('DB_USER', $cleardb_url["user"]);
define('DB_PASSWORD', $cleardb_url["pass"]);
class AddScore
{
    private $pdo;
    private $stmt;
    public $error;
    function __construct()
    {
        try {
            $this->pdo =
                new PDO(
                    "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
                    DB_USER,
                    DB_PASSWORD,
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                );
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    function __destruct()
    {
        $this->pdo = null;
        $this->stmt = null;
    }

    function getPdo()
    {
        return $this->pdo;
    }

    function getStmt()
    {
        return $this->stmt;
    }

    function setStmt($newStmt)
    {
        $this->stmt = $newStmt;
    }

    function add($id, $stage_num, $score, $time)
    {
        switch ($stage_num) {
            case 1:
                try {
                    $this->stmt = $this->pdo->prepare(
                        "SELECT status_stage1 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    $status = $this->stmt->fetch(PDO::FETCH_NAMED);
                    $status = $status['status_stage1'] ?? 'null_value';
                } catch (Exception $ex) {
                    echo "[ERROR] Error when checking Stage1 Status!";
                }
                if ($status == 0) {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `score_stage1`=?,`status_stage1`=1,`time_stage1`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$score, $time, $id]);

                        $this->stmt = $this->pdo->prepare(
                            "SELECT progress FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $user_progress = $this->stmt->fetch(PDO::FETCH_NAMED)['progress'] ?? 'null_value';
                        $user_progress += 1;

                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `progress`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$user_progress, $id]);
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` a newly played stage1!";
                    }
                } else {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "SELECT score_stage1 FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $oldScore = $this->stmt->fetch(PDO::FETCH_NAMED);
                        $oldScore = $oldScore['score_stage1'] ?? 'null_value';
                        if ($score > $oldScore) {
                            $this->stmt = $this->pdo->prepare(
                                "UPDATE `score` SET `score_stage1`=?,`time_stage1`=? WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$score, $time, $id]);
                        } else {
                            $this->stmt = $this->pdo->prepare(
                                "SELECT time_stage1 FROM `score` WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$id]);
                            $oldTime = $this->stmt->fetch(PDO::FETCH_NAMED);
                            $oldTime = $oldTime['time_stage1'] ?? 'null_value';
                            if ($time < $oldTime) {
                                $this->stmt = $this->pdo->prepare(
                                    "UPDATE `score` SET `time_stage1`=? WHERE `idUser`=?"
                                );
                                $this->stmt->execute([$time, $id]);
                            }
                        }
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` an already played stage1!";
                    }
                }
                break;
            case 2:
                try {
                    $this->stmt = $this->pdo->prepare(
                        "SELECT status_stage2 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    $status = $this->stmt->fetch(PDO::FETCH_NAMED);
                    $status = $status['status_stage2'] ?? 'null_value';
                } catch (Exception $ex) {
                    echo "[ERROR] Error when checking Stage2 Status!";
                }
                if ($status == 0) {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `score_stage2`=?,`status_stage2`=1,`time_stage2`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$score, $time, $id]);

                        $this->stmt = $this->pdo->prepare(
                            "SELECT progress FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $user_progress = $this->stmt->fetch(PDO::FETCH_NAMED)['progress'] ?? 'null_value';
                        $user_progress += 1;

                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `progress`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$user_progress, $id]);
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` a newly played stage2!";
                    }
                } else {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "SELECT score_stage2 FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $oldScore = $this->stmt->fetch(PDO::FETCH_NAMED);
                        $oldScore = $oldScore['score_stage2'] ?? 'null_value';
                        if ($score > $oldScore) {
                            $this->stmt = $this->pdo->prepare(
                                "UPDATE `score` SET `score_stage2`=?,`time_stage2`=? WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$score, $time, $id]);
                        } else {
                            $this->stmt = $this->pdo->prepare(
                                "SELECT time_stage2 FROM `score` WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$id]);
                            $oldTime = $this->stmt->fetch(PDO::FETCH_NAMED);
                            $oldTime = $oldTime['time_stage2'] ?? 'null_value';
                            if ($time < $oldTime) {
                                $this->stmt = $this->pdo->prepare(
                                    "UPDATE `score` SET `time_stage2`=? WHERE `idUser`=?"
                                );
                                $this->stmt->execute([$time, $id]);
                            }
                        }
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` an already played stage2!";
                    }
                }
                break;
            case 3:
                try {
                    $this->stmt = $this->pdo->prepare(
                        "SELECT status_stage3 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    $status = $this->stmt->fetch(PDO::FETCH_NAMED);
                    $status = $status['status_stage3'] ?? 'null_value';
                } catch (Exception $ex) {
                    echo "[ERROR] Error when checking Stage3 Status!";
                }
                if ($status == 0) {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `score_stage3`=?,`status_stage3`=1,`time_stage3`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$score, $time, $id]);

                        $this->stmt = $this->pdo->prepare(
                            "SELECT progress FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $user_progress = $this->stmt->fetch(PDO::FETCH_NAMED)['progress'] ?? 'null_value';
                        $user_progress += 1;

                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `progress`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$user_progress, $id]);
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` a newly played stage3!";
                    }
                } else {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "SELECT score_stage3 FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $oldScore = $this->stmt->fetch(PDO::FETCH_NAMED);
                        $oldScore = $oldScore['score_stage3'] ?? 'null_value';
                        if ($score > $oldScore) {
                            $this->stmt = $this->pdo->prepare(
                                "UPDATE `score` SET `score_stage3`=?,`time_stage3`=? WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$score, $time, $id]);
                        } else {
                            $this->stmt = $this->pdo->prepare(
                                "SELECT time_stage3 FROM `score` WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$id]);
                            $oldTime = $this->stmt->fetch(PDO::FETCH_NAMED);
                            $oldTime = $oldTime['time_stage3'] ?? 'null_value';
                            if ($time < $oldTime) {
                                $this->stmt = $this->pdo->prepare(
                                    "UPDATE `score` SET `time_stage3`=? WHERE `idUser`=?"
                                );
                                $this->stmt->execute([$time, $id]);
                            }
                        }
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` an already played stage3!";
                    }
                }
                break;
            case 4:
                try {
                    $this->stmt = $this->pdo->prepare(
                        "SELECT status_stage4 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    $status = $this->stmt->fetch(PDO::FETCH_NAMED);
                    $status = $status['status_stage4'] ?? 'null_value';
                } catch (Exception $ex) {
                    echo "[ERROR] Error when checking Stage4 Status!";
                }
                if ($status == 0) {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `score_stage4`=?,`status_stage4`=1,`time_stage4`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$score, $time, $id]);

                        $this->stmt = $this->pdo->prepare(
                            "SELECT progress FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $user_progress = $this->stmt->fetch(PDO::FETCH_NAMED)['progress'] ?? 'null_value';
                        $user_progress += 1;

                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `progress`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$user_progress, $id]);
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` a newly played stage4!";
                    }
                } else {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "SELECT score_stage4 FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $oldScore = $this->stmt->fetch(PDO::FETCH_NAMED);
                        $oldScore = $oldScore['score_stage4'] ?? 'null_value';
                        if ($score > $oldScore) {
                            $this->stmt = $this->pdo->prepare(
                                "UPDATE `score` SET `score_stage4`=?,`time_stage4`=? WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$score, $time, $id]);
                        } else {
                            $this->stmt = $this->pdo->prepare(
                                "SELECT time_stage4 FROM `score` WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$id]);
                            $oldTime = $this->stmt->fetch(PDO::FETCH_NAMED);
                            $oldTime = $oldTime['time_stage4'] ?? 'null_value';
                            if ($time < $oldTime) {
                                $this->stmt = $this->pdo->prepare(
                                    "UPDATE `score` SET `time_stage4`=? WHERE `idUser`=?"
                                );
                                $this->stmt->execute([$time, $id]);
                            }
                        }
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` an already played stage4!";
                    }
                }
                break;
            case 5:
                try {
                    $this->stmt = $this->pdo->prepare(
                        "SELECT status_stage5 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    $status = $this->stmt->fetch(PDO::FETCH_NAMED);
                    $status = $status['status_stage5'] ?? 'null_value';
                } catch (Exception $ex) {
                    echo "[ERROR] Error when checking Stage5 Status!";
                }
                if ($status == 0) {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `score_stage5`=?,`status_stage5`=1,`time_stage5`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$score, $time, $id]);

                        $this->stmt = $this->pdo->prepare(
                            "SELECT progress FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $user_progress = $this->stmt->fetch(PDO::FETCH_NAMED)['progress'] ?? 'null_value';
                        $user_progress += 1;

                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `progress`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$user_progress, $id]);
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` a newly played stage5!";
                    }
                } else {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "SELECT score_stage5 FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $oldScore = $this->stmt->fetch(PDO::FETCH_NAMED);
                        $oldScore = $oldScore['score_stage5'] ?? 'null_value';
                        if ($score > $oldScore) {
                            $this->stmt = $this->pdo->prepare(
                                "UPDATE `score` SET `score_stage5`=?,`time_stage5`=? WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$score, $time, $id]);
                        } else {
                            $this->stmt = $this->pdo->prepare(
                                "SELECT time_stage5 FROM `score` WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$id]);
                            $oldTime = $this->stmt->fetch(PDO::FETCH_NAMED);
                            $oldTime = $oldTime['time_stage5'] ?? 'null_value';
                            if ($time < $oldTime) {
                                $this->stmt = $this->pdo->prepare(
                                    "UPDATE `score` SET `time_stage5`=? WHERE `idUser`=?"
                                );
                                $this->stmt->execute([$time, $id]);
                            }
                        }
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` an already played stage5!";
                    }
                }
                break;
            case 6:
                try {
                    $this->stmt = $this->pdo->prepare(
                        "SELECT status_stage6 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    $status = $this->stmt->fetch(PDO::FETCH_NAMED);
                    $status = $status['status_stage6'] ?? 'null_value';
                } catch (Exception $ex) {
                    echo "[ERROR] Error when checking Stage6 Status!";
                }
                if ($status == 0) {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `score_stage6`=?,`status_stage6`=1,`time_stage6`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$score, $time, $id]);

                        $this->stmt = $this->pdo->prepare(
                            "SELECT progress FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $user_progress = $this->stmt->fetch(PDO::FETCH_NAMED)['progress'] ?? 'null_value';
                        $user_progress += 1;

                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `progress`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$user_progress, $id]);
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` a newly played stage6!";
                    }
                } else {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "SELECT score_stage6 FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $oldScore = $this->stmt->fetch(PDO::FETCH_NAMED);
                        $oldScore = $oldScore['score_stage6'] ?? 'null_value';
                        if ($score > $oldScore) {
                            $this->stmt = $this->pdo->prepare(
                                "UPDATE `score` SET `score_stage6`=?,`time_stage6`=? WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$score, $time, $id]);
                        } else {
                            $this->stmt = $this->pdo->prepare(
                                "SELECT time_stage6 FROM `score` WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$id]);
                            $oldTime = $this->stmt->fetch(PDO::FETCH_NAMED);
                            $oldTime = $oldTime['time_stage6'] ?? 'null_value';
                            if ($time < $oldTime) {
                                $this->stmt = $this->pdo->prepare(
                                    "UPDATE `score` SET `time_stage6`=? WHERE `idUser`=?"
                                );
                                $this->stmt->execute([$time, $id]);
                            }
                        }
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` an already played stage6!";
                    }
                }
                break;
            case 7:
                try {
                    $this->stmt = $this->pdo->prepare(
                        "SELECT status_stage7 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    $status = $this->stmt->fetch(PDO::FETCH_NAMED);
                    $status = $status['status_stage7'] ?? 'null_value';
                } catch (Exception $ex) {
                    echo "[ERROR] Error when checking Stage7 Status!";
                }
                if ($status == 0) {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `score_stage7`=?,`status_stage7`=1,`time_stage7`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$score, $time, $id]);

                        $this->stmt = $this->pdo->prepare(
                            "SELECT progress FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $user_progress = $this->stmt->fetch(PDO::FETCH_NAMED)['progress'] ?? 'null_value';
                        $user_progress += 1;

                        $this->stmt = $this->pdo->prepare(
                            "UPDATE `score` SET `progress`=? WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$user_progress, $id]);
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` a newly played stage7!";
                    }
                } else {
                    try {
                        $this->stmt = $this->pdo->prepare(
                            "SELECT score_stage7 FROM `score` WHERE `idUser`=?"
                        );
                        $this->stmt->execute([$id]);
                        $oldScore = $this->stmt->fetch(PDO::FETCH_NAMED);
                        $oldScore = $oldScore['score_stage7'] ?? 'null_value';
                        if ($score > $oldScore) {
                            $this->stmt = $this->pdo->prepare(
                                "UPDATE `score` SET `score_stage7`=?,`time_stage7`=? WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$score, $time, $id]);
                        } else {
                            $this->stmt = $this->pdo->prepare(
                                "SELECT time_stage7 FROM `score` WHERE `idUser`=?"
                            );
                            $this->stmt->execute([$id]);
                            $oldTime = $this->stmt->fetch(PDO::FETCH_NAMED);
                            $oldTime = $oldTime['time_stage7'] ?? 'null_value';
                            if ($time < $oldTime) {
                                $this->stmt = $this->pdo->prepare(
                                    "UPDATE `score` SET `time_stage7`=? WHERE `idUser`=?"
                                );
                                $this->stmt->execute([$time, $id]);
                            }
                        }
                    } catch (Exception $ex) {
                        echo "[ERROR] Error when inserting in `status` an already played stage7!";
                    }
                }
                break;
            default:
                echo "Error occured! Specified Stage is not a valid one!";
        }
    }

    function getScore($id)
    {
        $total_user_score = 0;
        try {
            $this->stmt = $this->pdo->prepare(
                "SELECT score_stage1 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_score += $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage1'] ?? 0;

            $this->stmt = $this->pdo->prepare(
                "SELECT score_stage2 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_score += $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage2'] ?? 0;

            $this->stmt = $this->pdo->prepare(
                "SELECT score_stage3 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_score += $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage3'] ?? 0;

            $this->stmt = $this->pdo->prepare(
                "SELECT score_stage4 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_score += $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage4'] ?? 0;

            $this->stmt = $this->pdo->prepare(
                "SELECT score_stage5 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_score += $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage5'] ?? 0;

            $this->stmt = $this->pdo->prepare(
                "SELECT score_stage6 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_score += $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage6'] ?? 0;

            $this->stmt = $this->pdo->prepare(
                "SELECT score_stage7 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_score += $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage7'] ?? 0;
        } catch (Exception $ex) {
            echo "[ERROR] Error when checking getting score!";
        }
        return $total_user_score;
    }

    function getScoreByStage($id, $stage)
    {
        try {
            switch ($stage) {
                case '1':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT score_stage1 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage1'];
                    break;
                case '2':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT score_stage2 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage2'];
                    break;
                case '3':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT score_stage3 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage3'];
                    break;
                case '4':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT score_stage4 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage4'];
                    break;
                case '5':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT score_stage5 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage5'];
                    break;
                case '6':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT score_stage6 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage6'];
                    break;
                case '7':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT score_stage7 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['score_stage7'];
                    break;
            }
        } catch (Exception $ex) {
            echo "[ERROR] Error when checking getting score!";
        }
    }

    function getTimeByStage($id, $stage)
    {
        try {
            switch ($stage) {
                case '1':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT time_stage1 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage1'];
                    break;
                case '2':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT time_stage2 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage2'];
                    break;
                case '3':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT time_stage3 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage3'];
                    break;
                case '4':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT time_stage4 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage4'];
                    break;
                case '5':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT time_stage5 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage5'];
                    break;
                case '6':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT time_stage6 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage6'];
                    break;
                case '7':
                    $this->stmt = $this->pdo->prepare(
                        "SELECT time_stage7 FROM `score` WHERE `idUser`=?"
                    );
                    $this->stmt->execute([$id]);
                    return $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage7'];
                    break;
            }
        } catch (Exception $ex) {
            echo "[ERROR] Error when checking getting score!";
        }
    }

    function getTime($id)
    {
        $total_user_time = 0;
        try {
            $this->stmt = $this->pdo->prepare(
                "SELECT time_stage1 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_time += $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage1'] ?? 0;

            $this->stmt = $this->pdo->prepare(
                "SELECT time_stage2 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_time += $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage2'] ?? 0;

            $this->stmt = $this->pdo->prepare(
                "SELECT time_stage3 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_time += $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage3'] ?? 0;

            $this->stmt = $this->pdo->prepare(
                "SELECT time_stage4 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_time += $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage4'] ?? 0;

            $this->stmt = $this->pdo->prepare(
                "SELECT time_stage5 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_time += $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage5'] ?? 0;

            $this->stmt = $this->pdo->prepare(
                "SELECT time_stage6 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_time += $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage6'] ?? 0;

            $this->stmt = $this->pdo->prepare(
                "SELECT time_stage7 FROM `score` WHERE `idUser`=?"
            );
            $this->stmt->execute([$id]);
            $total_user_time += $this->stmt->fetch(PDO::FETCH_NAMED)['time_stage7'] ?? 0;
        } catch (Exception $ex) {
            echo "[ERROR] Error when getting time!";
        }
        return $total_user_time;
    }
}

$_SCORE = new AddScore();
if (isset($_GET['add'])) {
    if ($_GET['add'] == 'true') {
        $_SCORE->add((int)$_GET['id'], (int)$_GET['stage'], (int)$_GET['score'], (int)$_GET['time']);
    }
}
if (isset($_GET['getScore'])) {
    if ($_GET['getScore'] == 'true') {
        echo $_SCORE->getScoreByStage((int)$_GET['id'], (int)$_GET['stage']);
    }
}
if (isset($_GET['getTime'])) {
    if ($_GET['getTime'] == 'true') {
        echo $_SCORE->getTimeByStage((int)$_GET['id'], (int)$_GET['stage']);
    }
}
