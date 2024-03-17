<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    protected $fillable = [
        'suhu', 'kelembaban', 'id_node', 'id_message'
    ];
}
