<?php
    // 問題1 外部ファイル「myarea.php」を取り込んでください。
    require_once("myarea.php");
    // 問題2 MyArea クラスのメンバ関数 getArea を利用し
    //       縦 10 センチ、横 5 センチの平行四辺形の面積を求めてください。
    $ga = new MyArea();
    $area = $ga->getArea(10,5);
    // 計算結果を出力
    echo ("面積は" . $area . "平方センチメートル");
?>