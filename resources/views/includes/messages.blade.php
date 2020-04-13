@if (count($errors) > 0)
@foreach($errors->all() as $error)
  <div class="alert alert-danger">
    {{$error}}
  </div> 
@endforeach
@endif

{{-- success notification after contact form has been submitted --}}
@if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
@endif