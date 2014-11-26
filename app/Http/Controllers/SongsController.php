<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Song;
use App\Http\Requests\CreateSongRequest;

class SongsController extends Controller {

  public function index(Song $song) {
    $songs = $song->get();
    return View('songs.song', compact('songs'));
  }

  public function show(Song $song) {
    return View('songs.show', compact('song'));
  }

  public function edit(Song $song) {
    return View('songs.edit', compact('song'));
    //return 'Edit the song with a title of '.$song->title;
  }

  public function update(CreateSongRequest $song, Request $request) {

    $song->fill($request->input())->save();

    return redirect()->route('allSongs');
  }

  public function create() {
  
    return View('songs.create');
  }

  public function store(CreateSongRequest $request, Song $song) {
    $song->create($request->all());
    return redirect()->route('allSongs');
  }

  public function destroy(Song $song) {
    $song->delete();
    return redirect()->route('allSongs');
  }
}
