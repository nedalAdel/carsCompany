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
      <div class="category21d">
        <div class="category21d-header">
          <h3 class="category21d-title">Responsive Hover Table</h3>

          <div class="category21d-tools">
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
        <!-- /.category21d-header 
        <span class="tag tag-success">Approved</span>
        -->
        <div class="category21d-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>descrpion</th>
                <th>status</th>
                <th>created_at </th>
                <th>updated_at</th>
                <th>Seting</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($category21 as $category )       
              <tr>
                <td>{{$category->ID}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->descrpion}}</td>
                <td>{{$category->status}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
                <td>
                  <div class="btn-group">
                    <a href="{{route('category.edit',$category->id)}}"class="btn btn-info">
                    <i class="fas fa-edit"></i>
                    </a>

                <a href="#" onclick="confirmDestroy()"  class="btn btn-danger">
                  <i class="fas fa-trash"></i>
                </a>
             
                <form method="POST" action="{{route('category.destroy',$category->id)}}">
                  @csrf
                  @method('DELETE')
               
                    </td>
              </tr>
              @endforeach
            
              
            </tbody>

          </table>
        </div>

        <!-- /.category21d-body -->
      </div>
      <!-- /.category21d -->
    </div>
  </div>



@endsection
@section('script')
<script>
  function confirmDestroy(){
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    );
  }
});
  }
</script>
@endsection