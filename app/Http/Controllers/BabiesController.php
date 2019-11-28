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

    // public function store(BabyRequest $request)
    // {

    // $baby = new Baby();
    // $baby->name = $request->name;
    // $baby->birthday = $request->birthday;
    // $baby->image = $request->image;
    // $baby->save();
    
    // return redirect("/baby");
    // }

    public function postImageConfirm(BabyRequest $request)
    {
        $post_data = $request->except('imagefile');
        $imagefile = $request->file('imagefile');
    
        $temp_image = $imagefile->store('public/temp');
        $read_temp_image = str_replace('public/','storage/',$temp_image);
        $name = $post_data['name'];
        $birthday = $post_data['birthday'];
        $data = array(
            'name' => $name,
            'birthday' => $birthday,
            'temp_image' => $temp_image,
            'read_temp_image' => $read_temp_image,
        );
        $request->session()->put('data', $data);
    
        return view('image_confirm', compact('data') );

    }

    public function getImageComplete(Request $request) {
        $data = $request->session()->get('data');
        $temp_image = $data['temp_image'];
        $read_temp_image = $data['read_temp_image'];
    
        $filename = str_replace('public/temp/', '', $temp_image);
        //ファイル名は$temp_imageから"public/temp/"を除いたもの
        $storage_image = 'public/productimage/'.$filename;
        //画像を保存するパスは"public/productimage/xxx.jpeg"
    
        $request->session()->forget('data');
    
        Storage::move($temp_image, $storage_image);
        //Storageファサードのmoveメソッドで、第一引数->第二引数へファイルを移動
    
        $read_image = str_replace('public/', 'storage/', $storage_image);
        //商品一覧画面から画像を読み込むときのパスはstorage/productimage/xxx.jpeg"
        $name = $data['name'];
        $birthday = $data['birthday'];
    
        $this->babiescontroller->image = $read_image;
        $this->babiescontroller->name = $name;
        $this->babiescontroller->birthday = $birthday;
        $this->babiescontroller->save();
        return view('image_complete');
    }







    public function create()
    {
        $baby = new Baby();
        return view('baby/create', compact('baby'));
    }

    public function show($id)
    {
        return view('baby', ['baby' => Baby::findOrFail($id)]);
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