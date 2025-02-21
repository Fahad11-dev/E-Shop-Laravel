<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#"
            target="_blank">

            <span class="ms-1 font-weight-bold text-white">Admin Panel</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav h-auto">
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard') ? 'active':''   }} " href="{{ url('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            {{-- Category --}}
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('categories') ? 'active':''  }}"  href="{{ url('categories') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('add-categories') ? 'active':''  }}   " href="{{ url('add-categories') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Add Category</span>
                </a>
            </li>

            {{-- Products --}}
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('products') ? 'active':''  }}"  href="{{ url('products') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">inventory</i>
                    </div>
                    <span class="nav-link-text ms-1">Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('add-products') ? 'active':''  }}   " href="{{ url('add-products') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">inventory</i>
                    </div>
                    <span class="nav-link-text ms-1">Add Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('add-products') ? 'active':''  }}   " href="{{ url('add-products') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">shopping_basket</i>
                    </div>
                    <span class="nav-link-text ms-1">View Orders</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons-round opacity-10">view_in_ar</i>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('Logout') }}</span>

                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </li>
        </ul>
    </div>
</aside>
