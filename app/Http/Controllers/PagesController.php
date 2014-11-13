<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller {

  public function index(){
    $name = 'John';
    $lessons = ['My first Lesson', 'My second Lesson', 'My thrid Lesson'];
    return View('pages.home', compact('name', 'lessons'));
  }

  public function about(){
    return View('pages.about');
  }
}
