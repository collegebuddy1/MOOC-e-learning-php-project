 
@extends('layouts.admin')
@section('content')

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      

                  <form action="/adduser" method="POST">
                    {{{ csrf_field() }}}

               @if ($errors->any())
                 <div class="alert alert-danger">
                   <ul>
                    @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                        @endforeach
                            </ul>
                          </div>
                     @endif



                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                      </div>
                    </div>

                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" name="first_name" class="form-control" placeholder="First Name">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                          <input type="text" name="location" class="form-control" placeholder="Location">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          Devenir Formateur<input class="form-check-input pull-right" type="checkbox" name="domaine" value="1">
                        </div>
                      </div>

                      


                      <div class="form-group">
                          <input type="submit" value="Register" class="btn btn-success">
                         
                      </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </body>

@endsection

 