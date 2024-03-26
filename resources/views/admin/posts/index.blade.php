@extends('admin.layouts.app')
@section('content')
  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Posts List </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Posts List</a></li>
                </ol>
              </nav>
            </div>
            <div class="row">
                  @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    </p>
                    <table class="table user_datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>status</th>
                                    <th>created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                  </div>
                </div>
              </div>
            
             
            
            
           
            </div>
          </div>
          
        </div>
        
        
@endsection('content')