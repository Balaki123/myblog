<?php
$conn = mysqli_connect("localhost","root","","blog_data");
echo"inside video upload";
$method = $_SERVER['REQUEST_METHOD'];
if($method == "POST")
{
$title = $_POST['title'];
$details = $_POST['details'];
$picture = $_FILES['videos']['name'];
$temp_name = $_FILES['videos']['tmp_name'];
$uploaded = $_POST['uploaded'];
echo $$details.",".$uploaded;
$root_dir = "./videos";
if(move_uploaded_file($temp_name, "$root_dir/$picture"))
{
echo "file moved";
}
$sql = "insert into videodata (title, description, videos, uploaded) values('$title','$details','$picture', '$uploaded')";
echo $sql;
$rest = mysqli_query($conn, $sql);
if($rest)
{
echo "data inserted";
}
else {

echo "data not inserted";
}
}
?>