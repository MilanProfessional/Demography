
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="/about">Logo</a>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#pricing">Welcome Admin</a></li>
        <li>
             <a href="{{ route('admin.logout') }}" >Logout</a>

             <!--<form id="logout-form" action="{{ 'App\Admin' == Auth::getProvider()->getModel() ? route('admin.logout') : route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> -->
        </li>
      </ul>
    </div>
 </div>
</nav> 
 
