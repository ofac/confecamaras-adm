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




















    // Insert Pokemon
    function addPokemon($conx, $name, $type, $strength, $stamina, $speed, $accuracy, $image, $trainer_id) {
        try {
            $sql = "INSERT INTO pokemons (name, type, strength, stamina, speed, accuracy,
                    image, trainer_id) VALUES (:name, :type, :strength, :stamina, :speed, 
                    :accuracy, :image, :trainer_id)";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":name", $name);
            $stm->bindparam(":type", $type);
            $stm->bindparam(":strength", $strength);
            $stm->bindparam(":stamina", $stamina);
            $stm->bindparam(":speed", $speed);
            $stm->bindparam(":accuracy", $accuracy);
            $stm->bindparam(":image", $image);
            $stm->bindparam(":trainer_id", $trainer_id);
            if($stm->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    // Update Pokemon
    function updatePokemon($conx, $id, $name, $type, $strength, $stamina, $speed, $accuracy, $image, $trainer_id) {
        try {
            if($image != null) {
                $sql = "UPDATE pokemons SET name = :name, type = :type, strength = :strength, 
                        stamina = :stamina, speed = :speed, accuracy = :accuracy, image = :image, 
                        trainer_id = :trainer_id WHERE id = :id ";
            } else {
                $sql = "UPDATE pokemons SET name = :name, type = :type, strength = :strength, 
                        stamina = :stamina, speed = :speed, accuracy = :accuracy, 
                        trainer_id = :trainer_id WHERE id = :id ";
            }
                
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->bindparam(":name", $name);
            $stm->bindparam(":type", $type);
            $stm->bindparam(":strength", $strength);
            $stm->bindparam(":stamina", $stamina);
            $stm->bindparam(":speed", $speed);
            $stm->bindparam(":accuracy", $accuracy);
            if($image != null) {
                $stm->bindparam(":image", $image);
            }
            $stm->bindparam(":trainer_id", $trainer_id);
            if($stm->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    // List All Pokemons
    function listAllPokemons($conx) {
        try {
            $sql = "SELECT p.*, t.name AS nametrainer 
                    FROM pokemons AS p, trainers AS t
                    WHERE p.trainer_id = t.id
                    ORDER BY p.id ASC";
            $stm = $conx->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // List All My Pokemons
    function listAllMyPokemons($conx, $id) {
        try {
            $sql = "SELECT p.*, t.name AS nametrainer 
                    FROM pokemons AS p, trainers AS t
                    WHERE p.trainer_id = t.id
                    AND p.trainer_id = :id
                    ORDER BY p.id ASC";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Show Pokemon
    function showPokemon($conx, $id) {
        try {
            $sql = "SELECT p.*, t.name AS nametrainer 
                    FROM pokemons AS p, trainers AS t
                    WHERE p.id = :id AND p.trainer_id = t.id";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Delete Pokemon
    function deletePokemon($conx, $id) {
        try {
            $sql = "DELETE FROM pokemons WHERE id = :id";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            if($stm->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }



