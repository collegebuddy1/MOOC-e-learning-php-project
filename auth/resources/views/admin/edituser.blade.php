
@extends('layouts.admin')
@section('content')



    <form action="/edit/{{$user->id}}" method="POST">
          {{ csrf_field() }}
          <div class="modal-header">            
            <h4 class="modal-title">Edit User</h4>
            
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label> first Name</label>
              <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}" required>
            </div>
            <div class="form-group">
              <label>last name</label>
              <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}" required>
            </div>
        
            <div class="form-group">
              <label>Location</label>
              <input type="text" class="form-control" name="location" value="{{$user->location}}" required>
            </div>          
          </div>
          <div class="modal-footer">
           
            <input type="submit" class="btn btn-success" value="Edit">
          </div>
        </form>

@endsection
                                
       <!--                           /* 'email',
        'password',
        'last_name',
        'first_name',
        'permissions',
        'location',
        'domaine',*/ -->