<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;

class SongsController extends Controller {

  public function index() {
    $songs = $this->getSongs()->get();
    return View('songs.song', compact('songs'));
  }

  public function show($id) {
    $song = $this->getSongs()->find($id);
    return View('songs.show', compact('song'));
  }

  private function getSongs() {
    $songs = DB::table('songs');
    return $songs;
  }
}
