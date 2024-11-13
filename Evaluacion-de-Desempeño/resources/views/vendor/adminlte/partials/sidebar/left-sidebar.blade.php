<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ URL::to('departamentos') }}" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>Departamentos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('puestos') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>Puestos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('empleados') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Empleados</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('categorias') }}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Categorías</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('evaluaciones') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Evaluaciones</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('evaluacciondetalles') }}" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>Detalles de Evaluación</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('metricas') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>Métricas</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
