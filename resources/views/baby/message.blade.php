<div class = "row">
  <div class = "col-md-12">
  @if ($erroes->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  </div>
</div>
