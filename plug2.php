<html>
<body>
NUM1:<input type="text" id="t1"><br>
<input type="button" value="ok" id="b1">
<p id="m"></p>
<script src="jq.js"></script>
<script>
$(document).ready(function(){
$("#b1").click(function(){
var x=$("#t1").val();
if(x%2==0){
$("#m").html("even");
$("#m").css({"background-color":"green","color":"blue"});
}
else{
$("#m").html("odd");
$("#m").css({"background-color":"red","color":"black"});
}
});
});
</script>
</body>
</html>