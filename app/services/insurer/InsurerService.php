<?php

class InsurerService implements InsurerServiceI
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function create(Insurer $insurer)
    {

    }
    public function read()
    {
        $sql = "SELECT * FROM insurer";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
    public function update(Insurer $insurer)
    {

    }
    public function delete()
    {

    }
}