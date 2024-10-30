<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    protected $table = 'catalogs';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'bean',
        'description',
        'price',
    ];
}
