<html>
<head>
<style>
#x{
width:200px;
height:50px;
top:400px;
left:0px;
position:fixed;
background-color:red;}
</style>
<script src="jq.js"></script>
<script>
$(document).ready(function(){
$('#x').animate({
left:'500px'},1000).animate({top:'300px'},1000);});
</script>
<div id="x"></div>