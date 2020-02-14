<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
		'song_title', 'song_genre','audio_file', 'lyrics_file', 'notes', 'user_id', "status"
	];
}
