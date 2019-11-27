@extends('baby/layout')
@section('setting')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">赤ちゃんたち</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">おなまえ</th>
        <th class="text-center">お誕生日</th>
        <th class="text-center">写真</th>
        <th class="text-center">削除</th>
      </tr>
      @foreach($babies as $baby)
      <tr>
        <td>
          <a href="/baby/{{ $baby->id }}/edit">{{ $baby->name }}</a>
        </td>
        <td>{{ $baby->birthday }}</td>
        <td>{{ $baby->image }}</td>
        <td>
          <form action="/baby/{{ $baby->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a class="btn btn-default">赤ちゃんが生まれたよ</a></div>
    {{-- href="/baby/create"  --}}
  </div>
</div>

<div class = "create_baby under_box">
  <form method="post" action="baby" enctype="multipart/form-data">
      <div class="form-group">
          <label for="name">おなまえ</label>
          <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
          <label for="price">お誕生日</label>
          <input type="text" class="form-control" name="birthday">
      </div>
      <div class="form-group">
          <label for="price">写真</label>
              {{ csrf_field() }}
          <fieldset>
              <div>
                  <input id="file" type="file" name="image">
                  @if ($errors->has('image'))
                      {{ $errors->first('image') }}
                  @endif
              </div>
          </fieldset>
      </div>
      <button type="submit" class="btn btn-default">登録</button>
      <a href="/baby">戻る</a>
  </form>
</div>
@endsection
