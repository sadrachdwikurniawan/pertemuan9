<?php 
	include "controller/kalkulator.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan pertemuan Ke-9</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<style type="text/css">
	.media {
		overflow: hidden;
		color: #fff;
		background-color: #000; /" fallback value"/
		background-image: linear-gradient(black, grey);
	}

</style>
</head>
<body>
	<!-- awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
	  <a class="navbar-brand" href="#">HOME</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="navbar-nav">
          
          <li class="nav-item">
            <a class="nav-link" href="#service">SERVICE</a>
            <li class="nav-item">
            <a class="nav-link" href="#contact">CONTACT</a>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LOGIN</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- akhir navbar -->
	<!-- deklarasi variabel -->
   	<?php
   		$nama    = "budi";
   		$no_telp = "08192878";
   	?>
   	<!-- finish variabel -->
    <!-- awal konten -->

    <h1>Nama&nbsp;&nbsp;: <?php echo $nama; ?></h1>
    <h1>No&nbsp;&nbsp;: <?php echo $no_telp; ?></h1>
    <br><br>
    <hr>
    <?php 
    	$bilA=6;
    	$bilB=7;
    	$hasil=0;
    	if (penjumlahan($bilA, $bilB)<=15) {
    		$hasil="Nilai penjumlahan sedikit";
    	}else{
    		$hasil=penjumlahan($bilA, $bilB);
    	}
     ?>

     <h2>nilai bil.pertama&nbsp;=<?= $bilA; ?></h2>
     <h2>nilai bil.kedua&nbsp;=<?= $bilB; ?></h2>
     <h2>hasil penjumlahan&nbsp;= <?=$hasil; ?></h2>

     <h2>nilai bil.pertama&nbsp;=<?= $bilA; ?></h2>
     <h2>nilai bil.kedua&nbsp;=<?= $bilB; ?></h2>
     <h2>hasil pengurangan&nbsp;= <?= pengurangan($bilA, $bilB); ?></h2>

     <h2>nilai bil.pertama&nbsp;=<?= $bilA; ?></h2>
     <h2>nilai bil.kedua&nbsp;=<?= $bilB; ?></h2>
     <h2>hasil perkalian&nbsp;= <?= perkalian($bilA, $bilB); ?></h2>

     <h2>nilai bil.pertama&nbsp;=<?= $bilA; ?></h2>
     <h2>nilai bil.kedua&nbsp;=<?= $bilB; ?></h2>
     <h2>hasil pembagian&nbsp;= <?= pembagian($bilA, $bilB); ?></h2>


    <!-- awal form -->
   <div class="container" style="padding-top: 40px">

   	

   	 <div class="form-group">
        <label>Email Address :</label>
        <input type="Email" class="form-control" id="email" name="email">

      <div class="form-group">
        <label>Message :</label>
        <textarea class="form-control" rows="5"></textarea>

      <div class="form-group">
        <br><button class="btn btn-success btn-lg">Send</button></br>
    </div>
   </div>

   <!-- awal tabel -->

   <table class="table table-bordered" width="100%">
   		<tr>
   			<th width="10%">No</th>
   			<th width="30%">Nama</th>
   			<th width="10%">Kelas</th>
   			<th width="20%">Email</th>
   			<th width="30%">Alamat</th>
   		</tr>
   		<tr>
   			<td>1</td>
   			<td>Budi</td>
   			<td>Jarkom 2</td>
   			<td>budi@gmail.com</td>
   			<td>Sleman</td>
   		</tr>
   		<tr>
   			<td>2</td>
   			<td>Andi</td>
   			<td>Jarkom 2</td>
   			<td>andi@gmail.com</td>
   			<td>Sleman</td>
    	</tr>
    	<tr>
    		<td>3</td>
    		<td>Adi</td>
    		<td>Jarkom 2</td>
    		<td>adi@gmail.com</td>
    		<td>Sleman</td>
    	</tr>
   </table>
   <!-- akhir tabel -->

   <!-- akhir form -->
   <!-- akhir konten -->
</body>
</html>