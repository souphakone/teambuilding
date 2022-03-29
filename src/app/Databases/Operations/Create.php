<?php

namespace App\Databases\Operations;

use App\Databases\Query;
use App\Databases\Connector;

class Create extends Query
{
    /**
     * @param Model $class is the Model calling the query
     * @param array $params is an associative array of columns with there values
     */
    public function __construct(string $class, array $params)
    {
        parent::__construct($class, $params);

        // Build the query
        $paramsKeys = array_keys($this->params);
        array_unshift($paramsKeys, 'null');
        $this->query = 'INSERT INTO ' . $this->table . ' VALUES (' . implode(',:', $paramsKeys) . ');';
    }

    /**
     * Perform the query and return the id of inserted row
     * @return int
     */
    public function get(): int
    {
        $pdo = Connector::getInstance()->pdo();
        $pdo->prepare($this->query)->execute($this->params);
        return $pdo->lastInsertId();
    }
}
