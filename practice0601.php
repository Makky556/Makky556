<?php
    //array関数を使って日本人の名字ベスト５の配列を作成
    $nameData=array('佐藤','鈴木','高橋','田中','渡辺');
    $index=0;
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
	   echo"日本人の名字ベスト１位は{$nameData[$index]}です。\n";
	?>
	</body>
</html>