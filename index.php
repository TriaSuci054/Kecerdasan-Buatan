<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
          
          
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="index.php"><button type="button" class="btn btn-primary btn-block active">BERANDA</button></a></p>
      <p><a href="diagnosa.php"><button type="button" class="btn btn-primary btn-block">DIAGNOSA PENYAKIT</button></a></p>
      <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-primary btn-block">DAFTAR PENYAKIT</button></a></p>
      <p><a href="about.php"><button type="button" class="btn btn-primary btn-block">ABOUT</button></a></p>
      <br><br><br><br><br><br><br><br><br><br>
      <p><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGIN</button></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <center><h2>SISTEM PAKAR DIAGNOSA HAMA DAN PENYAKIT TANAMAN PADI
</h2></center><br>
        <div class="panel panel-info">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <p align=justify>Tanaman padi merupakan tanaman dimana hasilnya menjadi sumber pangan penting bagi warga Indonesia. Dalam penanaman padi yang dilakukan para petani tidak terlepas dari hama maupun penyakit yang menyerang tanaman mereka. Tujuan dirancangnya sebuah website dapat dijadikan sebagai alat bantu bagi seorang petani untuk menunjukkan penyakit yang terdapat pada tanaman padi petani sehingga kedepannya tidak ada kerugian yang diakibatkan keterlambatan penanganan penyakit tanaman padi sehingga bisa menyebabkan terjadinya gagal panen maupun mengalami kerugian. </p>
            </div>
        </div>
      
    </div>
  </div>
</div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
              <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>     
            
        </div>
      </div>
        
        
   
        
    </div>
  </div> 

<footer class="container-fluid text-center">
  <p>kelompok 11</p>
</footer>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>
