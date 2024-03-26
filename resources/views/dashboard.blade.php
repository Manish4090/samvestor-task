@extends('layouts.app')
@section('content')
 <div class="container">
   <h1>My Jobs</h1>
   
  <div class="row">

 @if(!$posts->isEmpty()) 
  @foreach($posts->sortByDesc('id') as $post) 
    <div class="card col-md-4">
      <div class="card-body">
        <h4 class="card-title">{{ $post->title }}</h4> 
        <p class="card-text">{{ $post->description ? Str::limit($post->description, 100) : 'Not Available' }}</p> 
        <p class="{{ $post['status'] == 1 ? 'badge badge-danger' : 'badge badge-success' }}">
            {{ $post['status'] == 1 ? 'Drafted' : 'Published' }}
        </p>
      </div>
    </div>
  @endforeach
@else
  <h3>No More Jobs</h3>
@endif

  
 
  </div>
</div>
@endsection('content')