<?php

class Barang_Model
{
    private $table = 'fr_barang';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
}
