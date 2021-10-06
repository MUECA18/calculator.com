<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SIMPLE ARITHMETIC CALCULATOR</title>
</head>
<body>
	<style >

		body{  
             background-image: url(arlogo.jpg.png);
             background-position: center;
             background-size: 100%;
             background-repeat: no-repeat;
             }
             input[type=text]{
                font-family: impact;
               font-size: 45px;
               text-align: center;
               height: 70px;
               width: 450px;
             	border: 3px solid #aaa;
             	border-radius: 4px;
             	margin: 8px 0;
             	outline: none;
             	padding: 8px;
             	box-sizing:border-box;

             }
             select{

             	color: green;
             	font-family: impact;
             	text-align: center;
                height: 50px;
                width: 300px;
                font-size: 30px;
                border: 2px gray;
                box-sizing:border-box;

  }

             
             input[type=text]:focus{
             	
             	border-color: dodgerblue;
             	box-shadow:1 1 9px 0 dodgerblue;
             }


             button[type=submit]{
                 color: red;
                 font-size: 30px;
                 font-family: impact;
             	text-align: center;
               height: 50px;
               width: 170px;
             	border: 3px solid #aaa;
             	border-radius: 4px; 
             	margin: 10px 0;
             	outline: none;
             	padding: 8px;
             	box-sizing:border-box;

             }
	</style>
	<center>
	<h1 style=" font-family: impact; font-size:120px; color: blue; " > SIMPLE CALCULATOR </h1>

	<form action="arfunction.php" method="POST">
		
		<label style="font-size: 40px; font-family:impact; color:black;">First Number: </label><input type="text" name="number1" placeholder="ENTER FIRST NUMBER "><br>
		<label  style="font-size: 40px; font-family:impact; color:black;">Choose Operation: </label><select name="sel">
			<option value="2">ADDITION</option>
			<option value="4">SUBTRACTION</option>
			<option value="6">MULTIPLICATION</option>
			<option value="8">DIVISION</option>
			
		</select>
		<br>
		<label style="font-size: 40px; font-family:impact; color:black;">Second Number: </label><input type="text" name="number2" placeholder="ENTER SECOND NUMBER ">
		<br>
		<button type="submit" name="submit" value="submit">PROCEED!</button>
	</form>
 

	</center>

</body>

</html>