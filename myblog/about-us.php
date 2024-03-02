<?php
$conn = mysqli_connect("localhost","root","","blog_data");
include('includes/header.php');
include('includes/sidebar.php');
?>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script "text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script "text/javascript" src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>
<style>
.about-container {
height: 1305px;
width: vh;
display: grid;
grid-template-columns: repeat(4, 1fr);
grid-template-rows: repeat(6, 1fr);
grid-template-areas:
"mission mission mission mission"
"mission mission mission mission"
"team team team team"
"team team team team"
"portfolio portfolio portfolio portfolio"
"portfolio portfolio portfolio portfolio";
grid-gap: 10;
margin-left: 250px;
background: url('./images/background-shade-blue.jpg');
background-size: cover;
background-repeat: no-repeat;
margin-top: 5px;
}
.mission {
grid-area: mission;
width: 1200px;
height: 500px;
background: transparent;
}
.team {
grid-area: team;
width: 1200px;
height: 400px;
background: transparent;
overflow: hidden;
}
.portfolio {
grid-area: portfolio;
width: 1200px;
height: 500px;
background: #fff;
}
.card-mission {
margin-left: 220px;
margin-right: 220px;
margin-top: 20px;
width: 1000px;
}
.slider {
margin-left: 0px;
margin-right: 340px;
width: 1300px;

}
.card-missionb1, .card-missionb2, .card-missionb3 {
height: 420px;
width: 1000px;
margin-right: 20px;
background: transparent;
border: blue 5px solid;
}
.card-title, .card-footer {
background: blue;
color: white;
text-align: center;
}
.card-footer {
margin-top: 80px;
}
.card-content {
height: 290px;
margin-left: 20px;
color: black;
}
.img1, .img2, .img3 {
display: block;
  margin-left: auto;
  margin-right: auto;
  width: 125px;
  height: 100px;
  margin-top: 10px;
  border: blue 5px solid;
border-radius: 50%;

}
.desc {
;margin-top: 10px;
margin-left: 35px;
margin-right: 40px;
}


.card-slider1 {
border: blue 5px solid;
width: 70px;
height:335px;
margin-top: 40px;
border-radius: 20px;
background: #fff;
font-size: 12px;
}
.profiles {
margin-top: 10px;
margin-left: auto;
margin-right: auto;
color: black;
font-weight: 700;
}
.card-img {
background: blue;
width: 100%;
padding: 2px 0px;
border-radius: 20px;
height: 120px;
}
.img-card {
width: 100px;
height: 100px;
margin-left: 145px;
margin-top: 7px;
border-radius: 50%;
border: brown 5px solid;
border: white 5px solid;
}

.swiper-button-next, .swiper-button-prev {
margin-top: 400px;
}
.swiper-button-next {
margin-right: 50px;
margin-top: 470px;
}
.swiper-button-prev {
margin-left: 270px;
margin-top: 470px;
}
.swiper-pagination {
margin-top: 240px;
align: center;
height: 20px;
}
.portfolio {
display: flex;
flex-direction: row;
gap: 10px;
background: transparent;
}
.projects {
width: 60%;
height: 100%;
display: grid;
grid-template-columns: repeat(3, 1fr);
grid-template-rows: repeat(6, 1fr);
grid-gap: 20px;
grid-template-areas:
"project-info1 project-info2 project-info3"
"project-info1 project-info2 project-info3"
"project-info1 project-info2 project-info3"
"project-info4 project-info5 project-info6"
"project-info4 project-info5 project-info6"
"project-info4 project-info5 project-info6";
background: transparent;
margin-top: 5px;
margin-left: 5px;
margin-right: 5px;
}
.project-info1 {
grid-area: project-info1;
height: 240px;
border: blue 5px solid;
}
.project-info2 {
grid-area: project-info2;
height: 240px;
border: blue 5px solid;
}
.project-info3 {
grid-area: project-info3;
height: 240px;
border: blue 5px solid;
}
.project-info4 {
grid-area: project-info4;
height: 240px;
border: blue 5px solid;
}
.project-info5 {
grid-area: project-info5;
height: 240px;
border: blue 5px solid;
}
.project-info6 {
grid-area: project-info6;
height: 240px;
border: blue 5px solid;
}
.skillset {
width: 40%;
height: 820px;
}
.heading{
    text-align: center;
    font-size: 20px;
    color: #fff;
    text-transform: capitalize;
    font-weight: 300;
    margin-bottom: 30px;
}

.skills-container{
    width: 95%;
    margin: auto;
    
    color: #fff;
}

.skill-card{
    position: relative;
}

.skill-img{
    display: block;
    margin: auto;
    height: 50px;
}

.skill-name{
    font-size: 14px;
    font-weight: 300;
    text-align: center;
    text-transform: capitalize;
    margin: 20px 0 10px;
}

.skill-info{
    text-align: center;
    opacity: 0.5;
    font-size: 14px;
    line-height: 10px;
width: 90px;
}

.skill-level{
    position: absolute;
    top: 80px;
    right: 0;
    width: 100px;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 12px;
    border-radius: 50%;
    border: 10px solid;
}

.skill-card:nth-child(1) .skill-level{
    background: #ff4f4f28;
    border-color: #ff4f4f;
    color: #ff4f4f;
}

.skill-card:nth-child(2) .skill-level{
    background: #4fa0ff28;
    border-color: #4fa0ff;
    color: #4fa0ff;
}

.skill-card:nth-child(3) .skill-level{
    background: #ffed4f28;
    border-color: #ffed4f;
    color: #ffed4f;
}

.skill-card:nth-child(4) .skill-level{
    background: #52ff4f28;
    border-color: #52ff4f;
    color: #52ff4f;
}

.skill-card:nth-child(5) .skill-level{
    background: #4fdfff28;
    border-color: #4fdfff;
    color: #4fdfff;
}
.skill-card:nth-child(6) .skill-level{
    background: green;
    border-color: #brown;
    color: yellow;
}
.skills {
background: url('images/office-header.jpg');
background-size: cover;
background-repeat: no-repeat;
overflow: hidden;
height: 505px;
}
.project-title {
background: blue;
color: white;
text-align: center;
border-radius: 10px;
}
.project-desc {
margin-top: 10px;
margin-left: 10px;
}
.footer {
margin-left: -1595px;
width: 1680px;
}
.sidebar {
height: 1400px;


}
</style>
</head>
<body>
<div class="about-container">
<div class="mission">
<div class="card-mission">
<div class="slider">
            <div class="card-missionb1">
               <div class="card-title">About Us</div>
               <div class="card-content">
                     <img class="img1" src="images/tajmahal.jpg">
                     <div class="desc">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                     </div>
                 </div>
               <div class="card-footer">Place: Agra</div>


             </div>
            <div class="card-missionb2">
              <div class="card-title">Our Mission</div>
              <div class="card-content">
                  <img class="img2" src="images/charminar.jpg">
                  <div class="desc">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p> 
                     </div>
              </div>
              <div class="card-footer">Place: Hyderabad</div>
           </div>
            <div class="card-missionb3">
               <div class="card-title">Our Services</div>
                <div class="card-content">
                    <img class="img3" src="images/Good-morning.jpg">
                     <div class="desc">
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

<ul>
                                        <li> Blog</li>
                                        <li> Vlog</li>
                                        <li> Copy Writing</li>
                                        <li>Content Writing </li>
                                       </ul> 
                     </div>
                </div>
                <div class="card-footer">Place: China</div>
             </div>

 </div>
</div>
</div>
<div class="team ">
   <div class="swiper-container mySwiper">
       <div class="card-team swiper-wrapper">
           <?php
            $stmt ="select * from users";
            $res = mysqli_query($conn, $stmt);
            $design = array();
            array_push($design, "CEO","Web Developer","Administrator","Content Writer","Senior Web Designer", "SEO specialist", "Data Analysts","Web Designer","Human Resources");
            $i = 0;
            while($rows = mysqli_fetch_assoc($res))
            {
            ?>
           <div class="card-slider1 swiper-slide">
             <div class="card-img"><img class="img-card" src="./images/<?=$rows['picture']; ?>" width=75 height=50></div>
             <div class="profile">
               <table class="profiles">
               <tr><td>Name</td><td>:&nbsp; </td><td><?=$rows['name']; ?></td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr><td>Emailid</td><td>:&nbsp; </td><td><?=$rows['emaild']; ?></td></tr>
                 <tr><td>&nbsp;</td></tr>
<?php
$date = date_create($rows['createdon']);
$current = date_format($date,'d/m/y');
?>
                <tr><td>Joined Date</td><td>:&nbsp;</td><td><?=$current; ?></td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr><td>Designation</td><td>: &nbsp;</td><td><?=$design[$i]; ?></td></tr>
                <tr><td>&nbsp;</td></tr>
<tr><td>Expertise</td><td>: &nbsp;</td><td><i class="fa fa-star">&nbsp;<i class="fa fa-star">&nbsp;<i class="fa fa-star">&nbsp;<i class="fa fa-star-o">&nbsp;<i class="fa fa-star-o"></i></i></td></tr>
                </table>
             </div>
            </div>
            <?php
              $i++;
               }
             ?>   

       </div>
<div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
       
   </div>  
<div class="swiper-pagination"></div>  

   
</div>
<div class="portfolio">
<div class="projects">


<div class="project-info1">
<div class="project-title">Project1</div>
<div class="project-desc">
<img class="project-images" src="images/lady.jpg" width=95% height=100>
<div class="details">
Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue.
</div>
</div>
</div>
<div class="project-info2">
<div class="project-title">Project2</div>
<div class="project-desc">
<img class="project-images" src="images/Good-morning.jpg" width=95% height=100>

<div class="details">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.   </div>
</div>

</div>
<div class="project-info3">
<div class="project-title">Project3</div>
<div class="project-desc">
<img class="project-images" src="images/scenery.jpg" width=95% height=100>
<div class="details">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.  </div>
</div>

</div>
<div class="project-info4">
<div class="project-title">Project4</div>
<div class="project-desc">
<img class="project-images" src="images/tajmahal.jpg" width=95% height=100>
<div class="details">
Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.  Vestibulum lacinia arcu eget nulla. </div>
</div>

</div>
<div class="project-info5">
<div class="project-title">Project5</div>
<div class="project-desc">
<img class="project-images" src="images/charminar.jpg" width=95% height=100>
<div class="details">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. </div>
</div>

</div>
<div class="project-info6">
<div class="project-title">Project6</div>
<div class="project-desc">
<img class="project-images" src="images/getty-image.jpg" width=95% height=100>
<div class="details">
Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.  </div>
</div>
</div>
</div>

<div class="skillset">
<div class="skills">
<h1 style="text-align: center"> Skills sets Used </h1>
<table>
<tr>
    <td><div class="skills-container">
        <div class="skill-card">
            <img src="images/html.png" class="skill-img" alt="">
            <div class="skill-level">98%</div>
            <h1 class="skill-name">HTML</h1>
            <p class="skill-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, delectus!</p>
        </div></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

       <td> <div class="skill-card">
            <img src="images/css.png" class="skill-img" alt="">
            <div class="skill-level">98%</div>
            <h1 class="skill-name">CSS</h1>
            <p class="skill-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, delectus!</p>
        </div></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        <td><div class="skill-card">
            <img src="images/js.jpg" class="skill-img" alt="">
            <div class="skill-level">98%</div>
            <h1 class="skill-name">JS</h1>
            <p class="skill-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, delectus!</p>
        </div></td></tr>
<tr><td>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td><div class="skill-card">
            <img src="images/php.png" class="skill-img" alt="">
            <div class="skill-level">98%</div>
            <h1 class="skill-name">PHP</h1>
            <p class="skill-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, delectus!</p>
        </div></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><div class="skill-card">
            <img src="images/mysql.png" class="skill-img" alt="">
            <div class="skill-level">98%</div>
            <h1 class="skill-name">MySQL</h1>
            <p class="skill-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, delectus!</p>
        </div></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><div class="skill-card">
            <img src="images/joomla.jpg" class="skill-img" alt="">
            <div class="skill-level">98%</div>
            <h1 class="skill-name">Joomla</h1>
            <p class="skill-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, delectus!</p>
        </div></td></tr>
</table>
</div>
</div>
</div>
<script>
$(document).ready(function() {
 $('.slider').bxSlider({
                autoControls: true,
                auto: true,
                pager: true,
                slideWidth: 800,
                adaptiveHeight: true,
                mode: 'fade',
                captions: false,
                speed: 100
            });
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        slidesPerGroup: 3,
        loop: false,
        loopFillGroupWithBlank: false,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

});

</script>
<?php
include('includes/footer.php');
include('includes/script.php');
?>
</body>
</html>