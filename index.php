<!DOCTYPE html>
<html>
<head>
	<title>Jam digital</title>


<?php
date_default_timezone_set("Asia/Jakarta");
?>

<script type="text/javascript">
function date_time(id)
{
date = new Date;
year = date.getFullYear();
month = date.getMonth();
months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
d = date.getDate();
day = date.getDay();
days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
h = date.getHours();
if(h<10)
{
h = "0"+h;
}
m = date.getMinutes();
if(m<10)
{
m = "0"+m;
}
s = date.getSeconds();
if(s<10)
{
s = "0"+s;
}
result = ''+days[day]+','+' '+d+' '+months[month]+' '+year+' '+h+':'+m+':'+s;

document.getElementById(id).innerHTML = result;
setTimeout('date_time("'+id+'");','1000');
return true;
}
</script>

 <span id="date_time"></span>
<script type="text/javascript">window.onload = date_time('date_time');</script>

</head>
<body style="font-size:50px;
		font-family: arial;
		color: #fff;
		background: url(night.jpg);
		background-size: 100%;
		text-align: center;
		background-repeat: no-repeat;
		margin: 70px 130px" id="jam">


<div class="Text">
	<?php

date_default_timezone_set("Asia/Jakarta");

$b = time();
$hour = date("G",$b);

if ($hour>=0 && $hour<=11)
{
echo "Selamat Pagi, Almas Amalina";
}
elseif ($hour >=12 && $hour<=14)
{
echo "Selamat Siang, Kamu ";
}
elseif ($hour >=15 && $hour<=17)
{
echo "Selamat Sore, Kamu ";
}
elseif ($hour >=17 && $hour<=18)
{
echo "Selamat Petang, Kamu ";
}
elseif ($hour >=19 && $hour<=23)
{
echo "Selamat Malam, Kamu ";
}
?>
<div class="have" style="font-size:40px;
		font-family: times new roman;
		color: #fff;
		padding-top: 200px;
		background-repeat: no-repeat;
		">
<?php echo "<br><br> Have a Nice Day<br><br><br>"; ?>
</div>

	
</div>
</body>
</html>

