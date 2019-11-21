<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

  public function edit($id)
  {
      // DBよりURIパラメータと同じIDを持つbabyの情報を取得
      $baby = Baby::findOrFail($id);

      // 取得した値をビュー「baby/edit」に渡す
      return view('baby/edit', compact('baby'));
  }

  public function update(Request $request, $id)
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