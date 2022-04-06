<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{url('backend/dist/img/itcs-logo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ITCS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>


                <li class="nav-header">IT ASSET</li>
                
                <li class="nav-item has-treeview {{request()->is('komputer','komputer/add', 'laptop', 'laptop/add', 'printer', 'user_kom', 'user_laptop') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{request()->is('komputer', 'komputer/add', 'laptop', 'laptop/add', 'printer', 'user_kom' , 'user_laptop') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-laptop"></i>
                        <p>
                            IT Asset
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item has-treeview {{request()->is('komputer', 'komputer/add', 'laptop', 'laptop/add', 'printer') ? 'menu-open': ''}}">
                            <a href="#" class="nav-link {{request()->is('komputer', 'komputer/add', 'laptop', 'laptop/add', 'printer') ? 'active' : ''}}">
                                <i class="far fa-circle text-info nav-icon {{request()->is('komputer', 'komputer/add', 'laptop', 'laptop/add', 'printer') ? 'far fa-dot-circle' : ''}}"></i>
                                <p>
                                    Database
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ">
                                <li class="nav-item">
                                    <a href="/komputer" class="nav-link {{request()->is('komputer', 'komputer/add') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon {{request()->is('komputer', 'komputer/add') ? 'far fa-dot-circle' : ''}}"></i>
                                        <p>Computer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="laptop" class="nav-link {{request()->is('laptop', 'laptop/add') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon {{request()->is('laptop', 'laptop/add') ? 'far fa-dot-circle' : ''}}"></i>
                                        <p>Laptop</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/printer" class="nav-link {{request()->is('printer') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon {{request()->is('printer') ? 'far fa-dot-circle' : ''}}"></i>
                                        <p>Printer</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview {{request()->is('user_kom', 'user_laptop') ? 'menu-open': ''}}">
                            <a href="#" class="nav-link {{request()->is('user_kom', 'user_laptop') ? 'active': ''}}">
                                <i class="far fa-circle text-info nav-icon {{request()->is('user_kom', 'user_laptop') ? 'far fa-dot-circle' : ''}}"></i>
                                <p>
                                    Ussed Asset
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="user_kom" class="nav-link {{request()->is('user_kom') ? 'active': ''}}">
                                        <i class="far fa-circle nav-icon {{request()->is('user_kom') ? 'far fa-dot-circle' : ''}}"></i>
                                        <p>Computer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="user_laptop" class="nav-link {{request()->is('user_laptop') ? 'active': ''}}">
                                        <i class="far fa-circle nav-icon {{request()->is('user_laptop') ? 'far fa-dot-circle': ''}}"></i>
                                        <p>Laptop</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Printer</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item has-treeview {{request()->is('ekom', 'elapt') ? 'menu-open': ''}}">
                    <a href="#" class="nav-link {{request()->is('ekom', 'elapt') ? 'active': ''}}">
                        <i class="nav-icon fas fa-folder "></i>
                        <p>
                            E-Riwayat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="/ekom" class="nav-link {{request()->is('ekom') ? 'active': ''}}">
                                <i class="far fa-circle nav-icon {{request()->is('ekom') ? 'far fa-dot-circle': ''}}"></i>
                                <p>
                                    Computer
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/elapt" class="nav-link {{request()->is('elapt') ? 'active': ''}}">
                                <i class="far fa-circle nav-icon {{request()->is('elapt') ? 'far fa-dot-circle': ''}}"></i>
                                <p>
                                    Laptop
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Printer
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{request()->is('product', 'supplier', 'stok', 'stok/transaksi_riwayat') ? 'menu-open': ''}}">
                    <a href="#" class="nav-link {{request()->is('product', 'supplier','stok', 'stok/transaksi_riwayat') ? 'active': ''}}">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Consumable Control
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="/product" class="nav-link {{request()->is('product') ? 'active': ''}}">
                                <i class="far fa-circle nav-icon {{request()->is('product') ? 'far fa-dot-circle': ''}}"></i>
                                <p>
                                    Product
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a href="/supplier" class="nav-link {{request()->is('supplier') ? 'active': ''}}">
                                <i class="far fa-circle nav-icon {{request()->is('supplier') ? 'far fa-dot-circle': ''}}"></i>
                                <p>
                                    Supplier
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link ">
                                <i class="far fa-circle nav-icon "></i>
                                <p>
                                    Category
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/stok" class="nav-link {{request()->is('stok') ? 'active': ''}}">
                                <i class="far fa-circle nav-icon {{request()->is('stok') ? 'far fa-dot-circle': ''}}"></i>
                                <p>
                                    Transaction
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/stok/transaksi_riwayat" class="nav-link {{request()->is('stok/transaksi_riwayat') ? 'active': ''}}">
                                <i class="far fa-circle nav-icon {{request()->is('stok/transaksi_riwayat') ? 'far fa-dot-circle': ''}}"></i>
                                <p>
                                    Transaction History
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Clam Item
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Licence Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Product
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Supplier
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Category
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Transaction
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Transaction History
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Clam Item
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
               
                
                <li class="nav-header">SETTING</li>
                <li class="nav-item has-treeview {{request()->is('employee') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{request()->is('employee') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Employee
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview ">
                            <a href="/employee" class="nav-link {{request()->is('employee') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    User
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/userlog" class="nav-link {{request()->is('userlog') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Admin
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
