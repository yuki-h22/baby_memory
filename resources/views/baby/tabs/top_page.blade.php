@section('top')
<div class="side_bar">
  サイド
    <div class="side_bar_top">
      top
        <div class="side_bar_top_image">
            {{-- @if($baby->image == null) --}}
                <img src="/storage/noimage.png" >
            {{-- @else --}}
                {{-- <img src="/storage/{{$user->image}}"> --}}
            {{-- @endif --}}
        </div>
    </div>
    <div class="side_bar_data">
        <div class="side_bar_data_name"></div>
        <div class="side_bar_data_birthday"></div>
    </div>
    <div class="side_bar_under">
        <div class="side_bar_under_image">
        </div>
    </div>
    <div class="side_bar_bottom">
        <div class="side_bar_bottom_message"></div>
    </div>
</div>
<div class="main">
    外側
    <div class="main_top">タイトル</div>
    <div class="main_content">
        コンテンツ
        <div class="main_content_data">
            <div class="main_content_data_image">写真</div>
            <div class="main_content_data_title">タイトル</div>
        </div>
        <div class="main_content_comment">コメント</div>
    </div>
    <div class="main_edit_btn">ボタン</div>
</div>
@overwrite
