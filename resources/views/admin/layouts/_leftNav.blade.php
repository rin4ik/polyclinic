
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="http://placehold.it/50x50" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{\Auth::user()->name}}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
      
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Saytni boshqarish</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
              </a>
            </li>
            <li><a href="/admin/posts"><i class="fa fa-sticky-note-o"></i> <span>Yangiliklar</span></a></li>
            <li><a href="/admin/categories"><i class="fa fa-list-ul"></i> <span>Kategoriyalar</span></a></li>
             
            <li><a href="/admin/users"><i class="fa fa-users"></i> <span>Foydalanuvchilar</span></a></li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>