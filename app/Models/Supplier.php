<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';
    protected $primaryKey = 'supplier_id';
    protected $keyType = 'string'; //it use to difine primary key as a string

    protected $fillable = [
       'supplier_id',
       'supplier_name',
       'contact_number',
       'address'
    ];
}
