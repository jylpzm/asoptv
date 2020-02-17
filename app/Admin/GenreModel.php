<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class GenreModel extends Model
{
		protected $table = 'genres';
    protected $fillable = ['genre','description'];

    public function newGenre($request)
    {
      $genre = new GenreModel;
      $genre->genre = $request->input('genre');
      $genre->description = $request->input('description');
      $genre->save();
    }
}
