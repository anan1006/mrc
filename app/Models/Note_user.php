<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note_user extends Model
{
    use HasFactory;

    protected $table = "note_users";
    protected $guarded = ["id"];
}
