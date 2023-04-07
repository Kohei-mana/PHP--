<?php
    require_once("accessories.php");

    class Woman implements Accessories{
        private $m_color ="黒";
        private $m_shape = "キャップ";
        private $m_kind = "指輪";
        private $m_stone = "ダイヤ";

        public function setColor($t_color){
            $this->m_color = $t_color;
        };
        public function setShape($t_shape){
            $this->m_shape = $t_shape;
        };
        public function setKind($t_kind){
            $this->m_kind = $t_kind;
        };
        public function setColor($t_stone){
            $this->m_stone = $t_stone;
        };
        public function getCharacter(){
            $chara = array($this->m_color,$this->m_shape, $this->m_stone, $this->m_kind)
            return $chara;
        }
    }
?>