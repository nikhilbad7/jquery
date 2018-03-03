<html>
<head>
<style>
#x{
width:1000px;
height:1000px;
background-color:white;
background-image:url(n.jpg);
background-repeat:no-repeat;}
.y{
width:200px;
height:300px;
background-color:green;}
</style>
<script src="jq.js"></script>
<script>
$(document).ready(function(){
	$('#x').hide(1000).show(2000).slideUp(1000).slideDown(1000).fadeIn(1000).fadeOut(1000);
});
</script>
</head>
<body>
<p id="x"></p>
<p class="y"></p>
<h1 class="y"></h1>
</body>
</html>