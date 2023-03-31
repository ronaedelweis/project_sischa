<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="dashboard">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Info Barang</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/info">Stok Barang</a></li>
                    {{-- <li class="nav-item"> <a class="nav-link" href="{{ route('barangmasuk') }}">Barang Masuk</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Barang Keluar</a></li> --}}
                </ul>
            </div>
        </li>
        
        @if (auth()->user()->level == "admin")   
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Data Barang</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="/input">Input Barang</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kelola">Kelola Barang</a></li>
                </ul>
            </div>
            
            
        </li>
        @endif
        
    </ul>
</nav>