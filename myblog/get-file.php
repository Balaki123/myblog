<?php
$conn = mysqli_connect("localhost","root","","blog_data");
$method = $_SERVER['REQUEST_METHOD'];

if($method == "POST")
{
$action = $_POST['action'];
echo $action;
$name= $_POST['name'];
echo $name;
$emailid= $_POST['emailid'];
echo $emailid;
$password = $_POST['password'];
echo $password;
$picture = $_FILES['file']['name'];
echo $picture;
$createdon = $_POST['createdon'];
$uploads_dir = './images';
$temp_name = $_FILES['file']['tmp_name'];
if(move_uploaded_file($temp_name, "$uploads_dir/$picture"))
{
echo "file moved";
}
$sql = "insert into users (name, emaild, password, picture, createdon) values('$name','$emailid','$password','$picture','$createdon')";
echo $sql;
$rest = mysqli_query($conn, $sql);
if($rest){
echo "data inserted";
}
else
{
echo "data not inserted";
}
}

elseif($method == "UPDATE")
{
echo "Inside update option";
parse_str(file_get_contents('php://input'), $data);
$userid = $data['userid'];
echo $userid;
$name = $data['name'];
echo $name;
$emailid = $data['emailid'];
echo $emailid;
$password = $data['password'];
echo $password;
$file = $data["file_name"];
echo $file;
$createdon = $data['createdon'];
echo $createdon;
$stmt = "update users set name = '$name', emaild = '$emailid', password = '$password', picture = '$file', createdon ='$createdon' where userid = $userid";
echo $stmt;
$res  = mysqli_query($conn, $stmt);
if($res)
{
echo "data updated";
}
else
{
echo "not updated";
}
}
elseif($method == "DELETE")
{
echo "inside delete option";
parse_str(file_get_contents('php://input'), $del);
$userid = $del['col1'];
echo $userid;
$sal = "delete from users where userid =$userid ";
echo $sal;
$resp = mysqli_query($conn, $sal);
if($resp)
{
echo "Record deleted";
}
else
{
echo "Record not deleted";
}
}

?>
