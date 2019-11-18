<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = [
        'doc_name', 'subject_area', 'subject', 'educational', 'length', 'delivery', 'title', 'instructions', 'focus', 'structure','reference','number','suggested','essential'
    ];
}
