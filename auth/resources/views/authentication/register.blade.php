
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Créer un compte</title>
  <link rel="favicon" href="assets/images/favicon.png">
  <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!-- Custom styles for our template -->
  <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <!-- Button for smallest screens -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="/">
          <img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
      </div>
      
      <!--/.nav-collapse -->
    </div>
  </div>
  <!-- /.navbar -->

    <header id="head" class="secondary">
            <div class="container">
                    <h1>Accédez gratuitement à nos cours</h1>
                </div>
    </header>


  <!-- container -->
  <div class="container-fluid">
        <div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">
  
<h1 class="text-center text-success" style="color:grey";> Créer votre compte</h1>
<br/>

<div class="col-sm-12">

 


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      

                  <form action="/register" method="POST">
                    {{{ csrf_field() }}}

                   <!--  @if(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                    @endif -->
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
                           <div class=" pull-right btn-link">
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" required>
                               <label class="form-check-label" >
                                  <a data-toggle="modal" data-target="#myModal">terms & conditions</a>
                             </label>
                                    </div></div>
                      </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </body>
  </html>﻿
