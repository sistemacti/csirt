<aside class="app-sidebar shadow" style="background-color:#3655bf; color:white !important;" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="../index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img style="width: 250px;" src="{{ asset('assets/img/logo_dark.svg') }}" alt="Logo CSIRT" class="brand-image opacity-75 shadow" />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light"></span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                aria-label="Main navigation" data-accordion="false" id="navigation">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link @if(Route::currentRouteName() === 'dashboard') active @endif" style="color: #fff !important;" style="color:#fff !important;">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="{{ route('incidents.index') }}" class="nav-link @if(Route::currentRouteName() === 'incidents.index') active @endif" style="color: #fff !important;">
                        <i class="nav-icon bi bi-exclamation-triangle-fill"></i>
                        <span class="nav-badge badge text-bg-light me-3">1</span>
                        <p>Incidentes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" style="color: #fff !important;">
                        <i class="nav-icon bi bi-newspaper"></i>
                        <p>Boletines</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" style="color: #fff !important;">
                        <i class="nav-icon bi bi-folder-fill"></i>
                        <p>Recursos</p>
                    </a>
                </li>
                <li class="nav-header">ADMINISTRACIÓN</li>
                <hr>
                <li class="nav-item">
                    <a href="{{ route('modules.index',2) }}" class="nav-link @if(Route::currentRouteName() === 'modules.index' && (isset($type) && $type==2)) active @endif" style="color: #fff !important;">
                        <i class="nav-icon bi bi-file-earmark-fill"></i>
                        <p>Páginas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('modules.index',1) }}" class="nav-link @if(Route::currentRouteName() === 'modules.index' && (isset($type) && $type==1)) active @endif" style="color: #fff !important;">
                        <i class="nav-icon bi bi-filter-square"></i>
                        <p>Secciones</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: #fff !important;">
                        <i class="nav-icon bi bi-menu-app"></i>
                        <p>
                            Plantilla
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../index.html" class="nav-link" style="color: #fff !important;">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Navbar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../index2.html" class="nav-link" style="color: #fff !important;">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Footer</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="../index.html" class="nav-link" style="color: #fff !important;">
                        <i class="nav-icon bi bi-building"></i>
                        <p>Institución</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../index.html" class="nav-link" style="color: #fff !important;">
                        <i class="nav-icon bi bi-gear-fill"></i>
                        <p>Sistema</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../index.html" class="nav-link" style="color: #fff !important;">
                        <i class="nav-icon bi bi-people-fill"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon bi bi-clipboard-fill"></i>
                        <p style="font-size:0.9em;">
                            Tablas Complementarias
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../layout/unfixed-sidebar.html" class="nav-link" style="color: #fff !important;">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Tipos de institución</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../layout/fixed-sidebar.html" class="nav-link active">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Infraestructura afectada</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../layout/fixed-header.html" class="nav-link" style="color: #fff !important;">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Servicios afectados</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../layout/fixed-footer.html" class="nav-link" style="color: #fff !important;">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Tipos de recursos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../layout/fixed-complete.html" class="nav-link" style="color: #fff !important;">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Tipos de normativa</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
