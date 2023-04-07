<?php
    // 外部ファイルを取り込み
    require_once( "personalcomputer.php" );

    // PC内容を出力する関数
    function myPrint( PersonalComputer $tCompu ){
        echo ( "名前 = " . $tCompu->getName() . "<br>" );
        echo ( "OS = " . $tCompu->getOS() . "<br>" );
        echo ( "CPU周波数 = " . $tCompu->getFrequency() . "MHz" . "<br>" );
        echo ( "メモリー = " . $tCompu->getMemory() . "MB" . "<br>" );
        echo ( "---" . "<br>" );
    }
    
    // PersonalComputerをインスタンス化
    $myCompu = new PersonalComputer( "Foo", 1000, 256 );
    myPrint( $myCompu );

    // PersonalComputerをインスタンス化
    $myCompu = new PersonalComputer( "Bar", 1400, 128 );
    // メンバ関数setOSを呼び出し
    $myCompu->setOS( "Linux" );
    myPrint( $myCompu );
?>