<?php 
$angka = [1,3,5,7,9,0,2,4,6,8];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 3</title>
 	<style>
 		div {
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			float: left;
 			margin:5px;
 		}

 	</style>
 </head>
 <body>
 	<!-- <?php for ($i=0; $i <count($angka) ; $i++) { ?>
		<div> <?php echo $angka [$i]; ?></div> 	
 	<?php } ?> -->

 	<?php 	foreach ($angka as $urutan) : ?>
 			<div>	<?php 	echo $urutan; ?></div>
 		<?php 	endforeach; ?>

 </body>
 </html>