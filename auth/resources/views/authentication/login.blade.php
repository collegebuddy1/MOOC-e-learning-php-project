




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <link rel="favicon" href="assets/images/favicon.png">
  <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
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
                    <h1>Se connecter</h1>
                </div>
    </header>


  <!-- container -->
  <div class="container-fluid">
        <div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">
  
<h1 class="text-center text-info" style="color:grey";> Connexion</h1>
<br/>

<div class="col-sm-12">

 


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
  <form action="/login" method="POST">
                    {{{ csrf_field() }}}

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                    @endif
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
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                      </div>
                      <a href="forgout-password">forgout-password?</a>

                      <div class="form-group">
                          <input type="submit" value="Login" class="btn btn-success">
                      </div>

                  </form>
<br/>

    </div>

  
   </div>
  </div>
</div>
</div>
      </div>
  <!-- /container -->

    <footer id="footer">
 
    <div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Categorie
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                Developpement web 
              </a>
            </li>
            <li><a href="#">
                Developement mobile
              </a>
            </li>
            <li><a href="#">
                web Design
              </a>
            </li>
            <li><a href="#">
               Language de programmation
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Liens utiles
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li> <a href="#">
                Formation  </a>
            </li>
            <li><a href="#">
                Videos
              </a>
            </li>
            <li><a href="#">
                Qui somme nous?
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          De plus 
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                Devenir Formateur
              </a>
            </li>
            <li> <a href="#">
                Contact
              </a>
            </li>
            
            
            
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6"> 
              <div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <p></p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> GI-ENSAH<br>
            <i class="fa fa-phone"></i>+212666666<br>
             <i class="fa fa-envelope-o"></i> youremail@email.com
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
      

      <div class="clear"></div>
      <!--CLEAR FLOATS-->
    </div>
    <div class="footer2">
      <div class="container">
        <div class="row">

          <div class="col-md-6 panel">
            <div class="panel-body">
              <p class="simplenav">
                
              </p>
            </div>
          </div>

          <div class="col-md-6 panel">
            <div class="panel-body">
              <p class="text-right">
                Copyright &copy; 2018.by GI1
              </p>
            </div>
          </div>

        </div>
        <!-- /row of panels -->
      </div>
    </div>
  </footer>


  <!-- Bibliotheque javascript &jqeury -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Google Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>


</body>
</html>
