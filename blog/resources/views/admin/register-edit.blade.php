@extends('layouts.master')

@section('title')
 
 Dashboard || Doctor_Admin

@endsection



@section('content')

        <div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3>Edit role for registered users</h3>
				</div>
				<div class="card-body">
					<form action="/role-register-update/{{ $users->id }}" method="POST">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						
						 <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom001">Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="name" id="name" value="{{ $users->name }}">

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom004">Phone</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="phone" id="phone" value="{{ $users->phone }}">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom003">Email</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" name="email" id="email" value="{{ $users->email }}">

                                            </div>
                                        </div>
                                         <div class="col-md-6 mb-3">
                                            <label for="validationCustom003">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password" id="password" value="{{ $users->password }}">

                                            </div>
                                        </div>
                                      </div>
                                        <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom002">User Type</label>
                                            <div class="input-group">
                                                <select class="form-control" id="usertype" name="usertype" required>
                                                    <option>-</option>
                                                    <option value="Admin" {{ 'Admin' == $users->usertype ? 'selected' : '' }}>Admin</option>
                                                    <option value="Patient" {{ 'Patient' == $users->usertype ? 'selected' : '' }}>User</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
					  <button type="submit" class="btn btn-success">Update</button>
					  <a href="/role-register" class="btn btn-danger">Cancel</a>
						
					</form>
					
				</div>
			</div>
			
		</div>
@endsection


@section('scripts')



@endsection



