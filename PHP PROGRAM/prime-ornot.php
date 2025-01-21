<html>
<head>
    
    <title>PRIME PROGRAM</title>
</head>

       <style>
      .center{
      	text-align: center;
      	width: 100%;
      }
      .heading{
      	color: blueviolet;
      }
      
    </style>

</head>
<body>
	<div class="center" >
		<h2 class="heading">PRIME PROGRAM </h2>
		</body>
</html>

<?php
$a=16;
$c=0;
$i;
for($i=1;$i<6;$i++){
if($a%$i==0){
    $c++;
}
}
if($c==2){
    echo"$a is prime number <br>";
}
else
echo"$a not a prime number <br>";

?>

