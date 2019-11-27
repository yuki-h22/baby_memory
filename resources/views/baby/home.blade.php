<div class = "create_baby under_box">
    <form method="post" action="{{ action('BabiesController@store') }}" enctype="multipart/form-data">
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