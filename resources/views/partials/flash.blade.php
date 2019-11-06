@if ($errors->any())
  <div class="alert header-alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    Er zijn errors.
  </div>
@endif
@if (Session::has('flash_message'))
  <div class="alert header-alert {{ session('flash_class') }}" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    @if(is_array(session('flash_message')))
      <ul>
        @foreach(session('flash_message') as $msg)
          <li>{!! $msg !!}</li>
        @endforeach
      </ul>
    @else
      {!! session('flash_message') !!}
    @endif
  </div>
@endif