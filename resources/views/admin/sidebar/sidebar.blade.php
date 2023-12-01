<div style=" z-index: 2;" id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark ">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo ">
        <span class=" demo ">
            <img width="30" src="{{ asset('assets/images/log1.jpg') }}" alt="Brand Logo" class="img-fluid">
            {{-- {{ asset('assets/images/log1.jpg') }} --}}
        </span>
        <a href="#" class="app-brand-text demo sidenav-text font-weight-normal ml-2">AUTO CONNECT AFRICA</a>
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
            <a href="#" class="sidenav-link">
                <i class="sidenav-icon feather icon-home"></i>
                <div>Dashboards</div>
                @if (Auth::check() == 'Admin')
                <div class="pl-1 ml-auto">
                    <div class="badge badge-success">{{ Auth::user()->role_name }}</div>
                </div>
                @endif
                @if (Auth::check() == 'Normal User')
                <div class="pl-1 ml-auto">
                    <div class="badge badge-danger">{{ Auth::user()->role_name }}</div>
                </div>
                @endif
                @if (Auth::check() == null)
                <div class="pl-1 ml-auto">
                    <div class="badge badge-warning"> {{ '[N/A]' }}</div>
                </div>
                @endif
            </a>
        </li>

        <!-- Layouts -->
        {{-- <li class="sidenav-divider mb-1"></li> --}}
        {{-- <li class="sidenav-header small font-weight-semibold">SUIVI</li> --}}



        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-menu"></i>
                <div>PARAMETRE</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="javascript:" class="sidenav-link sidenav-toggle">
                        {{-- <i class="sidenav-icon feather icon-cloud-lightning"></i> --}}
                        <i class="sidenav-icon feather icon-folder"></i>
                        <div> Utilisateur</div>
                    </a>

                    <ul class="sidenav-menu">
                        <li class="sidenav-item">
                            <!-- route n'existe pas sans le name du web.php-->
                            <a href="{{route('admin/register')}}" class="sidenav-link">
                                <i class="sidenav-icon feather icon-edit"></i>
                                <div>Utilisateur</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </li>



        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                {{-- <i class="sidenav-icon feather icon-clipboard"></i> --}}
                <i class="sidenav-icon feather icon-user"></i>
                <div>Utilisateurs</div>
            </a>
            <ul class="sidenav-menu">
                <li>
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="{{route('admin/register')}}" class="sidenav-link  ">
                        {{-- <i class="sidenav-icon feather icon-cloud-lightning"></i> --}}
                        <i class="sidenav-icon feather icon-user"></i>
                        <div>Utilisateurs</div>
                    </a>
                </li>

            </ul>
        </li>



        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-file-text"></i>
                <div>Démarcheur</div>
            </a>
            <ul class="sidenav-menu">
                <li>
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="#" class="sidenav-link ">
                        {{-- <i class="sidenav-icon feather icon-cloud-lightning"></i> --}}
                        <i class="sidenav-icon feather icon-file-text"></i>

                        <div>Démarcheur</div>
                    </a>
                </li>

                <li>
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="#" class="sidenav-link  ">
                        {{-- <i class="sidenav-icon feather icon-cloud-lightning"></i> --}}
                        <i class="sidenav-icon feather icon-list"></i>

                        <div>Liste</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-file-text"></i>
                <div>Client</div>
            </a>
            <ul class="sidenav-menu">
                <li>
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="#" class="sidenav-link ">
                        {{-- <i class="sidenav-icon feather icon-cloud-lightning"></i> --}}
                        <i class="sidenav-icon feather icon-file-text"></i>

                        <div>Client</div>
                    </a>
                </li>

                <li>
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="#" class="sidenav-link  ">
                        {{-- <i class="sidenav-icon feather icon-cloud-lightning"></i> --}}
                        <i class="sidenav-icon feather icon-list"></i>

                        <div>Liste</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-file-text"></i>
                <div>Importateur</div>
            </a>
            <ul class="sidenav-menu">
                <li>
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="#" class="sidenav-link ">
                        {{-- <i class="sidenav-icon feather icon-cloud-lightning"></i> --}}
                        <i class="sidenav-icon feather icon-file-text"></i>

                        <div>Importateur</div>
                    </a>
                </li>

                <li>
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="#" class="sidenav-link  ">
                        {{-- <i class="sidenav-icon feather icon-cloud-lightning"></i> --}}
                        <i class="sidenav-icon feather icon-list"></i>

                        <div>Liste</div>
                    </a>
                </li>

            </ul>
        </li>
        
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-file-text"></i>
                <div>Tracking</div>
            </a>
            <ul class="sidenav-menu">
                <li>
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="#" class="sidenav-link ">
                        {{-- <i class="sidenav-icon feather icon-cloud-lightning"></i> --}}
                        <i class="sidenav-icon feather icon-file-text"></i>

                        <div>Tracking</div>
                    </a>
                </li>

                <li>
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="#" class="sidenav-link  ">
                        {{-- <i class="sidenav-icon feather icon-cloud-lightning"></i> --}}
                        <i class="sidenav-icon feather icon-list"></i>

                        <div>Liste</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-bar-chart"></i>
                <div>Sondage / enquête</div>
            </a>
            <ul class="sidenav-menu">
                <li>
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="{{url('admin/survey')}}" class="sidenav-link  ">
                        <i class="sidenav-icon feather icon-bar-chart"></i>

                        {{-- <i class="sidenav-icon feather icon-cloud-lightning"></i> --}}
                        <div>Sondage/enquête</div>
                    </a>
                </li>


            </ul>

        </li>

        {{--<li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-clipboard"></i>
                <div>Préférence User</div>
            </a>
            <ul class="sidenav-menu">
                <li>
                    <!-- route n'existe pas sans le name du web.php-->
                    <a href="#" class="sidenav-link  ">
                        {{-- <i class="sidenav-icon feather icon-cloud-lightning"></i> 
                        <div>Préférence</div>
                    </a>
                </li>

               
            </ul>

        </li>  --}}


        {{--
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-user-check"></i>
                <div>Module ABONNEE</div>
            </a>
            <ul class="sidenav-menu">
                <li>
                  
                    <a href="#" class="sidenav-link  ">
                <i class="sidenav-icon feather icon-user-check"></i>

                        <div>Abonnés</div>
                    </a>
                </li>

                <li>

                    <a href="#" class="sidenav-link  ">
                <i class="sidenav-icon feather icon-list"></i>

                        <div>Liste</div>
                    </a>
                </li>
            </ul>
        </li> --}}




    </ul>
</div>
<!-- [ Layout sidenav ] End -->