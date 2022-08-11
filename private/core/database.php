<?php
    class Database 
    {
        private function connect() {

            $string = DBDRIVER . ":host=".DBHOST.";dbname=".DBNAME;
            if(!$cnx = new PDO($string, DBUSER, DBPASS)) {
                die("could not connect to database");
            }

            return $cnx;
        }

        public function query($query, $data = array(), $data_type = "object") {
            $cnx = $this->connect();
            $stm = $cnx->prepare($query);

            if($stm){
                $check = $stm->execute($data);

                if($check){
                    if($data_type == "object") {
                        $data = $stm->fetchAll(PDO::FETCH_OBJ);
                    } else {
                        $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                    }

                    if(is_array($data) && count($data) > 0) {
                        return $data;
                    }
                }
            }
            return false;
        }

        // private function query() {

        // }

    }
?>