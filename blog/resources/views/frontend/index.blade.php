@extends('layouts.frontend')


@section('title')

Home

@endsection




@section('content')

      <div class="content">
     
      </div>
 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Blog List</h4>
              </div>
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
                        Description
                      </th>
                      <th>
                        Date
                      </th>
                      <th>
                        Blog Type
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
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              </div>
          </div>
        </div>

@endsection



@section('scripts')

@endsection



