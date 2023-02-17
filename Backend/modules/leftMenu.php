<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
            <span>Welcome,</span>
            <h2>
                <?php 
                    if(isset($_SESSION["login"])){
                        echo "Admin";
                    }
                ?>
            </h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a href="index.php?page=category"><i class="fa fa-navicon" ></i> Quản lý danh mục</a></li>
            <li><a href="index.php?page=addproduct"><i class="fa fa-plus-square" ></i> Quản lý sản phẩm</a></li>
            <li><a href="index.php?page=managerOrder"><i class="fa fa-shopping-cart" ></i>Quản lý đơn đặt hàng</a></li>
            <!-- <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="index.php?page=category">Quản lý danh mục</a></li>
                <li><a href="index.php?page=addproduct">Thêm mới sản phẩm</a></li>
                <li><a href="index.php?page=listproduct">Danh sách sản phẩm</a></li>
                <li><a href="index.php?page=managerOrder">Quản lý đặt hàng</a></li>
                <li><a href="form_upload.html">Form Upload</a></li>
                <li><a href="form_buttons.html">Form Buttons</a></li>
            </ul> -->
            </li>
            
            
        </ul>
        </div>

    </div>
    <!-- /sidebar menu -->
    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
    </div>
</div>