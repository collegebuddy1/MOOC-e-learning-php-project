<!-- <table border="1">
<tr>
	<td>Id</td>
	<td>Nom</td>
	
	<td>Age</td>
	<td>Edit</td>
	<td>Delete</td>
	
</tr>


@foreach ($user as $key ) 

	 <tr>
	<td>{{$key->id}}</td>
	<td>{{$key->first_name}}</td>
	
	<td>{{$key->age}}</td>
	<td><a href="edit/{{$key->id}}"> Edit</a></td>
	<td><a href="add/{{$key->id}}"> Delete</a></td>
	
</tr>
@endforeach
</table>


<table border="1">
<tr>
	<td>Id</td>
	<td>Prix</td>
	<td>Id_prodt</td>
	<td>Edit</td>
	<td>Delete</td>
	
</tr>




<button><a href="add">ADD</a></button> -->
@extends('layouts.admin')
@section('content')



    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Users</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="/adduser" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
												
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>fisrt Name</th>
                        <th>last name</th>
						<th>Email</th>
                        <th>Local</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
					 @foreach ($user as $key ) 
					 	@if($key->first_name!='admin')
							 <tr>
							<td>{{$key->id}}</td>
							<td>{{$key->first_name}}</td>
	
							<td>{{$key->last_name}}</td>
							<td>{{$key->email}}</td>
							<td>{{$key->location}}</td>
	
					
                        <td>
                            <a href="edit/{{$key->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="delete/{{$key->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    		</tr>
        


			

                    	@endif
					@endforeach
                   
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item active "><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item "><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
	<!-- Edit Modal HTML -->
	
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	

@endsection;
                              	