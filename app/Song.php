<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;	
use Haruncpi\LaravelIdGenerator\SongIdGenerator;
use Auth;
use Hash;
class Song extends Model
{
	protected $fillable = [
		'song_title', 'song_genre','audio_file', 'lyrics_file', 'notes', 'user_id',
	];

    public function submittedsong($request){
    $songs = new Song;
    $request->file('audio_file')->store('public/audio');
    $lyrics_path = $request->file('lyrics_file')->store('public/lyrics');
    $config = ['table'=>'songs','length'=>10,'prefix'=>'YSE'];
    $songid = SongIdGenerator::generate($config);

    $songs->song_id = $request->input('song_id',$songid);
    $songs->user_id = $request->input('user_id');
    $songs->song_title = $request->input('song_title');
    $songs->song_genre = $request->input('song_genre');
    $songs->notes = $request->input('notes');
    $songs->audio_file = $request->file('audio_file')->hashName();
    $songs->lyrics_file = $request->file('lyrics_file')->hashName();
    $songs->save();

   }
}
