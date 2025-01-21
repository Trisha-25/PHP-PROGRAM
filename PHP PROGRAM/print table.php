
<html>
<head>
    
    <title>table print</title>
</head>

       <style>
      .center{
      	text-align: center;
      	width: 100%;
      }
      .heading{
      	color: darkred;
      }
      
    </style>

</head>
<body>
	<div class="center" >
		<h2 class="heading"> TABLE PRINT PROGRAM </h2>
</body>
</html>

<?php 
$number = 2;
for ($i=1; $i <=10; $i++) {
  echo "$number x $i = ". ($number * $i). "<br>";
}
 ?>