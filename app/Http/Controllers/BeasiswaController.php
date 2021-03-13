<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Beasiswa;


class BeasiswaController extends Controller
{

  public function index()
  {
    $beasiswa = Beasiswa::all();
    return view('pages.vbeasiswa')->with('beasiswa', $beasiswa);
  }


  public function dbeasiswa()
  {
    $beasiswa = Beasiswa::all();
    return view('pages.vdetailbeasiswa')->with('beasiswa', $beasiswa);
  }

  public function create()
  {
    //
  }


  public function store(Request $request)
  {
  }


  public function show($id)
  {
    $beasiswa = Beasiswa::findOrFail($id);
    return view('pages.vdetailbeasiswa', compact('beasiswa'));
  }


  public function edit($id)
  {
    //
  }


  public function update(Request $request, $id)
  {
    //
  }


  public function destroy($id)
  {
    //
  }
}
