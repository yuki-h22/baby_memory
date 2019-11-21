<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BabyRequest;
use App\Baby;

class BabyController extends Controller
{
  public function index()
  {
      // DBよりbabyテーブルの値を全て取得
      $babies = Baby::all();

      // 取得した値をビュー「baby/index」に渡す
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
      return view('book/create', compact('baby'));
  }

  public function edit($id)
  {
      // DBよりURIパラメータと同じIDを持つbabyの情報を取得
      $baby = Baby::findOrFail($id);

      // 取得した値をビュー「baby/edit」に渡す
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