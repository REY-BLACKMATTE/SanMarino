<!-- Main Sidebar Container -->
<!-- #COLOR# -->
<!-- contenido de cajón -->
<aside class="main-sidebar elevation-4 bg-residentSystem" id="aside">
    <!-- Brand Logo -->
    <!-- #COLOR# -->
    <a href="javascript:void(0)" id="sello" class="brand-link " style="height:3.47rem;">
        <img src="{{ url('img/hebe1.png') }}" alt="SanMarino" class="brand-image img-circle elevation-3" style="opacity: 1;" id="logo-img">
        <span class="brand-text font-weight-light"><img src="{{ url('img/logo_des.png') }}" alt="TecnoMTY Logo"></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <!-- ################################################################################### -->
                <!-- ############ IMPORTANTE COLOCAR EL ID PARA CONTROL DE PESTAÑAS ACTIVAS ############ -->
                <!-- ################################################################################### -->

                <!-- Divider -->
                <hr class="sidebar-divider my-0">


                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link" data-target="home">
                        <span class="material-icons-outlined">
                            cottage
                        </span>
                        <p>My Home</p>
                    </a>
                </li>

                <!-- Divider -->
                <div class="border-top my-3"></div>

                <!-- Heading -->
                <!--<div class="sidebar-heading">
            Interfaces
            </div>-->
                <li class="nav-item">
                    <a href="{{ route('usuarios') }}" class="nav-link" data-target="usuarios">
                        <i class="material-icons-outlined">
                            people_alt
                        </i>
                        <p>Usuarios</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pagos') }}" class="nav-link" data-target="payments">
                        <span class="material-icons-outlined">
                            paid
                        </span>
                        <p>Pagos</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pagos') }}" class="nav-link">
                        <span class="material-icons-outlined">
                            holiday_village
                        </span>
                        <p>Propiedades</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pagos') }}" class="nav-link">
                        <span class="material-icons-outlined">
                            groups
                        </span>
                        <p>Provedores</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pagos') }}" class="nav-link">
                        <span class="material-icons-outlined">
                            admin_panel_settings
                        </span>
                        <p>Vigilantes</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pagos') }}" class="nav-link">
                        <span class="material-icons-outlined">
                            forum
                        </span>
                        <p>Foro</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pagos') }}" class="nav-link">
                        <span class="material-icons-outlined">
                            gavel
                        </span>
                        <p>Reglamento</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pagos') }}" class="nav-link">
                        <span class="material-icons-outlined">
                            how_to_vote
                        </span>
                        <p>Decisiones</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pagos') }}" class="nav-link">
                        <span class="material-icons-outlined">
                            campaign
                        </span>
                        <p>Difusión</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pagos') }}" class="nav-link">
                        <span class="material-icons-outlined">
                            event
                        </span>
                        <p>Eventos</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('pagos') }}" class="nav-link">
                        <span class="material-icons-outlined">
                            contacts
                        </span>
                        <p>Directorio</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pagos') }}" class="nav-link">
                        <span class="material-icons-outlined">
                            contact_support
                        </span>
                        <p>Soporte</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pagos') }}" class="nav-link">
                        <span class="material-icons-outlined">
                            markunread_mailbox
                        </span>
                        <p>Buzón</p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

</aside>
