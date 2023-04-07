<?php
    require_once( "woman.php" );

    $obj = new Woman();
    $obj->setColor( "赤" );
    $obj->setShape( "ベレー帽" );
    $obj->setStone( "ルビー" );

    $ret = $obj->getCharacter();

    echo "彼女は、" . "$ret[0]" . "の" . "$ret[1]" . "をかぶっています<br>";
    echo "彼女は、" . "$ret[2]" . "の" . "$ret[3]" . "を付けています";
?>