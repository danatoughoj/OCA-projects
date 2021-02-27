<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public $developers = array(array(
        'id' => '1',
      'name' => 'Maysam Al-Turk',
       'job' => 'Full Stack Developer',
     'image' => 'images/developers/developer4.png',
     'about' => 'Full stack web and mobile development trainee at Coding Academy by Orange.',
  'facebook' => 'https://web.facebook.com/?_rdc=1&_rdr',
    'github' => 'https://github.com/MaysamTurk',
  'linkedin' => 'https://www.linkedin.com/in/maysamturk/'),
     array(
        'id' => '2',
      'name' => 'Dana Toghouj',
       'job' => 'Full Stack Developer',
     'image' => 'images/developers/developer1.jpg',
     'about' => 'Full stack web and mobile development trainee at Coding Academy by Orange.',
  'facebook' => 'https://web.facebook.com/?_rdc=1&_rdr',
    'github' => 'https://github.com/danatoughoj',
  'linkedin' => 'https://www.linkedin.com/in/maysamturk/'),
     array(
        'id' => '3',
      'name' => 'Abdallah Alhajeid',
       'job' => 'Full Stack Developer',
     'image' => 'images/developers/developer5.jpg',
     'about' => 'Full stack web and mobile development trainee at Coding Academy by Orange.',
  'facebook' => 'https://web.facebook.com/?_rdc=1&_rdr',
    'github' => 'https://github.com/Abdallah-Alhajeid',
  'linkedin' => 'https://www.linkedin.com/in/maysamturk/'),
     array(
        'id' => '4',
      'name' => 'Mohammad Bdour',
       'job' => 'Full Stack Developer',
     'image' => 'images/developers/developer6.png',
     'about' => 'Full stack web and mobile development trainee at Coding Academy by Orange.',
  'facebook' => 'https://web.facebook.com/?_rdc=1&_rdr',
    'github' => 'https://github.com/mhmdbdour',
  'linkedin' => 'https://www.linkedin.com/in/maysamturk/'),
     array(
        'id' => '5',
      'name' => 'Osama Abu Rabie',
       'job' => 'Full Stack Developer',
     'image' => 'images/developers/developer3.jpg',
     'about' => 'Full stack web and mobile development trainee at Coding Academy by Orange.',
  'facebook' => 'https://web.facebook.com/?_rdc=1&_rdr',
    'github' => 'https://github.com/OsamaAburabie',
  'linkedin' => 'https://www.linkedin.com/in/maysamturk/'),
     array(
        'id' => '6',
      'name' => 'Hala Hyasat',
       'job' => 'Full Stack Developer',
     'image' => 'images/developers/developer2.png',
     'about' => 'Full stack web and mobile development trainee at Coding Academy by Orange.',
  'facebook' => 'https://web.facebook.com/?_rdc=1&_rdr',
    'github' => 'https://github.com/HalaHyasat',
  'linkedin' => 'https://www.linkedin.com/in/maysamturk/')
                                                              );

     public function index()
     {
         // 
         $array = $this->developers;
         return view('Public.about', compact('array'));
                                                                     //    return view('/index', compact('data'));
     }
 
}
