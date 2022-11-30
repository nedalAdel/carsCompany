@extends('cms.parent')

@section('title','Edit  Car')
@section('page_big'.' Edit Car')
@section('page_main','Cars')
@section('page_sub','edit')
@section('style')
@endsection

@section("content")

<div class="row">
  <!-- left column -->
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="POST" action="{{route('Cars.update',$car->id)}}">
        @method('GET')
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="name">name address</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter email">
          </div>
         
        
         
         
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

   
        <!-- /.card-footer -->
  
    <!-- /.card -->

  </div>
  <!--/.col (left) -->
  <!-- right column -->
 

@endsection
@section('script')
@endsection