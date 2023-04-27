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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Administração</div>
            </a>
          
            
             <!-- Nav Item - home -->
             <li class="nav-item">
                <a class="nav-link" href="admturma.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Turma</span></a>
            </li>

             <li class="nav-item ">
                <a class="nav-link" href="admaluno.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Aluno</span></a>
            </li>

           

            <li class="nav-item active">
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

                    <!-- Sidebar Toggle (Topbar) -->
                   

                 

                    <!-- Topbar Navbar -->
                  
                    

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   

                    <!-- Content Row -->
                    <div class="row">

                       

                        <div class="container-fluid">

                            <!-- Page Heading -->
                            
                            <a href="novouser.php" class="btn btn-info btn-icon-split fa-pull-up" >
                                <span class="icon text-white-50" >
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Adicionar Usuário</span>
                            </a>
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4" style="margin-top:30px;">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Alunos</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered"  width="100%" cellspacing="0">
                                            <thead>
                                                
                                                <tr>
                                                   
                                                    <th>Nome</th>
                                                    <th>Senha</th>
                                                    <th>Cargo</th>
                                                    
                                                    <th>Excluir</th>
        
                                                </tr>
                                                <td>edilson</td>
                                                <td>2345323</td>
                                                <td>Coordenador</td>
                                                
                                                <td style="text-align: center;">
                                                    <a href="#" class="btn btn-danger btn-icon-split ">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                    </a>
                                                </td>
                                            </thead>
                                            
                                     
                                            <tbody>
                                            </tbody>
        
                                        </table>
                                       
                                    </div>
                                </div>
                            </div>
        
                        </div>
                        <!-- /.container-fluid -->
        
                    </div>
                    <!-- End of Main Content -->
                            
                        
                       
                        
                        

                        

                        

                        

                        

                        

                        

                        
                       
                    </div>

                   
                    

                        
                        

                       

                        

                        
                    

                </div>
              

            </div>
           
            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</php>