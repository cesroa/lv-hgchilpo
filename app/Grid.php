<?php

namespace Krankenhaus;

use Illuminate\Database\Eloquent\Model;

class Grid extends Model
{
    public function __construct() {
        $this->connection = getConexionMysql();
    }
}
