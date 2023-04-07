<?php
    require_once("hat.php");

    interface Accessories extends Hat {
        public function setKind($t_kind);
        public function setStone($t_stone);
    }
?>