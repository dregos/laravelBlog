@if(count($errors->all()) > 0)
  @foreach($errors->all() as $error)
    <div class="form-group">
      <div class="alert alert-danger">
        {{$error}}
      </div>
    </div>
  @endforeach
@endif
