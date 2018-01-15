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

    public function store(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|string|email|unique:entryforms',
        'telephone' => 'required|min:11|numeric',
        'dob' => 'required',
        'comments' => 'required|string|max:500'
      ]);

      $info = Entryform::create([
        'firstname' => $request['firstname'],
        'lastname' => $request['lastname'],
        'email' => $request['email'],
        'telephone' => $request['telephone'],
        'gender' => $request['gender'],
        'dob' => $request['dob'],
        'comments' => $request['comments']
      ]);

        $info->save();
        return redirect('/welcome');

    }

    public function show()
    {
      $information = Entryform::all();

      return view('show', compact('information'));

    }


}
