<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Song extends Model
{
	protected $fillable = [
		'song_title', 'song_genre','audio_file', 'lyrics_file', 'notes', 'user_id',
	];

    public function submittedsong($request){

    $audio_path = $request->file('audio_file')->store('audio');
    $docs_path =  $request->file('lyrics_file')->store('lyrics');
	Song::create(["song_title" => $request->song_title, "song_genre" => $request->song_genre, "audio_file" => $audio_path, "lyrics_file" => $docs_path, "notes" => $request->notes ]);
    	
    }
}
