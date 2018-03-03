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
#d{
width:600px;
height:500px;
top:200px;
left:550px;
position:fixed;
background-color:red;}

#e{
width:600px;
height:500px;
top:200px;
left:550px;
position:fixed;
background-color:red;}
#f{
width:600px;
height:500px;
top:200px;
left:550px;
position:fixed;
background-color:red;}

#pa{
	font-size:50px;
	text-align:center;
}
</style>
<script src="jq.js"></script>
<script>
$(document).ready(function(){
	$("#d").hide(0);
	$("#e").hide(0);
	$("#f").hide(0);
$("#x").click(function(){
$("#x").animate({left:'300px'},400).animate({top:'150px'},400).animate({left:'950px'},400,function(){$("#d").show(2800);});
});
$("#y").click(function(){
$("#d").hide(2000,function(){
$("#x").animate({left:'300px'},400).animate({top:'400px'},400).animate({left:'0px'},400,function(){
$("#y").animate({left:'300px'},400).animate({top:'150px'},400).animate({left:'950px'},400,function(){
$("#e").show(2800);});});});
});
$("#z").click(function(){
$("#e").hide(2000,function(){
$("#y").animate({left:'300px'},400).animate({top:'460px'},400).animate({left:'0px'},400,function(){
$("#z").animate({left:'300px'},400).animate({top:'150px'},400).animate({left:'950px'},400,function(){
$("#f").show(2800);});});});
});});
</script>
<div id="x"><p>HOME</p></div>
<div id="y"><p>ABOUT</p></div>
<div id="z"><p>CONTACT</p></div>
<div id="d"><p id="pa">WELCOME TO HOME PAGE</p></div>
<div id="e"><p id="pa">WELCOME TO ABOUT PAGE</p></div>
<div id="f"><p id="pa">WELCOME TO CONTACT PAGE</p></div>

