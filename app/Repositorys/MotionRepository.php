<?php

namespace App\Repositorys;

use App\Repositorys\AbstractRepository;

class MotionRepository extends AbstractRepository
{ 
    protected $table = 'motions';

    /**
     * Get a table name.
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->table;
    }

    /**
     * Get Usable Motions.
     * 
     * @return \stdClass
     */
    public function getUsableMotions(){
        return \DB::table($this->getTableName())
            ->where('delete',0)
            ->get();
    }
}
