<?php

namespace App\Http\Controllers;

use App\Models\Magang;

use Illuminate\Http\Request;

class MagangController extends Controller
{

  public function index()
  {
    $magang = Magang::all();
    return view('pages.vmagang')->with('magang', $magang);
  }


  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    //
  }


  public function show($id)
  {
    $magang = Magang::findOrFail($id);
    return view('pages.vdetailmagang', compact('magang'));
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
