<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 240px;
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: blue;
  overflow-x: hidden;
margin-top: 280px;
  }

.sidebar a {
  line-height: 40px;
  text-decoration: none;
  font-size: 16px;
  color: #f1f1f1;
  display: block;
  margin-top: 0;
  margin-left: 0;
}

.sidebar a:hover {
  background-color: white;
color: blue;
display: block;
position: relative;
transition: 0.3s;
opacity: 0.95;
border-radius: 7px;
padding: 2px;
}

@media screen and (max-height: 450px) {
  .sidebar1 {padding-top: 15px;}
  .sidebar1 a {font-size: 18px;}
}
.sidebar-menu1, .sidebar-menu2, .sidebar-menu {
list-style: none;
}
.link-menu1, .link-menu2 {
list-style: none;
display: none;
}
</style>
</head>
<body>

<div class="sidebar">
<ul class="sidebar1">
  <li class="sidebar-menu"><a href="http://localhost/myblog/trial.php"><i class="fa fa-fw fa-home"></i> Home</a></li>
<li class="sidebar-menu1"><a href="#services"><i class="fa fa-fw fa-cog"></i> Settings</a>
 <ul> 
   
   <li class="link-menu1 users"><a href="#"><i class="fa fa-fw fa-user"></i>Users</a></li>
    <li class="link-menu1 posts"><a href="http://localhost/myblog/posts.php"><i class="fa fa-fw fa-file"></i>Posts</a></li>
<li class="link-menu1 featured"><a href="http://localhost/myblog/sorttable.php"><i class="fa fa-fw fa-pencil"></i>Featured</a></li>
    <li class="link-menu1"><a href="#"><i class="fa fa-fw fa-save"></i>Edited</a></li>
   </ul>

</li>
 <li class="sidebar-menu2"> <a href="#clients"><i class="fa fa-fw fa-eye"></i> Views</a>
<ul> 
   
      <li class="link-menu2"><a href="#"><i class="fa fa-fw fa-file"></i>Posts</a></li>
<li class="link-menu2"><a href="#"><i class="fa fa-fw fa-pencil"></i>Featured</a></li>
    <li class="link-menu2"><a href="#"><i class="fa fa-fw fa-save"></i>Edited</a></li>
   </ul>

</li>
  <li class="sidebar-menu"><a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a></li>
 <li class="sidebar-menu"><a href="#logout"><i class="fa fa-fw fa-sign-out"></i> Logout</a></li>
</ul>
</div>


 <script>
 $(document).ready(function() {
 

 });
 </script>
</body>
</html> 
