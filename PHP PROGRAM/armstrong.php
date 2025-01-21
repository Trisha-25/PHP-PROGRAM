<html>
<head>
	<title> ARMSTRONG PROGRAM</title>
	<style>
	.center {
            text-align: center;
             
            width: 100%;
        }
        
       
  
        .heading {
            color: blueviolet;
        }
    </style>
</head>
<body>
    <div class="center">
        <h2 class="heading"> HELLO THIS IS MY ARMSTRONG PROGRAM</h2>
        <?php
$a=153;$rem=0;$original;$result=0;
$original=$a;
while($a!=0){
$rem=$a%10;
$result=$result+($rem*$rem*$rem);
$a=$a/10;
}
if($result==$original){
echo"$original is armstrong number <br>";
}
else
echo"$original not a armstrong number <br>";
?>
