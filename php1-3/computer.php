<?php
    /*************************
    / Computerクラス
    /*************************/
    class Computer {

        private $m_Name = "";
        private $m_Frequency = "";
        private $m_Memory = "";
        
        // 引数を持つコンストラクタ
        function Computer( $tName, $tFrequency, $tMemory ){
            // 引数をインスタンス変数に格納
            $this->m_Name = $tName;
            $this->m_Frequency = $tFrequency;
            $this->m_Memory = $tMemory;
        }
    
        // 名前を取得するメンバ関数
        public function getName(){
            return $this->m_Name;
        }
        
        // CPU 周波数を取得するメンバ関数
        public function getFrequency(){
            return $this->m_Frequency;
        }
        
        // メモリーを取得するメンバ関数
        public function getMemory(){
            return $this->m_Memory;
        }
    }
?>