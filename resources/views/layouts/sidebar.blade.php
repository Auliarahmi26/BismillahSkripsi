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
            <i class="fa fa-files-o"></i>
            <span>Jenis Reklame</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('jenisreklame.create') }}"><i class="fa fa-circle-o"></i> Tambah</a></li>
            <li><a href="{{ route('jenisreklame.index') }}"><i class="fa fa-circle-o"></i> Data Jenis Reklame</a></li>
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
            <span>Perhitungan Khusus</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('perhitungankhusus.create') }}"><i class="fa fa-circle-o"></i> Tambah</a></li>
            <li><a href="{{ route('perhitungankhusus.index') }}"><i class="fa fa-circle-o"></i> Data Perhitungan Khusus</a></li>
          </ul>
        </li>
        
        
        
        
     
    </section>
    <!-- /.sidebar -->
  </aside>