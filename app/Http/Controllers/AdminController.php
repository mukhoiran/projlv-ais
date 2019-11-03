<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $module         = 'ais.admin.';

    public function index(){
      return view($this->module.'dashboard.main');
    }
}
