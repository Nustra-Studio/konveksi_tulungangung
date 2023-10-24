<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">
    <style>
        .side-nav .side-nav-link{
            color: rgb(236, 236, 236);
        }
    </style>

    <!-- Brand Logo Light -->
    <a href="{{ route("any", "index") }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="/images/logo.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="/images/logo-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="{{ route("any", "index") }}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="/images/logo.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="/images/logo-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">
            @php
                $role = auth()->user()->role;
            @endphp
        <li class="side-nav-item">
            <a href="{{ route("any", "$role/barang/create") }}" class="side-nav-link">
                <i class="  ri-shopping-cart-line"></i>
                <span> Input Barang</span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route("any", "$role/kontigen") }}" class="side-nav-link">
                <i class="  ri-shopping-bag-line"></i>
                <span> Penjualan </span>
            </a>
        </li>
            <li class="side-nav-item">
                <a href="{{ route("any", "$role/index") }}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            @if ($role === "admin")
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false"
                    aria-controls="sidebarCharts" class="side-nav-link">
                    <i class="ri-donut-chart-fill"></i>
                    <span> Master Data </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCharts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('second', ["$role", 'barang']) }}">Barang</a>
                        </li>
                        <li>
                            <a href="{{ route('second', ["$role", 'mitra']) }}">Mitra</a>
                        </li>
                        <li>
                            <a href="{{ route('second', ["$role", 'rak']) }}">Rak</a>
                        </li>
                        <li>
                            <a href="{{ route('second', ["$role", 'category']) }}">Kategori</a>
                        </li>
                        <li>
                            <a href="{{ route('second', ["$role", 'supplier']) }}">Supplier</a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif
            <li class="side-nav-item">
                <a href="{{ route("any", "$role/kontigen") }}" class="side-nav-link">
                    <i class=" ri-p2p-fill"></i>
                    <span> Distribusi Kain Mitra </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route("any", "$role/pesilat") }}" class="side-nav-link">
                    <i class="  ri-gift-line"></i>
                    <span> Pengemasan </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route("any", "$role/event") }}" class="side-nav-link">
                    <i class=" ri-box-3-line "></i>
                    <span> Rak</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route("any", "$role/produksi") }}" class="side-nav-link">
                    <i class=" ri-treasure-map-line"></i>
                    <span> Proses Produksi</span>
                </a>

            </li>
            {{-- <li class="side-nav-item">
                <a href="{{ route("any", "$role/peserta") }}" class="side-nav-link">
                    <i class=" ri-user-3-line"></i>
                    <span> Perserta </span>
                </a>
            </li> --}}
        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->
