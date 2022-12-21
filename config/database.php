<?php
    try {
        //$conx = new PDO("mysql:host=$host;dbname=$name_db",$user,$passwd);
        $conx = new PDO("mysql:host=$host;port=5787;dbname=$name_db",$user,$passwd);
        $conx->exec("set names utf8");
        //echo "Connection Successfully!";
    }
    catch(PDOException $e) {
        echo "Connection Error: " . $e->getMessage();
    }

    // - - - - - - - - - - - - - - - - - - - - - - - - 
    // Main Menu

    // List Menu
    function listMenu($conx) {
        try {
            $sql = "SELECT * FROM mainmenu";
            $stm = $conx->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    // Show Section (id)
    function showSection($conx, $id) {
        try {
            $sql = "SELECT * FROM sections WHERE id = :id";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    // Sliders
    function showSliders($conx) {
        try {
            $sql = "SELECT * FROM sliders";
            $stm = $conx->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    // Login User
    function loginUser($conx, $username, $pass) {
        try {
            $sql = "SELECT * FROM users 
                    WHERE username = :username
                    AND password = :pass
                    LIMIT 1";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":username", $username);
            $stm->bindparam(":pass", $pass);
            $stm->execute();
            if($stm->rowCount() > 0) {
                $user = $stm->fetch(PDO::FETCH_ASSOC);
                $_SESSION['uid'] = $user['id: '] . time();
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    // Update Menu
    function updateMenu($conx, $data) {
        try {

            for($i = 0; $i<=count($data); $i++) {
                $sql = "UPDATE mainmenu SET text = :text, url = :url, options = :options
                        WHERE id = :id ";
                $stm = $conx->prepare($sql);
                $stm->bindparam(":id", $data['id'][$i]);
                $stm->bindparam(":text", $data['text'][$i]);
                $stm->bindparam(":url", $data['url'][$i]);
                $stm->bindparam(":options", $data['option'][$i]);

                if($stm->execute()) {
                    $qe = true;
                } else {
                    $qe = false;
                }
            }   
            if($qe) {
                $_SESSION['message'] = "Menú modificado con exito!";
                return true;
            } else {
                return true;
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    // Update Video
    function updateVideo($conx, $title, $content, $contentalt, $textlink, $urllink, $optlink) {
        try {

            $sql = "UPDATE sections SET title = :title, content = :content, 
                           contentalt = :contentalt, textlink = :textlink, urllink = :urllink, 
                           optlink = :optlink WHERE id = 1";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":title", $title);
            $stm->bindparam(":content", $content);
            $stm->bindparam(":contentalt", $contentalt);
            $stm->bindparam(":textlink", $textlink);
            $stm->bindparam(":urllink", $urllink);
            $stm->bindparam(":optlink", $optlink);
            if($stm->execute()) {
                $_SESSION['message'] = "Sección Video modificado con exito!";
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    // List Carousel
    function listCarousel($conx) {
        try {
            $sql = "SELECT * FROM sliders";
            $stm = $conx->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    // Update Sliders
    function updateSliders($conx, $data) {
        try {

            for($i = 0; $i<=count($data); $i++) {
                $sql = "UPDATE sliders SET title = :title, text = :text, textlink = :textlink,
                               urllink = :urllink WHERE id = :id ";
                $stm = $conx->prepare($sql);
                $stm->bindparam(":id", $data['id'][$i]);
                $stm->bindparam(":title", $data['title'][$i]);
                $stm->bindparam(":text", $data['text'][$i]);
                $stm->bindparam(":textlink", $data['textlink'][$i]);
                $stm->bindparam(":urllink", $data['urllink'][$i]);
                if($stm->execute()) {
                    $qe = true;
                } else {
                    $qe = false;
                }
            }   
            if($qe) {
                $_SESSION['message'] = "Carousel modificado con exito!";
                return true;
            } else {
                return true;
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
        // Update Section
        function updateSection($conx, $id, $title, $subtitle, $content, $contentalt, $textlink, $urllink, $optlink) {
            try {
    
                $sql = "UPDATE sections SET title = :title, subtitle = :subtitle, content = :content, 
                               contentalt = :contentalt, textlink = :textlink, urllink = :urllink, 
                               optlink = :optlink WHERE id = :id";
                $stm = $conx->prepare($sql);
                $stm->bindparam(":id", $id);
                $stm->bindparam(":title", $title);
                $stm->bindparam(":subtitle", $subtitle);
                $stm->bindparam(":content", $content);
                $stm->bindparam(":contentalt", $contentalt);
                $stm->bindparam(":textlink", $textlink);
                $stm->bindparam(":urllink", $urllink);
                $stm->bindparam(":optlink", $optlink);
                if($stm->execute()) {
                    $_SESSION['message'] = "Sección Video modificado con exito!";
                    return true;
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        // List Contacts
    function listContacts($conx) {
        try {
            $sql = "SELECT * FROM contacts";
            $stm = $conx->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }




















