<?php
/*
    session_start();
    include 'db.php';

    if(isset ($_SESSION['status_login'])){
        $_SESSION['status_login'] = true;
    } else{
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    }
*/
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI Absen</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!----css3---->
    <link rel="stylesheet" href="css/custom.css">

    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

</head>
<body>

    <div class="wrapper">

    <div class="body-overlay"></div>
	 
	 <!-------sidebar--design------------>
	 
	<div id="sidebar">
        <div class="sidebar-header">
            <h3><img src="img/logo1.png" class="img-fluid"/><span>SI Absen</span></h3>
            </div>

        <ul class="list-unstyled component m-0">
        <li class="">
            <a href="index.php" class="dashboard"><i class="material-icons">dashboard</i>Dashboard </a>
        </li>
        <li class="active">
            <a href="data-siswa.php" class="dashboard"><i class="material-icons">people</i>Data Siswa </a>
        </li>
        <li class="">
            <a href="data-kelas.php" class="dashboard"><i class="material-icons">library_books</i>Data Kelas </a>
        </li>
        <li class="" style="margin-top: 420px;">
            <a href="logout.php" class="dashboard"><i class="material-icons">logout</i>Logout </a>
        </li>
        </ul>

    </div>

    <!-- BAGIAN ATAS -->

    <div id="content">
        <div class="top-navbar">
                <div class="xd-topbar">
                    <div class="row">
                        <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                            <div class="xp-menubar">
                                <span class="material-icons text-white">signal_cellular_alt</span>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="xp-breadcrumbbar text-center">
                        <h4 class="page-title">Data Siswa</h4>
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">SI Absen</a></li>
                        </ol>
                    </div> 
                </div>
        </div>
    

        <div class="main-content">
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrapper"  style="margin-bottom: 0px;">
					     
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">Kelola Data Siswa</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span> Tambah Data Siswa</span>
							   </a>
							   <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
							   <i class="material-icons">&#xE15C;</i>
							   <span>Hapus</span>
							   </a>
							 </div>
					     </div>
					   </div>
					   
					   <table class="table table-striped table-hover">
					      <thead>
						    <tr>
							<th width="60px">No</th>
                            <th>Nama Lengkap</th>
                            <th>NIM</th>
                            <th>Kelas</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Selesai</th>
                            <th width="150px">Aksi</th>
							 </tr>
						  </thead>
						  
						  <tbody>
						      <tr>
                            <th>1</th>
                            <th>Adhitya Nugraha</th>
                            <th>A11.2021.133227</th> 
							 <th>A11.441U</th>
							 <th>09.30</th>
                             <th>12.00</th>
							 <th>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
							 
							 
							 <tr>
                              <th>2</th>
                              <th>Adhitya Nugraha</th>
                            <th>A11.2021.133227</th> 
							 <th>A11.441U</th>
							 <th>12.30</th>
                             <th>15.00</th>
							 <th>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
							 
							 
                             <tr>
                              <th>3</th>
                              <th>Adhitya Nugraha</th>
                            <th>A11.2021.133227</th> 
							 <th>A11.441U</th>
							 <th>09.30</th>
                             <th>12.00</th>
							 <th>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>
							 
						  </tbody>
						  
					      
					   </table>
					</div>
        </div>
    </div>  

    <footer class="footer">
    <div class="container-fluid">
    <div class="footer-in">
			      <p class="mb-0">Copyright &copy; 2023 - SI Absen - All Rights Reserved.</p>
	 </div>
    </div>
    </footer>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });
		  
		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });
		  
	   });
  </script>
</body>
</html>
