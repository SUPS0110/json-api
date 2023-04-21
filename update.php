<?php
header('Content-Type:application/json');

$success=false;
$conn= new mysqli("localhost","root","","security");
if($conn->connect_error){
    die("failed");
}
$sql="UPDATE learn set Name='suprima' where id=3";
$result=$conn->query($sql);
if($result===true){
    $success=true;
}
$response=array(
    'status'=>'ok',
    'success'=>$success
);
echo json_encode($response);
$conn->close();
?>