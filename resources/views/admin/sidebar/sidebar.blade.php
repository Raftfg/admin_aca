<div style=" z-index: 2;" id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark ">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo ">
        <span class=" demo ">
            <img width="60" src="{{ asset('assets/images/refonte.png') }}" alt="Brand Logo" class="img-fluid">
        </span>
        <a href="#" class="app-brand-text demo sidenav-text font-weight-normal ml-2">AAC</a>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    {{-- <div class="sidenav-divider mt-0 " style="margin-top: -29px !important"></div> --}}
    <div class="sidenav-divider mt-0"></div>
    <!-- Links -->
    <ul class="sidenav-inner py-1">
        <!-- Dashboards -->
        <li class="sidenav-item active">
            <a href="{{route('admin')}}" class="sidenav-link">
                <i class="sidenav-icon feather icon-home"></i>
                <div>Dashboards</div>
            </a>
        </li>
        {{-- <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
            <i class="sidenav-icon feather icon-user"></i>
                <div>Utilisateurs</div>
            </a>
            <ul class="sidenav-menu">
                <li>
                    <a href="{{route('admin/register')}}" class="sidenav-link ">
                        <i class="sidenav-icon feather icon-user"></i>
                        <div>Utilisateur</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin/users')}}" class="sidenav-link  ">
                        <i class="sidenav-icon feather icon-list"></i>
                        <div>Liste</div>
                    </a>
                </li>
            </ul>
        </li> --}}
@can('voir_module_utilisateur')
    <li class="sidenav-item">
        <a href="javascript:" class="sidenav-link sidenav-toggle">
            <i class="sidenav-icon feather icon-user"></i>
            <div>Utilisateurs</div>
        </a>
        <ul class="sidenav-menu">
            <li>
                <a href="{{ route('admin/register') }}" class="sidenav-link">
                    <i class="sidenav-icon feather icon-user"></i>
                    <div>Utilisateur</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin/users') }}" class="sidenav-link">
                    <i class="sidenav-icon feather icon-list"></i>
                    <div>Liste</div>
                </a>
            </li>
        </ul>
    </li>
@endcan

        @can('voir_module_vehicle')
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon  ion ion-md-car align-middle"></i>
                <div>Véhicules</div>
            </a>
            <ul class="sidenav-menu">
                <li>
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="{{route('admin/vehicule')}}" class="sidenav-link ">

                        <i class="sidenav-icon ion ion-md-car align-middle"></i>

                        <div>Véhicule</div>
                    </a>
                </li>
                <li>
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="{{route('admin/vehicules')}}" class="sidenav-link  ">
                        <i class="sidenav-icon feather icon-list"></i>
                        <div>Liste</div>
                    </a>
                </li>

            </ul>
        </li>
        @endcan
      @can('voir_module_marque_vehicule')
      <li class="sidenav-item">
        <a href="javascript:" class="sidenav-link sidenav-toggle">
            <i class="sidenav-icon  ion ion-md-cog align-middle"></i>
            <div>Marques de véhicule</div>
        </a>
        <ul class="sidenav-menu">
            <li>
                <!-- route n'existe pas sans le name du web.php-->
                <a href="{{route('admin/marque')}}" class="sidenav-link ">

                    <i class="sidenav-icon ion ion-md-cog align-middle"></i>

                    <div>Marque</div>
                </a>
            </li>
            <li>
                <!-- route n'existe pas sans le name du web.php-->
                <a href="{{route('admin/marques')}}" class="sidenav-link  ">
                    <i class="sidenav-icon feather icon-list"></i>
                    <div>Liste</div>
                </a>
            </li>

        </ul>
    </li>
    @endcan


    @can('voir_module_model_vehicule')
    <li class="sidenav-item">
        <a href="javascript:" class="sidenav-link sidenav-toggle">
            <i class="sidenav-icon  ion ion-md-barcode align-middle"></i>
            <div>Models</div>
        </a>
        <ul class="sidenav-menu">
            <li>
                <!-- route n'existe pas sans le name du web.php-->
                <a href="{{route('admin/modeel')}}" class="sidenav-link ">

                    <i class="sidenav-icon ion ion-md-barcode align-middle"></i>

                    <div>Type</div>
                </a>
            </li>
            <li>
                <!-- route n'existe pas sans le name du web.php-->
                <a href="{{route('admin/modeels')}}" class="sidenav-link  ">
                    <i class="sidenav-icon feather icon-list"></i>
                    <div>Liste</div>
                </a>
            </li>

        </ul>
    </li>
    @endcan
       
    @can('voir_module_importateur')
    <li class="sidenav-item">
        <a href="javascript:" class="sidenav-link sidenav-toggle">
            <i class="sidenav-icon ion ion-ios-people"></i>
            <div>Importateurs</div>
        </a>
        <ul class="sidenav-menu">
            <li>
                <!-- route n'existe pas sans le name du web.php-->
                <a href="{{route('admin/importer')}}"class="sidenav-link ">
                        <i class="sidenav-icon ion ion-ios-people"></i>

                    <div>Importateur</div>
                </a>
            </li>
            <li>
                <!-- route n'existe pas sans le name du web.php-->
                <a href="{{route('admin/importers')}}" class="sidenav-link  ">
                    {{-- <i class="sidenav-icon feather icon-cloud-lightning"></i> --}}
                    <i class="sidenav-icon feather icon-list"></i>
                    <div>Liste</div>
                </a>
            </li>
        </ul>
    </li>
    @endcan
        
    @can('voir_module_tracking')
    <li class="sidenav-item ">
        <a href="#" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-analytics"></i>
            <div>Tracking</div>
        </a>
    </li>
    @endcan  
    </ul>
</div>
<!-- [ Layout sidenav ] End -->