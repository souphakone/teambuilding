<?php

namespace App\Databases;

use PDO;
use PDOException;

class Query
{
    use \App\Traits\ClassToTable;

    protected string $class;
    protected string $table;
    protected ?array $params;

    /**
     * @param Model $class is the Model calling the query
     */
    public function __construct(string $class, ?array $params = null)
    {
        $this->class = $class;
        $this->table = $this->toTable($class);
        $this->params = $params;
    }

    public function execute($func)
    {
        return $func();
    }
}
