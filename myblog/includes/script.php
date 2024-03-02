<script>
 $(document).ready(function() {
 $('.sidebar-menu1').dblclick( function() {
 $('.link-menu1').toggle('show');
 });
$('.sidebar-menu2').dblclick( function() {
 $('.link-menu2').toggle('show');
 });
$('.link-menu1 .users').click(function(){
alert("users link clicked");

});
 });
 </script>