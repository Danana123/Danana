<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style type="text/css">
		.warna-baris{
			background-color: salmon;
		}



		.warna-kolom{
			background-color: blue;
		}
	</style>

</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
	<!-- 	<tr>
			<td>1,1</td>
			<td>1.2</td>
			<td>1,3</td>
			<td>1,4</td>
			<td>1,5</td>
		</tr>
		<tr>
			<td>2,1</td>
			<td>2.2</td>
			<td>2,3</td>
			<td>2,4</td>
			<td>2,5</td>
		</tr>
		<tr>
			<td>3,1</td>
			<td>3.2</td>
			<td>3,3</td>
			<td>3,4</td>
			<td>3,5</td>
		</tr> -->




		<?php for ($i=1; $i <=5 ; $i++) : ?>
			<?php if ($i %2 == 1) : ?>
				<tr class="warna-baris">
			<?php else: ?>
				<tr class="warna-kolom">
			<?php endif; ?>

				<?php for ($j=1; $j <=5 ; $j++) : ?>
					<td><?php echo "$i,$j"; ?></td>
				<?php endfor; ?>
				</tr>
		<?php endfor; ?>


		<?php  
		$Warna = [["Merah","Biru", "Hitam", "Putih", "Kuning"]];
		$Warna[] = "kuntul";
		var_dump($Warna);
		echo "<br>";
		print_r($Warna);
		echo "<br>";
		echo $Warna [5];
		


		?>

			




	</table>

</body>
</html>