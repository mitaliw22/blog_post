@extends('layouts.master')

@section('title')
 
 Dashboard || Doctor_Admin

@endsection
@section('content')
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/save-register" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
                          <div class="modal-body">
     
                                   <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom001">Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" required>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom004">Phone</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="Phone" id="Phone" placeholder="Enter Phone Number" required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom003">Email</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" required>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom003">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>

                                            </div>
                                        </div>
                                      </div>
                                        <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom002">User Type</label>
                                            <div class="input-group">
                                                <select class="form-control" id="usertype" name="usertype" required>
                                                    <option>-</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Patient">User</option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                          
         <!--  <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        -->
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
                                <li class="breadcrumb-item"><a href="#">User Profile</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit User Role</li>
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
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Id
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Phone
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        User Type
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($users as $row)
                      <tr>
                        <td>
                          {{ $row->id }} 
                        </td>
                        <td>
                          {{ $row->name }}
                        </td>
                        <td>
                          {{ $row->phone }}
                        </td>
                        <td>
                          {{ $row->email }}
                        </td>
                        <td>
                         {{ $row->usertype }}
                        </td>
                        <td>
                          <a href="/role-edit/{{ $row->id }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                          <form action="/role-delete/{{ $row->id }}" method="post">
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
          </div>

@endsection


@section('scripts')


@endsection
