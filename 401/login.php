<html>
<head><script src="/gdpr/gdprscript.js?buildTime=1568397647"></script><title>This area is password protected [401]</title>
	<style type="text/css">
		#login {
			float: none;
			text-align: left;
			width: 410px;
			margin: 0px auto;
			margin-top: 134px;
			background: #171717;
			border: 4px solid #222222;
			font-family: arial;
			color: white;
			padding: 0 0 15px 25px;
			opacity: .85;
			filter: alpha(opacity=85);
		}

		#title {
			font-size: 24px;
			font-weight: bold;
			display: block;
			width: 385px;
			border-bottom: 1px solid #888;
			margin-bottom: 30px;
		}

		#submit-password {
			background: #E9E9E9;
			color: #161616;
			font-size: 18px;
			font-weight: bold;
			padding: 4px;
			margin-left: 5px;
		}

		#p {
		border: 2px solid red;
		font-size: 18px;
		padding: 5px;
		width: 305px;
		}

		.error-message {
			font-size: 14px;
			color: red;
		}

	</style>
	<!--[if IE]>
	<style type="text/css">

	#login {
		padding: 25px 25px 15px 25px;

	}

	#p {
		width: 270px;
		height: 35px;
	}

	#submit-password {
		padding: 0px;
		margin-left: 5px;
		height: 38px;
		position: relative;
		top: 2px;
	}

	</style>
	<! [endif]-->

</head>
<body style='background: #F2F2F2; text-align: center; margin: 0; padding: 0;' onload="document.getElementById('p').focus()">
<div id="login">

	<p id="title">This area is password protected</p>
	<form id="password-form" method="post">
		<p style="font-size: 14px;">Please enter the password below</p>
		<input type="password" name="p" id="p" title="p"/>
		<input type="submit" id="submit-password" value="Login"/>
		<input type="hidden" name="redirect" value="/"/>
		<input type="hidden" name="u" value="weebs"/>
	</form>

</div>
<script>
	window.addEventListener("message", function(evt){
		var message = evt.data;
		if (message.action === "input-password"){
			document.getElementById('p').value = message.password;
			document.getElementById('password-form').submit();
		}
	});
</script>
</body>
</html>