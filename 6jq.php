<html>
<head>
<style>
#x{
width:200px;
height:50px;
top:400px;
left:0px;
position:fixed;
background-color:orange;}
#y{
width:200px;
height:50px;
top:460px;
left:0px;
position:fixed;
background-color:gray;}
#z{
width:200px;
height:50px;
top:520px;
left:0px;
position:fixed;
background-color:green;}
</style>
<script src="jq.js"></script>
<script>
$(document).ready(function(){
$('#x').click(function(){
$('#x').animate({
left:'500px'},1000).animate({top:'300px'},1000);});
$('#y').click(function(){
$('#y').animate({
left:'500px'},1000).animate({top:'400px'},1000);});
$('#z').click(function(){
$('#z').animate({
left:'500px'},1000).animate({top:'500px'},1000);});
});

</script>
<div id="x"></div>
<div id="y"></div>
<div id="z"></div>