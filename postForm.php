<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
		<title>POST送信するフォーム</title>
	</head>
	<body>
	<form action="usePostData.php"method="post">
	ニックネーム:<input type="text"name="nickName"><br>
	どっち派？:インドア派<input type="text"name="door"value="インドア">
				アウトドア派<input type="radio"name="door"value="アウトドア"><br>
		<input type="submit"value="送信">
		</form>
	</body>
</html>
