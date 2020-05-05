<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- passare come argomento in GET una mail e stampare un div che contenga OK se contiene un punto e una chiocciola; KO altrimenti -->
Benvenuto
<?php
$mail =$_GET['mail'];

if (strpos($mail,"@") && strpos($mail,".")) {
    echo "<div> Ok</div>";
}else{
    echo "<div> ko </div>";
}
?>

</body>
</html>