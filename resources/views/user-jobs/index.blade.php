@extends('layouts.app')
@section('content')
 
<div class="container">
   <h1>Applied Jobs</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
  <div class="row">

    @if(isset($getUserPost))
  @forelse($getUserPost as $post)
  <div class="card col-md-4">
    <div class="card-body">
      <h4 class="card-title">{{$post['title']}}</h4>
      <p class="card-text">{{ $post['description'] ? Str::limit($post['description'], 100) : 'Not Available' }}</p>
      <p class="card-text">{{($post['status'] == 1) ? 'Drafted' : 'Published'}}</p>
    </div>
  </div>
  @empty
  <h3>No More Jobs</h3>
  @endforelse
  @else
  <h3>No More Jobs</h3>
  @endif
  
 
  </div>
</div>

@endsection('content')