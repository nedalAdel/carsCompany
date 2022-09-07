@extends('cms.parent')

@section('title','Create Car')
@section('page_big'.'Create Car')
@section('page_main','Cars')
@section('page_sub','create')
@section('style')
@endsection

@section("content")

<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Cars name</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="POST" action="{{route('Cars.store')}}">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
          </div>
        </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
          

@endsection
@section('script')