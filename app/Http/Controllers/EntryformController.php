<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entryform;

class EntryformController extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function store()
    {

    }

    public function show()
    {
      $data = Entryform::all();

      return view('show', compact('data'));

    }


}
