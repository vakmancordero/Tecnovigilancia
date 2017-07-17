<?php

namespace Tecnovigilancia;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model {

    protected $table = 'equipment';

    protected $fillable = [
        'name',
        'brand',
        'model',
        'serialNumber',
        'inventoryNumber',
        'location',
        'observation',
        'status'
    ];

}
