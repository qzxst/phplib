<?php

namespace Blr\Php\Models;

use Medoo\Medoo;
use MillionMile\GetEnv\Env;

class Model extends Medoo
{
    /**
     * 获取一条数据
     *
     * @param string $table
     * @param string $columns
     * @param string $where
     * @return void
     */
    public function findOne(string $table, string $columns, string $where): void
    {
        // $this->select($table, $columns, $where);
    }
}
