<?php 

namespace Classes;

class QueryBuilder
{
    protected $db;

    public function selectAll($table)
    {
        $sql = "SELECT * FROM {$table}";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}