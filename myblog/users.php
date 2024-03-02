<?php
include('includes/header.php');
include('includes/sidebar.php');
?>
<html>
<head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<style>
.container-fluid1 {
margin-left: 260px;
margin-top: 5px;
background: white;
overflow: scroll;
background: url('./images/blur-bubbles.jpg');
background-size: cover;
background-repeat: no-repeat;
}
.navbar-header, .nav {
margin-top: 0px;
}
.navbar-header { 
margin-left: -10px;
}
.footer {
margin-top: 10px;
margin-left: -15px;
}
.sidebar {
height: 760px;
}
input[type="text"] {
width: 100px;
}

</style>
</head>
<body>
<div class="container-fluid1">
<table class="data">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Emailid</th>
<th>Password</th>
<th>Picture</th>
<th>Created on </th>
<th>Action <button class="add btn-primary"><i class="fa fa-plus"></i></button></th>
</tr>
</thead>
<tbody>
<?php
$conn = mysqli_connect("localhost", "root","", "blog_data");
$sql = "select * from users";
$rest = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($rest))
{
?>
<tr><td><?=$row['userid'];?></td><td><?=$row['name'];?></td><td><?=$row['emaild'];?></td><td><?=$row['password'];?></td><td><img src="./images/<?=$row['picture'];?>" width="100" height"50"></img></td><td><?=$row['createdon'];?></td><td><button class="edit btn-success"><i class="fa fa-pencil"></i></button>&nbsp; &nbsp;<button class="delete btn-danger"><i class="fa fa-trash"></i></button></td></tr>
<?php
}
?>
</tbody>
</table>
</div>
<?php
include('includes/script.php');
include('includes/footer.php');
?>
<script>
$(document).ready(function() {
var t = $('.data').DataTable();
$(".data").on('click','.edit',function() {
       
        var currentRow = $(this).closest("tr");
        var col1 = currentRow.find("td:eq(0)").text();
        var col2 = currentRow.find("td:eq(1)").text();
        var col3 = currentRow.find("td:eq(2)").text();
        var col4 = currentRow.find("td:eq(3)").text();
        var col5 = currentRow.find("td:eq(4)").text();
        var col6 = currentRow.find("td:eq(5)").text();
   alert(col6);
var html = '<td><input type="text" name="userid" class="userid" value='+col1+' readonly></td><td><input type="text" name="name1" class="name1" value='+col2+'></td>';
html += '<td><input type="text" name="emailid" class="emailid" value='+col3+'></td><td><input type="text" name="password" class="password" value='+col4+'></td>';
html += '<td><input type="file" name="picture" class="picture" value='+col5+'></td><td><input type="text" name="createdon" class="createdon" value='+col6+'></td>';
html += '<td><button class="update btn-info"><i class="fa fa-edit"></i></button>&nbsp; <button class="cancel btn-default"><i class="fa fa-times"></i></button></td>';
        
        
        
        $(currentRow).each(function () {
            $(currentRow).html(html);
        });
$('.userid').attr('disabled','disabled');
$('.name1').focus();
 });
$(document).on('click', '.update',function() {
alert("edit button clicked");
var userid = $('.userid').val();
var name = $(".name1").val();
var emailid = $(".emailid").val();
var password =  $(".password").val();
var picture  = $('.picture').prop('files')
var file = picture[0];
var file_name = file.name;
var createdon = $('.createdon').val();
var action = $('action').val();
alert(userid+","+name+","+password+","+file.name);
$.ajax({
url: "get-file.php",
method: "UPDATE",
data:{userid: userid, name: name, emailid: emailid, password: password, file_name: file_name, createdon: createdon},
success: function(response)
{
alert(response);
}
});
});
 $('.add').click(function() {

alert(" add button clicked");
t.row.add(['<input type="text" name="userid" class="userid">','<input type="text" name="name" class="name">','<input type="text" name="emaidid" class="emailid">','<input type="text" name="password" class="password">','<input type="file" name="picture" class="picture">','<input type="text" name="createdon" class="createdon">', '<button class="save btn-info"><i class="fa fa-save"></i></button> <button class="cancel btn-warning"><i class="fa fa-times"></i></button>']);
$('.userid').attr("disabled","disabled");
});
$(document).on('click', '.save', function() {
alert("save button clicked");
var name = $('.name').val();
var emailid = $('.emailid').val();
var password = $('.password').val();
var createdon = $('.createdon').val();
var picture = $('.picture').prop('files')
var file = picture[0];
fd = new FormData;
var action="insert";
fd.append("name", name);
fd.append("emailid", emailid);
fd.append("password", password);
fd.append("file", file);
fd.append("createdon", createdon);
fd.append("action", action);
$.ajax({
url: "get-file.php",
method: "POST",
data: fd,
cache: false,
processData: false,
contentType: false,
success: function(response) {
alert(response);
}
});
});
$('.delete').click(function() {
var currentRow = $(this).closest("tr");
        var col1 = currentRow.find("td:eq(0)").text();
alert("delete button clicked "+col1);
$.ajax({
url: "get-file.php",
method: "DELETE",
data: {col1: col1},
success: function(response) {
alert(response);

}
});
});
});
</script>
</body>
</html>