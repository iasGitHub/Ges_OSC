<?php
    class Model extends Database {

        function __construct() {
            if(!property_exists($this, 'table')) {
                $this->table = strtolower($this::class);
            }
        }

        public function where($column, $value) {
            $column = addslashes($column);
            $query = "SELECT * FROM $this->table where $column = :value";
            return $this->query($query, [
                'value' => $value
            ]);
        }

        public function findAll() {
            $query = "SELECT * FROM $this->table";
            return $this->query($query);
        }

        // Ajout utilisateur
        public function insert($data) {
            $keys = array_keys($data);
            $columns = implode(',', $keys);
            $values = implode(',:', $keys);

            $query = "insert into $this->table ($columns) values (:$values)";
            echo $query;
            return $this->query($query,$data);
            
        }

        // Mis à jour utilisateur
        public function update($id, $data) {

            $str = "";
            foreach ($data as $key => $value) {
                $str .= $key. "=:". $key.",";
            }

            $str = trim($str, ",");
            $data['id'] = $id;
            $query = "update $this->table set $str where id = :id";
            return $this->query($query,$data);
            
        }

        // Supprimer utilisateur
        public function delete($id) {
            $query = "delete from $this->table where id = :id";
            $data['id'] = $id;
            return $this->query($query,$data);
            
        }
    }
?>