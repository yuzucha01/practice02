<?php
// ブラウザを更新(リロード)して表示されるかのチェック
// echo "ブラウザに表示させる<br>";

// echo "<p>"."5+7"."<p>";
// echo "<br>";
// echo 5+7;

// echo "<br>";
//変数を作る
// $name = "変数を作る";
// echo $name;
// echo "<br>";

//変数の練習
//変数の名前は誰が見てもわかりやすいようにするのが重要(デーダブルコートという本がおすすめ)
// $name = 45;
// $mix = $name*$name;
// echo $mix;

// $apple = "りんご";
// $num = 10+10;
// echo $apple;
// echo "<br>";
// echo $num;
// echo "<br>";

// $a = 1;
// $b = 2;
// if($a == 1){
//     echo "1が表示されました"."<br>";
// }

// if($b == 2){
//     echo "2が表示されました";
//     echo "<br>";
// }

//画像はシングルコート！！！！！

// ランダム関数(jsの時はMath関数)
// echo "あなたは何番？".mt_rand(1,5);
// echo "<br>";


$num = mt_rand(1,10);
if($num == 1){
    echo "ナウシカ!"."<br>";
    echo "<img src='img/nausicaa007.jpg' width='400px' />";
}else if($num == 2){
    echo "ナウシカ!!"."<br>";
    echo "<img src='img/nausicaa015.jpg' width='400px' />";
}else if($num == 3){
    echo "ナウシカ!!!"."<br>";
    echo "<img src='img/nausicaa027.jpg' width='400px' />";
}else if($num == 4){
    echo "ナウシカ!!!!"."<br>";
    echo "<img src='img/nausicaa042.jpg' width='400px' />";
}else if($num == 5){
    echo "ナウシカ!!!!!"."<br>";
    echo "<img src='img/nausicaa050.jpg' width='400px' />";
}else{
    echo "ハズレ";
}

?>