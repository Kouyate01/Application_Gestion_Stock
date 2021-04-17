<!-- Modal Logout -->
<div class="md-modal md-just-me" id="logout-modal">
  <div class="md-content">
    <h3><strong>Déconnexion</strong> Confirmation</h3>
    <div>
      <p class="text-center"> êtes vous sûr de vouloir vous déconnecter?</p>
      <p class="text-center">
      <button class="btn btn-danger md-close">Non!</button>
      <a href="login.html" class="btn btn-success md-close">Oui, je suis sûr</a>
      </p>
    </div>
  </div>
</div>        <!-- Modal End -->

<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><a href="#"><img src="{{ URL::to('assets/img/logo.png')}}" alt="Logo"></a></h1>
        </div>
        <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                 
                <ul class="nav navbar-nav navbar-right top-navbar">

                <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="{{ URL::to('images/users/user-35.jpg')}}"></span> Jane <strong>Doe</strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Mon Profile</a></li>
                            <li><a href="#">Changer le mot de passe</a></li>
                            <li><a href="#">Paramétrage du compte</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-help-2"></i> Aide</a></li>
                            <li><a href="lockscreen.html"><i class="icon-lock-1"></i> Verrouillez-moi</a></li>
                            <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Déconnexion</a></li>
                        </ul>
                    </li>
                    <li class="right-opener">
                        <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right"></i></a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
