<?php
include('includes/header.php');
include('includes/sidebar.php');
$conn = mysqli_connect("localhost", "root", "", "blog_data");
$str ="select * from posts";
$rest = mysqli_query($conn, $str);
$row = mysqli_num_rows($rest);

?>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
.card1 {
width: 550px;
height: 160px;
border: blue 3px solid;
display: flex;
flex-direction: rows;
gap: 0px;
justify-content: space-between;

}
.image {
width: 225px;
height:280px;
}
.card-content {
width: 300px;
height: 250px;

}
.card-body {
width: 275px;
height: 75px;
}
.card-footer {
width: 225px;
height: 20px;
margin-top: 5px;
background: blue;
color: white;
}
.img1 {
width: 240px;
height: 150px;
}
.card-title {
background: blue;
color: white;
}
.link {
text-decoration: none;
color: white;
}
.fluid-container {
background: white;
margin-left: 240px;
margin-top: -175px;
height: 855px;
width: 1250px;
}
.footer {
margin-top: 10px;
width: 1500px;
}
.data-card {
margin-left: -220px;
}
</style>
</head>
<body>
<div class="fluid-container">
<div class="cards">
<table class="data-card">
<tr>
<?php
$i=1;
while($rows = mysqli_fetch_assoc($rest)){
?>
<td><div class="card1">
<div class="image"><img class="img1" src="./images/<?=$rows['image'];?>"></img></div>
<div class="card-content">
<div class="card-title"><a href="./post-display.php?postid=<?=$rows['postid']; ?>" class="link"><?=$rows['title']; ?></a></div>
<div class="card-body" truncate><?=$rows['details']; ?></div>
<?php
$originalDate = $rows['postedon'];
$newDate = date("d-m-Y", strtotime($originalDate));
?>
<div class="card-footer">Posted on : <?=$newDate; ?></div>
</div>
</div></td>
<?php
if($i%2 == 0){
echo "<tr><td></td></tr>";
}
$i++;
}
$table = $_GET['table'];
echo "hello world".$table;
?>
</table>
</div>
</div>
<?php
include('includes/footer.php');
include('includes/script.php');
?>
<script>
$(document).ready(function() {
$(function(){
  $(".card-body").each(function(i){
    len=$(this).text().length;
    if(len>100)
    {
      $(this).text($(this).text().substr(0,50)+'...');
    }
  });       
});
});
</script>
</body>
</html>