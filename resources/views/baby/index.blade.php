@extends('baby/layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">書籍一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">書籍名</th>
        <th class="text-center">価格</th>
        <th class="text-center">著者</th>
        <th class="text-center">削除</th>
      </tr>
      @foreach($babies as $baby)
      <tr>
        <td>
          <a href="/baby/{{ $baby->id }}/edit">{{ $baby->id }}</a>
        </td>
        <td>{{ $baby->name }}</td>
        <td>{{ $baby->birthday }}</td>
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
    <div><a href="/baby/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>
@endsection