

<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgout Password</title>
  <link rel="favicon" href="assets/images/favicon.png">
  <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
  <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>
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

    <header id="head" class="secondary">
            <div class="container">
                    <h1>Forgout password</h1>
                </div>
    </header>




        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Forgout password</h3>
                </div>

                <div class="panel-body">
                  <form action="/forgout-password" method="POST">
                    {{{ csrf_field() }}}

                    @if(session('succes'))
                    <div class="alert alert-info">
                        {{session('succes')}}
                    </div>
                    @endif

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="Email@Emial" required>
                      </div>
                    </div>

                  

                     

                      <div class="form-group">
                          <input type="submit" value="Send" class="btn btn-success">
                      </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </body>
  </html>﻿

