<?php

namespace CODE\QueryBuilder;

class MySql implements Strategy
{
    protected $table;
    protected $sql;
    
    public function table(string $table) : Strategy
    {
        $this->table = "`{$table}`";
        return $this;
    }

    public function select($columns = '*') : Strategy
    {
        if (is_string($columns) and ($columns != '*')) {
            $columns = explode(',', $columns);
            $columns = array_map('trim', $columns);
        }

        if(is_array($columns)) {
            $columns = implode('`, `', $columns);
            $columns = "`{$columns}`";
        }

        $this->sql = sprintf('SELECT %s FROM %s;', $columns, $this->table);

        return $this;
    }

    public function getQuery(): string
    {
        return $this->sql;
    }
}