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
      @if ($errors->any()) 
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>
        @endforeach 
        </div>
        @endif

        @if (session()->has('message'))
        <div class="alert alert-{{session('alert-type')}} alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-check"></i> Alert!</h5>
         {{session('message')}}
          </div>   
          @endif
          
            
          
      

      <form method="POST" action="{{route('category.store')}}">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name"value="{{old('name')}}" id="name" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="name">descrpion</label>
            <input type="text" class="form-control" name="descrpion"value="{{old('descrpion')}}" id="name" placeholder="Enter descrpion">
          </div>
        </div>

      

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
          

@endsection
@section('script')
@endsection