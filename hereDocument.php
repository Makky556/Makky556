<?php
    //名前の変数
    $name="神田ハナコ";

    //身長の変数
    $height=154.6;

    //年齢の変数
    $age1=26;
    $age2=27;

    //ヒアドキュメントを利用して出力メッセージ作成
    $output=<<<EOF
    {$name}さんの身長は{$height}cmです。<br>
        年齢は{$age1}歳です。<br>
        後1ヶ月で{$age2}になります。\n
EOF;

?>
<html>
<head>
	<meta http-equiv="Content-type"content="text/html;charset=UTF-8">
</head>
<body>
<?php
    echo$output;
?>
</body>
</html>