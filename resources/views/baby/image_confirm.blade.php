@section('body')
    <form action="baby/image_complete" method="post">
        @csrf
        <table border="1">
            <tr>
                <td>画像</td>
                <td><img src="{{ $data['read_temp_image'] }}" width="50" height="50"></td>
            </tr>
            <tr>
                <td>おなまえ</td>
                <td>{{ $data['name'] }}</td>
            </tr>
            <tr>
                <td>お誕生日</td>
                <td>{{ $data['birthday'] }}</td>
            </tr>
        </table>
        <input type="submit" name="action" value="送信" />
    </form>
@endsection