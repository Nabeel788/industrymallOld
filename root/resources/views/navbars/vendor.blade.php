<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="{{ asset('/home') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt" aria-hidden="true"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Products
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ asset('/products/create') }}" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>Add Product</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/products') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Products</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/product-contacts') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Customer Queries</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/vendor-banners') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Profile Banner</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/vendor-album') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Album</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="javascript:void(0)" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Purchases
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ asset('/purchase/create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Purchase</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/purchase') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Purchase</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ asset('/vendor-orders') }}" class="nav-link">
                <i class="fas fa-bell nav-icon"></i>
                <p>
                    Orders
                </p>
            </a>
        </li>
    </ul>
</nav>
