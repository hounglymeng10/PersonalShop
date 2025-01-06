<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(135deg, #5b6f27, #4a7d1d);">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon">
            <i class="fa-solid fa-user-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-4">{{ Auth::user()->name }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active ps-4">
        <a class="nav-link text-white" href="{{ route('admin.dashboard') }}">
            <div class="d-flex align-items-center">
                <i class="fa-solid fa-user" style="font-size: 1rem;"></i>
                <span>Dashboard</span>
            </div>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading ms-4">
        Performance
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item ps-4">
        <a class="nav-link collapsed" href="{{ route('admin.users.index') }}" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fa-solid fa-user-tag"></i>
            <span>User Type</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item ps-4">
        <a class="nav-link collapsed" href="{{ route('products.index') }}" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fa-solid fa-box"></i>
            <span>Product</span>
        </a>
    </li>
    <li class="nav-item ps-4">
        <a class="nav-link collapsed" href="{{ route('categories.index') }}" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fa-solid fa-th-list"></i>
            <span>Category</span>
        </a>
    </li>

    @php
        $newOrdersCount = app('App\Http\Controllers\OrderController')->countNewOrders();
        $showOrders = session('show_orders');
    @endphp

    <li class="nav-item ps-4">
        <a class="nav-link collapsed" href="{{ route('orders.index') }}" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fa-solid fa-shopping-cart"></i>
            <span>Customer Order</span>
        </a>
    </li>
</ul>
<!-- End of Sidebar -->
