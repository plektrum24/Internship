<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
  public function index()
  {
    $beasiswa = DB::table('beasiswas')->count();
    $magang = DB::table('magangs')->count();
    return view('pages.vhome', compact('beasiswa', 'magang'));
  }

  public function homepage()
  {
    return view('homepage');
  }


  // public function show($id)
  // {
  //   $user = User::findOrFail($id);
  //   return view('pages.vhome', compact('user'));
  // }
}
