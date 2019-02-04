  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
    
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU DE ADMINISTRACION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Eventos</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-evento.php"><i class="fa fa-list-ul"></i> Ver Todos</a></li>
            <li><a href="crear-evento.php"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
          <i class="fa fa-book" aria-hidden="true"></i>
            <span>Categorias de Eventos</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul"></i> Ver Todos</a></li>
            <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
          <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span>Invitados</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul"></i> Ver Todos</a></li>
            <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
          <i class="fa fa-address-card" aria-hidden="true"></i>
            <span>Registrados</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul"></i> Ver Todos</a></li>
            <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
        <?php
          if($_SESSION['nivel'] === 2):
        ?>
        <li class="treeview">
          <a href="#">
          <i class="fa fa-user" aria-hidden="true"></i>
            <span>Administradores</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-admin.php"><i class="fa fa-list-ul"></i> Ver Todos</a></li>
            <li><a href="crear-admin.php"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
        <?php
          endif;
        ?>
        <li class="treeview">
          <a href="#">
          <i class="fa fa-comments-o" aria-hidden="true"></i>
            <span>Testimoniales</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul"></i> Ver Todos</a></li>
            <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
        <!--

        <li class="header">USUARIOS ACTIVOS</li>
       <?php  /*
        if($_SESSION['estadoConexion']):
          $administradores = mostrarAdmin();
          if($administradores):
            foreach($administradores as $admin):
              if($admin['estado_conexion'] == 1):
        ?>
        <div class="user-panel">
          <div class="pull-left image">
            <img src="img/<?php echo $admin['url_img'] ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $admin['email'] ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <?php
              endif;
            endforeach;
          endif;
        endif;
        */
        ?>
        -->
      </ul>
     
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->