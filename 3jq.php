<html>
<body>
NUM1:<input type="text" id="t1">
NUM2:<input type="text" id="t2">
<input type="button" value="ok" id="b1">
<script src="jq.js"></script>
<script>
$(document).ready(function(){
$('#b1').click(function(){
var x=$('#t1').val();
var y=$('#t2').val();
var z=parseInt(x)+parseInt(y);
alert(z);});
});
</script>