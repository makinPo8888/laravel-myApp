<?php

namespace App\Repositorys;

use Illuminate\Database\DatabaseManager;

abstract class AbstractRepository{

    /** @var string table name */
    protected $table;

    /**
     * Get a table name.
     *
     * @return string
     */
    abstract public function getTableName();

    /**
     * find a recorde.
     * 
     * @param array conditions
     * 
     * @return \stdClass | null
     */
    public function find(array $conditions){
        return \DB::table($this->getTableName())
            ->where($conditions)
            ->first();
    }

    /**
     * Insert a record.
     *
     * @param $params array ：key(column name) => value
     * @param $table string  ：table name(defalut: getTableName())
     * @return int ：inserted record's id
     */
    public function insert(array $params, $table = null)
    {
        if (is_null($table)) {
            $table = $this->getTableName();
        }
        $params = $this->setTimestamps($params);
        $id = \DB::table($table)->insertGetId($params);
        return $id;
    }

    /**
     * Find All.
     *
     * @return \stdClass
     */
    public function findAll(){
        return \DB::table($this->getTableName())->get();
    }
}