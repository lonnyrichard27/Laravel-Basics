{{-- extending the blade.app.php file from the layouts folder --}}
@extends('layouts.app')

{{-- putting the content of this page within the app.blade.php  --}}
@section('content')
    <h1>Home</h1> 
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, nostrum quis? Ratione, ea voluptatum corrupti alias nemo, natus magnam saepe suscipit, nostrum nihil quaerat voluptates facere omnis hic officia sit.</p>
@endsection

@section('sidebar')
    @parent
@endsection