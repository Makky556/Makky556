<?php
    $profile['name']="神田ハナコ";       //キーnameを指定して配列に名前格納
    $profile['身長']=154.6;                   //キー身長を指定して配列に身長を格納
    $profile['age']=26;                         //キーageを指定して配列に年齢を格納
    $profile['貯金']=500;                     //キー貯金を指して配列に貯金を格納
?>
<html>
	<head>
	<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
	echo"\t{$profile['name']}さんの身長は{$profile['身長']}cmです。<br>\n";
	echo"\t\t年齢は{$profile['age']}歳です。<br>\n";
    echo"\t\t30歳までに貯金\\{$profile['貯金']}万が目標です。\n";
	?>
	</body>
</html>