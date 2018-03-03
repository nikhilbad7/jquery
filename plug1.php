<html>
<body>
AGE:<input type="text" id="t1"><br><br>
NAME:<input type="text" id="t2"><br><br>
EMAIL:<input type="text" id="t3"><br><br>
<input type="button" id="b1" value="ok">
<script src="jq.js"></script>
<script src="messages.js"></script>
<link href="messages.css" rel="stylesheet">
<script>
$(document).ready(function(){
	var re=/\S+@\S+\.\S+/;
var ra=/^[a-zA-Z ]*$/;
$("#b1").click(function(){
var age=$("#t1").val();
var name=$("#t2").val();
var email=$("#t3").val();
if(isNaN(age)){
inlineMsg('t1','age must be numeric',5);}
if(!ra.test(name)){
inlineMsg('t2','please enter a valid name',2);}
if(!re.test(email)){
	inlineMsg('t3','please enter a valid email',2);
}
});
});
</script>
</body>
</html>