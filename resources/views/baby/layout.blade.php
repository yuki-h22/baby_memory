<head>
  <title>Baby memorY</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/sass/reset.scss">
  <link rel="stylesheet" href="/css/sass/tab.scss">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/script.js"></script>
  {{-- <script src="js/aa.js"></script> --}}

</head>

<ul class="tab">
  <li class="active">TOP Page</li>
  <li>０〜2ヶ月</li>
  <li>３〜5ヶ月</li>
  <li>６〜8ヶ月</li>
  <li>９〜11ヶ月</li>
  <li>１歳〜</li>
  <li>アルバム</li>
  <li>設定</li>

</ul>
<ul class="content">
  <li> @yield('top') </li>
  <li class="hide"> @yield('photo02') </li>
  <li class="hide"> @yield('photo35') </li>
  <li class="hide"> @yield('photo68') </li>
  <li class="hide"> @yield('photo911') </li>
  <li class="hide"> @yield('photo1') </li>
  <li class="hide"> @yield('content') </li>
  <li class="hide"> @yield('setting')</li>

</ul>

