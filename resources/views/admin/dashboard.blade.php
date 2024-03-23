@extends('admin.layouts.app')
@section('content')
<div class="main-panel">
         <h1 class="text-center">Welcome back {{Auth::guard('admin')->user()->name}}</h1>
        </div>
@endsection