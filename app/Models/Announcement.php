<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{   
    use Notifiable;
    use HasFactory;
    protected $fillable=['title','description'];
}
