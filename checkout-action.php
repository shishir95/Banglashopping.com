<?php
//include("db/db.php");

if (isset($_POST['submitted'])) {

  $fname =$_POST['fname'];
  $lname= $_POST['lname'] ;
  $num = $_POST['number'];
  $email= $_POST['compemailany'];
  $add1 = $_POST['add1'] ;
  $add2 = $_POST['add2'] ;
  $city =   $_POST['city'];
  $country = $_POST['country'] ;
  $zip = $_POST['zip'];
  $price=300;

$pdo = new PDO("mysql:host=localhost;dbname=banglashop","root","");
$insert_query= "INSERT INTO checkout(fname,lname,numb,email,add1,add2,city,country,zip,price) VALUES (:fname,:lname,:numb,:email,:add1,:add2,:city,:country,:zip,:price)";
$stmt =$pdo->prepare($insert_query);
$stmt->bindparam(':fname',$fname);
$stmt->bindparam(':lname',$lname);
$stmt->bindparam(':numb',$num);
$stmt->bindparam(':email',$email);
$stmt->bindparam(':add1',$add1);
$stmt->bindparam(':add2',$add2);
$stmt->bindparam(':city',$city);
$stmt->bindparam(':country',$country);
$stmt->bindparam(':zip',$zip);
$stmt->bindparam(':price',$price);
$stmt->execute();
echo "saved";
header("location:payment-option.php");

}

?>
