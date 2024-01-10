  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          @if(Sentinel::check())
           <li role="presentation">
           <form action="/logout" method="POST" id="logout-form">
             {{csrf_field()}}
             <a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>

           </form>
         </li>

          @else
          <li class="nav-item active">
            <a class="nav-link" href="/login">Login </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">sing in</a>
          </li>
        
     @endif
        </ul>
   <h3 class="text-muted">
      @if(Sentinel::check())
      Hello {{Sentinel::getUser()->first_name}}
       @else
     Aurhentication with Sentinel
      @endif
   </h3>
      </div>
    </nav>