<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <div class="clearfix"></div>
        <!--- Profile -->
        <div class="profile-info">
            <div class="col-xs-4">
                <a href="profile.html" class="rounded-image profile-image"><img src="{{ URL::to('images/users/user-100.jpg')}}"></a>
            </div>
            <div class="col-xs-8">
                <div class="profile-text">Bienvenue <b>ghfhgjf</b></div>

            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href='{{ route('home.dashboard') }}' id="active-home">
                        <i class='icon-home-3'></i>
                        <span>Dashboard</span>

                    </a>

                </li>
                <li class='has_sub'>
                    <a href='javascript:void(0);'>
                        <i class='fa fa-table'></i>
                        <span>Gestion de produit</span>
                        <span class="pull-right">
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    <ul>
                        <li>
                            <a href='#' id="active-prod-table">
                                <span>Produits</span>
                            </a>
                        </li>

                        <li>
                            <a href='#' id="active-cate-table">
                                <span>Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href='#' id="active-fourn-table">
                                <span>Fournisseurs</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='has_sub'>
                    <a href='javascript:void(0);'>
                        <i class='fa fa-table'></i>
                        <span>Gestion stocks</span>
                        <span class="pull-right">
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    <ul>
                        <li>
                            <a href='{{ route('show.entres') }}' id="active-entres-table">
                                <span>Entrees</span>
                            </a>
                        </li>

                        <li>
                            <a href='{{ route('show.sorties') }}' id="active-sorties-table">
                                <span>Sorties</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

    </div>

</div>