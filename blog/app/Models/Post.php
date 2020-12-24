<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    
	use Notifiable;
    protected $table = 'post';
    protected $fillable = [
        'name', 
        'description', 
        'date',
        'posttype',
    ];
}
