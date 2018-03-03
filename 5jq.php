<html>
<head>
<style>
#x{
width:300px;
height:250px;
top:200px;
left:550px;
position:fixed;
background-color:red;}
#y{
	width:100px;
	height:100px;
	top:100px;
	left:650px;
	position:fixed;
	background-color:green;
	border-radius:360px;
}
</style>
<script src="jq.js"></script>
<script>
$(document).ready(function(){
	var c=0;
$('#y').click(function(){
	c++;
if(c==1){	
$('#x').hide(1000);
}
if(c==2){
$('#x').show(1000);}
if(c==3){
	$('#y').hide(1000);
}
});
});
</script>
<div id="x"></div>
<div id="y"></div>