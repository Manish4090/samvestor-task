@extends('admin.layouts.app')
@section('content')
 <div class="container">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Request for Job</h4>
          <form class="forms-sample" id="requestForJobs" action="{{ url('admin/user-request-post-updated/' . $post->id)}}" method="POST">
            @csrf <!-- Add CSRF token field -->
            <div class="form-group">
              <label for="exampleInputName1">Title*</label>
              <input type="text" class="form-control" id="jobTitle" name="title" value="{{ $post->title }}" placeholder="Job Title">
              @error('title')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Description*</label>
              <textarea class="form-control" name="description" id="description"  rows="4" placeholder="Job Description">{{ $post->description }}</textarea>
              @error('description')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
            <label for="exampleFormControlSelect1">Large select</label>
            <select class="form-control form-control-lg" name="status" id="exampleFormControlSelect1">
            
            <option value="{{ \App\Models\Post::DRAFTED }}" {{ ($post->status == \App\Models\Post::DRAFTED) ? 'selected' : ''}} >Drafted</option>
            <option value="{{ \App\Models\Post::PUBLISHED }}" {{ ($post->status == \App\Models\Post::PUBLISHED) ? 'selected' : ''}}>Published</option>
           
            </select>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Request for job</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection('content')