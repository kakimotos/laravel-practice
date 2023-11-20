<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name', 'detail', 'priority_id', 'type_id'
    ];
}
