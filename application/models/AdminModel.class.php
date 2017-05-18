<?php

class AdminModel extends Model
{
    public function getAdmins()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->db->getAll($sql);
    }
}
