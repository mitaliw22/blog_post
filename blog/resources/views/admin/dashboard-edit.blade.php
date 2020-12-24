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
					<form action="/post-update/{{ $post->id }}" method="POST">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						
						 <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom001">Post Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="name" id="name" value="{{ $post->name }}">

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom004">Post Description</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="description" id="description" value="{{ $post->description }}">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom003">Date</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="date" id="date" value="{{ $post->date }}">

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom002">Post Type</label>
                                            <div class="input-group">
                                                <select class="form-control" id="posttype" name="posttype" required>
                                                    <option>-</option>
                                                    <option value="Technology" {{ 'Technology' == $post->posttype ? 'selected' : '' }}>Technology</option>
                                                    <option value="Entertainment" {{ 'Entertainment' == $post->posttype ? 'selected' : '' }}>Entertainment</option>  
                                                    <option value="Science" {{ 'Science' == $post->posttype ? 'selected' : '' }}>Science</option>
                                                    <option value="News" {{ 'News' == $post->posttype ? 'selected' : '' }}>News</option>
                                                </select>
                                            </div>
                                        </div>
                                    <!-- </div> -->
                                </div>
					  <button type="submit" class="btn btn-success">Update</button>
					  <a href="/dashboard" class="btn btn-danger">Cancel</a>
						
					</form>
					
				</div>
			</div>
			
		</div>
@endsection


@section('scripts')



@endsection



