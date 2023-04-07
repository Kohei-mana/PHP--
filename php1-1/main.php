<?php
    // 問題1 外部ファイル「mynameage.php」を取り込んでください。
    require_once("MyNameAge.php");
    // 問題2 MyNameAge クラスを「自分の名前」「自分の年齢」
    // を引数として渡してインスタンス化してください
    $mana = new MyNameAge("マナ", 24);
    // 問題3 メンバ変数 $myName 、 $myAge を利用して名前と年齢を
    // 表示するように修正してください
    echo ( "名前は" .  $mana->myName . "、年齢は" . $mana->myAge . "です。<br>" );

    // 問題4 メンバ関数getName 、 getAge を利用して名前と年齢を
    // 表示するように修正してください
    echo ( "名前は" . $mana->getName() . "、年齢は" . $mana->getAge(). "です。" );
?>