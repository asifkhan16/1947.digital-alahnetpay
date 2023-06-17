<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <div class="search-bar flex-grow-1">
                
            </div>
            
            <div class="user-box dropdown px-3">
                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('dashtreme/assets/images/avatars/avatar-2.png') }}" class="user-img" alt="user avatar">
                    <div class="user-info">
                        <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                        <p class="designattion mb-0">{{ Auth::user()->roles()->first()->name }}</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item d-flex align-items-center" href="{{ route('dashboard.index') }}"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
                    </li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a :href="route('logout')" class="dropdown-item d-flex align-items-center" onclick="event.preventDefault(); this.closest('form').submit();" style="cursor: pointer">
                                <i class="bx bx-log-out-circle"></i>
                                <span>Logout</span>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>