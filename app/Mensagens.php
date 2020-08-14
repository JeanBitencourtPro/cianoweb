<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mensagens extends Model
{
    protected $table = 'mensagens';

    protected $fillable = [
        '*'
    ];

    public $timestamps = false;
}
