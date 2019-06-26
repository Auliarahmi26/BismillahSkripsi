<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Wajib Pajak</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('wajibpajak.create') }}"><i class="fa fa-circle-o"></i> Tambah</a></li>
            <li><a href="{{ route('wajibpajak.index') }}"><i class="fa fa-circle-o"></i> Data Wajib Pajak</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Pendaftaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('pendaftaran.create') }}"><i class="fa fa-circle-o"></i> Tambah </a> 
            </li>
            <li><a href="{{ route('pendaftaran.index') }}"><i class="fa fa-circle-o"></i> Data Pendaftaran</a></li>

           
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Laporan Pendaftaran</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Laporan Pembayaran</a></li>
          </ul>
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Pembayaran</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Data Denda</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        
        
     
    </section>
    <!-- /.sidebar -->
  </aside>