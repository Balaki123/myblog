<?php
$conn = mysqli_connect("localhost","root","","blog_data");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "POST")
{
$table = $_POST['table'];
echo $table;
$type = $_POST['type'];
echo $type;
if($table == "posts" && $type == "insert")
{
$title = $_POST['title'];
$details = $_POST['details'];
$author = $_POST['author'];
$picture = $_FILES['file']['name'];
$temp_name = $_FILES['file']['tmp_name'];
$postdate = $_POST['postdate'];
echo $title.",".$postdate;
$root_dir = "./images";
if(move_uploaded_file($temp_name, "$root_dir/$picture"))
{
echo "file moved";
}
$sql = "insert into posts (title, details, author, postedon, image) values('$title','$details','$author', '$postdate', '$picture')";
}
elseif($table == "featured" && $type == "insert") {
$title = $_POST['title'];
$details = $_POST['details'];
$author = $_POST['author'];
$picture = $_FILES['file']['name'];
$temp_name = $_FILES['file']['tmp_name'];
$uploadedon = $_POST['uploadedon'];
echo $title.",".$details.",".$uploadedon;
$root_dir = "./images";
if(move_uploaded_file($temp_name, "$root_dir/$picture"))
{
echo "file moved";
}
$sql = "insert into featured (title, details, author, uploadedon, picture) values('$title','$details','$author', '$uploadedon', '$picture')";

}
elseif($table == "posts" && $type == "update")
{
echo "inside update posts<br>";
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
$date = $_POST['date'];
$picture = $_FILES['file']['name'];
$temp_name = $_FILES['file']['tmp_name'];
$root_dir = "./images";
if(move_uploaded_file($temp_name, "$root_dir/$picture"))
{
echo "file moved";
}
$sql = "update posts set title ='$title', details = '$content', author = '$author', postedon = '$date', image = '$picture' where postid = '$id' ";
}
elseif($table == "featured" && $type == "update")
{
echo "inside update featured <br>";
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
$date = $_POST['date'];
$picture = $_FILES['file']['name'];
$temp_name = $_FILES['file']['tmp_name'];
$root_dir = "./images";
if(move_uploaded_file($temp_name, "$root_dir/$picture"))
{
echo "file moved";
}
$sql = "update featured set title ='$title', details = '$content', author = '$author', uploadedon = '$date', picture = '$picture' where featuredid = '$id' ";
}
echo $sql;
$rest = mysqli_query($conn, $sql);
if($rest)
{
echo "data inserted";
}
else
{
echo "data not inserted";
}
}
?>
