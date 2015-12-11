<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>

<div id="container">

	
    <form action="">
        <input id="hid" name="hid" type="text" value="">
        <button id="sub" name="sub" type="submit">提交</button>
    </form>	
    <p>111111</p>
	<p>111111</p>
	<p>111111</p>
	<p>111111</p>
	<p>111111</p>
	<p>111111</p>
	<p>111111</p>
	<p>111111</p>
	<p>111111</p>
</div>
<script type="text/javascript" src="/jquery.min.js"></script>
<script>
$(function(){
	$("#hid").change(function(){
	    if (isNaN($("#hid").val())) {
	        alert('错误');
	        //$("#hid").focus();
	        document.getElementById("hid").focus();   
		}
	});

	$("#sub").click(function(){
		if (isNaN($("#hid").val())) {
	        alert('错误');
	        $("#hid").focus();
	        return false;
		}
	})
})
</script>
</body>
</html>