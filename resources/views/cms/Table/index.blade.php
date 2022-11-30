@extends('cms.parent')
@section('title')
@section('page_big'.'')
@section('page_main','')
@section('page_sub','')
@section('style')
@endsection

@section("content")
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Responsive Hover Table</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header 
        <span class="tag tag-success">Approved</span>
        -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>created_at </th>
                <th>updated_at</th>
                <th>Seting</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($Table as $Car )       
              <tr>
                <td>{{$Car->ID}}</td>
                <td>{{$Car->name}}</td>
                <td>{{$Car->created_at}}</td>
                <td>{{$Car->updated_at}}</td>
                <td>
                  <div class="btn-group">
                    <a href="{{route('Cars.edit',$Car->id)}}"class="btn btn-info">
                    <i class="fas fa-edit"></i>
                    </a>

              <form method="POST" action="{{route('Cars.destroy',$Car->id)}}">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">
                  <i class="fas fa-trash"></i>
                  </button>
             
              </form>
                    </div>
                    </td>
              </tr>
              @endforeach
            
              
            </tbody>

          </table>
        </div>

        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>



@endsection
@section('script')
@endsection