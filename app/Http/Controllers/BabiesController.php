<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\BabyRequest;
use App\Baby;

class BabiesController extends Controller
{
  public function index()
  {
      $babies = Baby::all();
      return view('baby/index', compact('babies'));
  }

  public function store(BabyRequest $request)
  {
      $baby = new Baby();
      $baby->name = $request->name;
      $baby->birthday = $request->birthday;
      $baby->image = $request->image;
      $baby->save();

      return redirect("/baby");
  }

  public function create()
  {
      $baby = new Baby();
      return view('baby/create', compact('baby'));
  }

  public function edit($id)
  {
      $baby = Baby::findOrFail($id);

      return view('baby/edit', compact('baby'));
  }

  public function update(BabyRequest $request, $id)
  {
      $baby = Baby::findOrFail($id);
      $baby->name = $request->name;
      $baby->birthday = $request->birthday;
      $baby->save();

      return redirect("/baby");
  }

  public function destroy($id)
  {
      $baby = Baby::findOrFail($id);
      $baby->delete();

      return redirect("/baby");
  }

}