<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable = [
        'title',
        'dec',
        'years',
        'project_complete',
        'natural_product',
        'clients_reviews',
        'satisfied_clientd',
        'status',
    ];
}
