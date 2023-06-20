<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_project extends Model
{
    use HasFactory;

    protected $table = "users_project";
    protected $primaryKey = "id";
    protected $fillable = ['name', 'last_name', 'id_type','identification_number','phone_number','email','profession','role'];

}
