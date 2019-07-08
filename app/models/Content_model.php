<?php

class Content_model {
    private $table = 'content';
    private $db;
    private $data_handler;
    private $statement;

    public function __construct() {
        $this->db = new Database;
    }

    public function getContents() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getContent($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' Where id=:id');
        $this->db->bind('id', $id); 
        return $this->db->single();
    }
}