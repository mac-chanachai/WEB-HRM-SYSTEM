  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo route('main.get')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>HR</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HR</b>-MANAGEMENT</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">คุณมี 1 การแจ้งเตือน</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li class="view-amendment">
                    <a href="<?php echo route('data_management.notification_request.get')?>">
                      <i class="fa fa-users text-aqua"></i> รายการคำร้องขอเปลี่ยนแปลงข้อมูลส่วนตัว
                    </a>
                  </li>
                  <li class="view-time-stamp-request">
                    <a href="<?php echo route('time_stamp.time_stamp_request.get')?>">
                      <i class="fa fa-clock-o text-aqua"></i> รายการคำร้องขอลงเวลาย้อนหลัง
                    </a>
                  </li>
                  <li class="view-request-leave">
                    <a href="<?php echo route('leave.leave_request.get');?>">
                      <i class="fa fa-calendar-o text-aqua"></i> รายการคำร้องขอลา
                    </a>
                  </li>
                  <li class="view-request-create-evaluation">
                    <a href="<?php echo route('evaluation.create_evaluations_request.get')?>">
                      <i class="fa fa-clipboard text-aqua"></i>รายการขออนุมัติสร้างแบบประเมิน
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a>
              <?php if(\Session::has('current_employee')){
                $current_employee = \Session::get('current_employee');
                if(!empty($current_employee->image)){?> <!-- ถ้ามีรูป  -->
                  <img src="/public/image/<?php echo $current_employee->image ?>" class="user-image img-circle" alt="User Image" style="width: 30px; height: 30px;">
                <?php }else{?> <!-- ถ้าไม่มีรุป -->
                  <img src="/resources/assets/theme/adminlte/dist/img/user2-160x160.jpg" class="user-image img-circle" alt="User Image">
                <?php } ?>
              <?php } ?>
                <?php if(\Session::has('current_employee')) :
                    $current_employee = \Session::get('current_employee');
                ?>
                <span class="hidden-xs"><?php echo $current_employee['first_name']; ?> <?php echo $current_employee['last_name']; ?></span>
            </a>
                <?php endif ?>

                <?php if(\Session::has('current_admin')):
                    $current_admin = \Session::get('current_admin');
                ?>
                <span class="hidden-xs"><?php echo $current_admin['user_admin']; ?></span>
            </a>
                <?php endif ?>

            <!-- <ul class="dropdown-menu"> -->
              <!-- User image -->
               <!--  <li class="user-header">
                  <img src="/resources/assets/theme/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  <p>
                    <?php /*echo $current_employee['first_name'];*/ ?>
                    <?php /*echo $current_employee['last_name'];*/
                  // endif
                  ?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li> -->
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <!-- <li class="user-footer"> -->
               <!--  <div class="pull-left">
                  <a href="<?php /*echo route('personal_info.personal_info.get')*/ ?>" class="btn btn-default">ข้อมูลส่วนตัว</a>
                </div> -->
                <!-- <div class="pull-right">
                  <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-default">ออกจากระบบ</a>
                </div> -->
                <!-- </li> -->
                <!-- </ul> -->
              </li>
              <div class="pull-right">
                <a href="#" class=""><span class="glyphicon glyphicon-log-out glyphicon-log-out-logout" style="font-size: 30px;
                margin-top: 6px; color: white; margin-right: 10px;"></span></a>
              </div>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>

        </nav>
      </header>
      <!-- data -->
<div id="logout-form" data-url="<?php echo route('logout.index.post') ?>"></div>
<?php echo csrf_field() ?>