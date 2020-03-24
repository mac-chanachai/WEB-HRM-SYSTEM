  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">

        <div class="pull-left image">
          <?php if(\Session::has('current_employee')){
            $current_employee = \Session::get('current_employee');
            if(!empty($current_employee->image)){?> <!-- ถ้ามีรูป  -->
              <img src="/public/image/<?php echo $current_employee->image ?>" class="user-image img-circle" alt="User Image" style="width: 50px; height: 50px;">
            <?php }else{?> <!-- ถ้าไม่มีรุป -->
              <img src="/resources/assets/theme/adminlte/dist/img/user2-160x160.jpg" class="user-image img-circle" alt="User Image">
            <?php } ?>
          <?php } ?>
        </div>

        <div class="pull-left info">
          <?php if(\Session::has('current_employee')) :
            $current_employee = \Session::get('current_employee');
          ?>
            <p><?php echo $current_employee['first_name']; ?> <?php echo $current_employee['last_name']; ?></p>
          <?php endif ?>

          <?php if(\Session::has('current_admin')):
              $current_admin = \Session::get('current_admin');
          ?>
            <p><?php echo $current_admin['user_admin']; ?></p>
          <?php endif ?>
          <a href="#"><i class="fa fa-circle text-success"></i> ออนไลน์</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
        </li>
        <?php if(\Session::has('current_menu')) :  ?>
          <?php foreach(\Session::get('current_menu') as $menu ):?>
            <li>
              <a href="<?php echo route ($menu->route) ?>">
                 <i class="<?php echo $menu->fa_icon ?> fa-lg"></i><span> <?php echo $menu->name_th ?></span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-green"></small>
                </span>
              </a>
            </li>
          <?php endforeach ?>
        <?php endif ?>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-cubes fa-lg"></i>
            <span>Admin Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left fa-lg pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo route('admin.add_header_emp.get')?>"><i class="fa fa-user-plus"></i> Manage Employee</a></li>
            <li><a href="<?php echo route('admin.add_department.get')?>"><i class="fa fa-list-ul"></i> Manage Department</a></li>
            <li><a href="<?php echo route('admin.log.get')?>"><i class="fa fa-sticky-note-o"></i> Manage Log</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>