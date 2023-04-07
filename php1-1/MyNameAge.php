<?php
    // *************************************
    // このクラスはそのまま作成してください
    // *************************************
    class MyNameAge{
    
        var $myName = "";  // メンバ変数：名前
        var $myAge = "";   // メンバ変数：年齢

        // *************************************
        // コンストラクタ
        // 引数1：名前、引数2：年齢
        // *************************************
        // MyNameAgeの代わりに、__constructとしても構いません。
        function MyNameAge( $tmpName, $tmpAge ) {
            $this->myName = $tmpName;
            $this->myAge = $tmpAge;
        }

        // *************************************
        // 名前を取得します
        // *************************************
        function getName() {
            return $this->myName;
        }

        // *************************************
        // 年齢を取得します
        // *************************************
        function getAge() {
            return $this->myAge;
        }
    }
?>