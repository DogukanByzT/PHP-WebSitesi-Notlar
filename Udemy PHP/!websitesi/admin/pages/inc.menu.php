<?php 
session_start();
if(!isset($_SESSION)){ 
    session_start();
}
if (@$_SESSION['giriskontrol'] != 1) {
    header("location: index.php?i=hack");
}
 ?>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="anasayfa.php">Hoşgeldin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              
                   
                    
                <!-- /.dropdown -->


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="cikis.php"><i class="fa fa-sign-out fa-fw"></i> Çıkış</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="anasayfa.php"><i class="fa fa-dashboard fa-fw"></i> Anasayfa</a>
                        </li>
                       
                        <li>
                            <a href="blog.php"><i class="fa fa-table fa-fw"></i> Bloglar</a>
                            <a href="hakkımızda.php"><i class="fa fa-table fa-fw"></i> Hakkımızda</a>
                        </li>
                        
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>