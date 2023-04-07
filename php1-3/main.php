<?php
    // 外部ファイルを取り込み
    require_once( "personalcomputer.php" );

    // PC内容を出力する関数
    function myPrint( PersonalComputer $tComputer ){
        echo ( "名前 = " . $tComputer->getName() . "<br>" );
        echo ( "OS = " . $tComputer->getOS() . "<br>" );
        echo ( "CPU周波数 = " . $tComputer->getFrequency() . "MHz" . "<br>" );
        echo ( "メモリー = " . $tComputer->getMemory() . "MB" . "<br>" );
        echo ( "---" . "<br>" );
    }
    
    // PersonalComputerをインスタンス化
    $myComputer = new PersonalComputer( "Foo", 1000, 256 );
    myPrint( $myComputer );

    // PersonalComputerをインスタンス化
    $myComputer = new PersonalComputer( "Bar", 1400, 128 );
    // メンバ関数setOSを呼び出し
    $myComputer->setOS( "Linux" );
    myPrint( $myComputer );
?>