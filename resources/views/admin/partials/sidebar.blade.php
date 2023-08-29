
<nav id="sidebar" class="custom-color-sidebar d-flex flex-column align-items-center">
   <ul class="navbar-nav">
        <li class="nav-item">
            <strong>
                <a class="nav-link text-black {{ Route::currentRouteName() == 'admin.projects.index' ? 'bg-secondary' : ''}}" href="{{ route('admin.projects.index')}}">
                    Progetti
                </a>
            </strong>
        </li>
        <li class="nav-item">
            <strong>
                <a class="nav-link text-black {{ Route::currentRouteName() == 'admin.types.index' ? 'bg-secondary' : ''}}" href="{{ route('admin.types.index')}}">
                    Tipologie di progetto
                </a>
            </strong>
        </li>

        <li class="nav-item">
            <strong>
                <a class="nav-link text-black {{ Route::currentRouteName() == 'admin.technologies.index' ? 'bg-secondary' : ''}}" href="{{ route('admin.technologies.index')}}">
                    Tecnologie
                </a>
            </strong>
        </li>
    </ul>
</nav>