<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="nav-side-menu">
    <div class="brand">{!! Html::image('img/coosto_logo.png') !!}</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="/">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>

               

                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Manage users <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li><a href="{{ url('employee') }}">Create user</a></li>
                  <li><a href="{{ url('employee') }}">Create user group</a></li>
                </ul>


              
                 <li>
                  <a href="{{ url('profile') }}">
                  <i class="fa fa-user fa-lg"></i> Profile
                  </a>
                  </li>

            </ul>
     </div>
</div>