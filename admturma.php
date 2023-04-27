
<?php
include ("php/verificaradm.php");
?>


<!DOCTYPE php>
<php lang="pt_BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>administração</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="turma.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Administração</div>
            </a>
          
            
             <!-- Nav Item - home -->
             <li class="nav-item active">
                <a class="nav-link" href="admturma.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Turma</span></a>
            </li>

             <li class="nav-item ">
                <a class="nav-link" href="admaluno.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Aluno</span></a>
            </li>

           

            <li class="nav-item ">
                <a class="nav-link" href="admuser.php">
                    <i class="fas fa-fw fa-users-cog"></i>
                    <span>Usuário</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-pie"></i>
                    <span>Gráficos</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <a href="novaturma.php" class="btn btn-info btn-icon-split fa-pull-up" >
                        <span class="icon text-white-50" >
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Adicionar Turma</span>
                    </a>

                    <!-- Topbar Navbar -->
                    

                </nav>
                <!-- End of Topbar -->

              <!-- Begin Page Content -->
              <div class="container-fluid">

                   
               
                <!-- Content Row -->
                <div class="row">

                    <!-- Turmas -->
                   

                    
                        <div class="col-xl-3 col-md-6 mb-4 " >
                            <div class="card border-left-primary shadow h-100 py-2" >
                               <a href="admaluno.php" style="text-decoration:none">
                                    <div class="card-body">
                                      
                                        <div class="row no-gutters align-items-center">
                                            
                                            <div class="col mr-2">
                                                
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                     Informática</div>
                                                     
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">3 A</div>
                                                <a href="#" class="btn btn-danger btn-icon-split fa-pull-right">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                               </a >
                            </div>
                        </div>
                    
                   
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <a href="admaluno.php" style="text-decoration:none">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Enfermagem</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">3 B</div>
                                            <a href="#" class="btn btn-danger btn-icon-split fa-pull-right">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <a href="admaluno.php" style="text-decoration:none">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Administração</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">3 C</div>
                                            <a href="#" class="btn btn-danger btn-icon-split fa-pull-right">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <a href="admaluno.php" style="text-decoration:none">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Informática</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">2 A</div>
                                            <a href="#" class="btn btn-danger btn-icon-split fa-pull-right">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <a href="admaluno.php" style="text-decoration:none">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Enfermagem</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">2 B</div>
                                            <a href="#" class="btn btn-danger btn-icon-split fa-pull-right">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <a href="admaluno.php" style="text-decoration:none">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Administração</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">2 C</div>
                                            <a href="#" class="btn btn-danger btn-icon-split fa-pull-right">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <a href="admaluno.php" style="text-decoration:none">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Informática</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1 A</div>
                                            <a href="#" class="btn btn-danger btn-icon-split fa-pull-right">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <a href="admaluno.php" style="text-decoration:none">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Enfermagem</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1 B</div>
                                            <a href="#" class="btn btn-danger btn-icon-split fa-pull-right">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <a href="admaluno.php" style="text-decoration:none">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Administração</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1 C</div>
                                            <a href="#" class="btn btn-danger btn-icon-split fa-pull-right">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
            
                   
                </div>

              

            </div>
          

        </div>
       
        
     