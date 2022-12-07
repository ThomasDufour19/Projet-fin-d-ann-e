<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beast extends Model
{
    use HasFactory;

    protected $table = "beasts";

    protected $fillable = [
        "number",
        "birth",
        "death"
    ];
}
