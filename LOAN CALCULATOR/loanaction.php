<!DOCTYPE html>
<head>
<style type="text/css">
#t1
		{
			border-top: 2px solid black;
			border-bottom: 2px solid black;
			border-left:2px solid black;
			border-right:2px solid black;
			margin-left: 450px;
			margin-right: 450px;
			margin-top: 10px;
			border-top-left-radius: 9px;
			border-top-right-radius: 11px;
			border-bottom-right-radius: 9px;
			border-bottom-left-radius: 11px;
                                    }

h1
		{
			font-family: 'Comfortaa', cursive;
		}
h2
		{
			font-family: 'Comfortaa', cursive;
		}
</style>
</head>
<body background="loanjj.jpg">
</body>
</html>
<?php
if($_POST)
{
$name=$_POST['name'];
$add=$_POST['add'];
$cno=$_POST['cno'];
$sel=$_POST['sel'];
$amt=$_POST['amt'];
$rate=$_POST['rate'];
$yrs=$_POST['yrs'];
$months=$_POST['months'];

if(($cno<0) || ($amt<0) || ($rate<0) || ($yrs<0) || ($months<0))
{
echo"<h1>Please Enter Valid Details</h1>";
}
else
{

if($sel=="Home Loan" && $rate<10)
{
$rate=10;
}
if($sel=="Car Loan" && $rate<7)
{
$rate=7;
}
if($sel=="Student Loan" && $rate<6)
{
$rate=6;
}
if($sel=="Personal Loan" && $rate<5)
{
$rate=5;
}




echo"<center><table><tr><th align=left> Full Name:</th><th align=left>$name</th></tr><tr><th align=left>Address:</th><th align=left>$add</th></tr><tr><th align=left>Contact Number:</th><th align=left>$cno</th></tr>";
echo"<tr><th align=left>Loan Type:</th><th align=left>$sel</th></tr>";
echo"<tr><th align=left>Loan Amount</th><th align=left>$amt</th></tr>";
echo"<tr><th align=left>Interest</th><th align=left>$rate %</th></tr>";
echo"<tr><th align=left>Tenure:</th><th align=left>$yrs Years $months months</th></tr></table></center>";

$time=($yrs*12)+$months;

$rate=($rate/1200);
$a=pow(1+$rate,$time);
$emi=($amt*$rate*$a)/($a-1);

echo " <div id=t1> <h2><center> EMI is: $emi</h2><table border=10px cellspacing=10 cellpadding=10 align=center><tr><th>MONTH</th><th>PRINCIPAL</th><th>INTEREST</th><th>BALANCE</th></tr>";
for($i=1;$i<=$time;$i++)
{
     
 $inter=($amt*$rate);
  $principal=$emi-$inter;
 $bal=$amt-$principal;
 if($bal<0)
  {
    $bal=0;
  }
  echo "<tr><td>$i</td><td>$principal</td><td>$inter</td><td>$bal</td></tr>";
  $amt=$bal;
}
echo"</div>";
}
}
?>

