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
      $babys = Baby::all();

      // 取得した値をビュー「baby/index」に渡す
      return view('baby/index', compact('babys'));
  }

  public function edit($id)
  {
      // DBよりURIパラメータと同じIDを持つbabyの情報を取得
      $baby = Baby::findOrFail($id);

      // 取得した値をビュー「baby/edit」に渡す
      return view('baby/edit', compact('baby'));
  }
}