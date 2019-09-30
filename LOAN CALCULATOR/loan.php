<!DOCTYPE html>
<head>
<title> LOAN CALCULATOR </title>
<style type="text/css">
#t1
		{
			border-top: 2px solid black;
			border-bottom: 2px solid black;
			border-left:2px solid black;
			border-right:2px solid black;
			margin-left: 450px;
			margin-right: 450px;
			margin-top: 150px;
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
<form method="POST" name="loan" action="loanaction.php" >
<center>
<h1> LOAN CALCULATOR</h1>
<div id=t1>
<h2> Enter your Details</h2>
<table>
<tr>
<th align="left">
Full Name: 
</th>
<th align="left">
<input type=text  name="name">
</th>
</tr>
<tr>
<th align="left">
Address:
</th>
<th align="left">
<input type=text  name="add">
</th>
</tr>
<tr>
<th align="left">
Contact Number: 
</th>
<th align="left">
<input type=number size="10" name="cno">
</th>
</tr>
<tr>
<th align="left">
Loan Type:
</th>
<th align="left">
<select name="sel">
<option>
<option value="Car Loan">Car Loan (Min Intereset=7%)
<option value="Home Loan">Home Loan (Min Intereset=10%)
<option value="Student Loan">Student Loan (Min Intereset=6%)
<option value="Personal Loan">Personal Loan (Min Intereset=5%)
</select>
</th>
</tr>
<tr>
<th align="left">
Loan Amount:
</th>
<th align="left">
<input type="number" name="amt">
</th>
</tr>
<tr>
<th align="left">
Interest%:
</th>
<th align="left">
<input type="text" name="rate">
</th>
</tr>
<tr>
<th align="left">
Tenure:
</th> 
<th align="left">
<input type="number" name="yrs" placeholder="Years">
<input type="number" name="months" placeholder="Months">
</th>
</tr>

</table>
<input type=submit >

<input type=reset>

</form>
</div>
</body>
</html>