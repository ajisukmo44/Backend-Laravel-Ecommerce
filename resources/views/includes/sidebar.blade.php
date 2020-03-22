 <!-- Left Panel -->
 <aside id="left-panel" class="left-panel">
     <nav class="navbar navbar-expand-sm navbar-default">
         <div id="main-menu" class="main-menu collapse navbar-collapse">
             <ul class="nav navbar-nav">
                 <li class="active">
                     <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                 </li>
                 <li class="menu-title">Data Master</li><!-- /.menu-title -->
                 <li class="">
                 <a href="{{ route('products.index') }}"> <i class="menu-icon fa fa-list"></i>Data Produk</a>
                 </li>
                 <li class="">
                    <a href="{{ route('product-galleries.index') }}"> <i class="menu-icon fa fa-list"></i>Data Foto Produk</a>
                </li>
                <li class="">
                    <a href="{{ route('slider.index') }}"> <i class="menu-icon fa fa-list"></i>Data Slider</a>
                    </li>
                    <li class="">
                        <a href="{{ route('logopatner.index') }}"> <i class="menu-icon fa fa-list"></i>Data Patner</a>
                        </li>
        

                 <li class="menu-title"> Data Transaksi</li><!-- /.menu-title -->
                 <li class="">
                     <a href="{{ route('transactions.index') }}"> <i class="menu-icon fa fa-list"></i>Data Transaksi</a>
                 </li>
             </ul>
         </div><!-- /.navbar-collapse -->
     </nav>
 </aside>