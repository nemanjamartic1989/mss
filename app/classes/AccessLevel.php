<?php 

namespace Classes;

class AccessLevel extends QueryBuilder
{
    public function getAllLevels()
    {
        return $this->selectAll("access_levels");
    }
}
