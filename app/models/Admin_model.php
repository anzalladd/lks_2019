<?php

class Admin_model {

    private $table = 'content';
    private $db;
    private $data_handler;
    private $statement;

    public function __construct() {
        $this->db = new Database;
    }

    public function addContent($data) {
        $query = "INSERT INTO {$this->table}
                    VALUES
                    ('', :name, :img, :description)";
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('img', $data['img']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteContent($id) {
        $query = "DELETE FROM {$this->table} where id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateContent($data) {
        $query = "UPDATE {$this->table} SET
                    name = :name,
                    img = :img,
                    description = :description
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('img', $data['img']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}