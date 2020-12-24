@extends('layouts.master')



@section('title')

Dashboard || Admin

@endsection




@section('content')

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/save-post" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
                          <div class="modal-body">
     
                                   <div class="form-row">
                                        <div class="col-md-12">
                                            <label for="validationCustom001">Post Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Post Name" required>

                                            </div>
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="col-md-12">
                                            <label for="validationCustom004">Post Description</label>
                                            <div class="input-group">
                                                <textarea type="text" class="form-control" name="description" id="description" placeholder="Enter Post Description" required></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom003">Post date</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="date" id="date" placeholder="Enter date" required>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom002">Post Type</label>
                                            <div class="input-group">
                                                <select class="form-control" id="posttype" name="posttype" required>
                                                    <option>-</option>
                                                    <option value="Technology">Technology</option>
                                                    <option value="Entertainment">Entertainment</option>  
                                                    <option value="Science">Science</option>
                                                    <option value="News">News</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="submit">submit</button>
      </div>
       </form>
    </div>
  </div>
</div>
<div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pl-0">
                                <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i></a></li>
                                <li class="breadcrumb-item"><a href="#">Post</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create New Post</li>
                            </ol>
                        </nav>
                        <div class="ms-panel">
                            <div class="ms-panel-header ms-panel-custome">
                                <h6>User Management List</h6>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">ADD</button> 
                            </div>
                             @if (session('status'))
                                <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                           </div>
                            @endif
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="datatable">
                    <thead class=" text-primary">
                      <th>
                        Id
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Date
                      </th>
                      <th>
                        Post Type
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($post as $row)
                      <tr>
                        <td>
                          {{ $row->id }} 
                        </td>
                        <td>
                          {{ $row->name }}
                        </td>
                        <td>
                          {{ $row->description }}
                        </td>
                        <td>
                          {{ $row->date }}
                        </td>
                        <td>
                         {{ $row->posttype }}
                        </td>
                        <td>
                          <a href="/post-edit/{{ $row->id }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                          <form action="/post-delete/{{ $row->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete</button> 
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

@endsection



@section('scripts')

<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable
    ( {
        "lengthMenu": [[3, 10, 50, -1], [3, 10, 50, "All"]]
    } );
} )
</script>

@endsection