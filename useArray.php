<?php
    $profile[0]="神田ハナコ";    //名前をキー０に指定して配列に格納
    $profile[1]=154.6;              //身長をキー１に指定して配列に格納
    $profile[]=26;                  //年齢をキーに指定なしで配列に格納
    $profile[]=500;             //年齢をキーに指定なしで配列に格納
?>
<html>
	<head>
	<meta http-equiv="ContentType"content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
	echo"\t{$profile[0]}さんの身長は{$profile[1]}cmです。<br>\n";
	echo"\t\t年齢は{$profile[2]}歳です。<br>\n";
	echo"\t\t30歳までに貯金\\{$profile[3]}万が目標です。\n";
	?>
	</body>
</html>