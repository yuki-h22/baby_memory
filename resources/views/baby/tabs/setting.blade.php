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
    <div><a href="/baby/create" class="btn btn-default">赤ちゃんが生まれたよ</a></div>
  </div>
</div>
@endsection
