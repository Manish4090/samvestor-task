@extends('layouts.app')
@section('content')
 
<div class="container">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Request for Job</h4>
          <form class="forms-sample" id="requestForJobs" action="{{ route('user.request-post-save')}}">
            @csrf <!-- Add CSRF token field -->
            <div class="form-group">
              <label for="exampleInputName1">Title*</label>
              <input type="text" class="form-control" id="jobTitle" name="title" placeholder="Job Title">
              @error('title')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Description*</label>
              <textarea class="form-control" name="description" id="description" rows="4" placeholder="Job Description"></textarea>
              @error('description')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary mr-2">Request for job</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection('content')