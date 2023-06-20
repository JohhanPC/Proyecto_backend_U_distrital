<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use HasFactory;

    protected $table = "contacts";
    protected $primaryKey = "id";
    protected $fillable = ['name','last_name','phone_number','email','title','comments'];
}
