<?php

namespace App;
use Caffeinated\Shinobi\Concerns\HasPermissions;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasPermissions;
    protected $fillable = [
        'name', 'descripcion',
    ];
}
