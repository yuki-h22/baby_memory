@section('content')
<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>書籍登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
          @if($target == 'store')
          <form action="/baby" method="post">
          @elseif($target == 'update')
          <form action="/baby/{{ $baby->id }}" method="post">
                <!-- updateメソッドにはPUTメソッドがルーティングされているのでPUTにする -->
                <input type="hidden" name="_method" value="PUT">
          @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">おなまえ</label>
                    <input type="text" class="form-control" name="name" value="{{ $baby->name }}">
                </div>
                <div class="form-group">
                    <label for="price">お誕生日</label>
                    <input type="text" class="form-control" name="birthday" value="{{ $baby->birthday }}">
                </div>
                <div class="form-group">
                    <label for="price">お誕生日</label>
                    <input type="image" class="form-control" name="image" value="{{ $baby->image }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/baby">戻る</a>
            </form>
        </div>
    </div>
</div>
@endsection
