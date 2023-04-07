<?php
    require_once("computer.php");
    class PersonalComputer extends Computer{
        private $m_OS = "ウィンドウズ";
        function__construct($tName, $tFrequency, $tMemory) {
            parent::Computer($tName, $tFrequency, $tMemory);
        }
        function getOS() {
            return $this->m_OS;
        }
        function setOS() {
            $this->m_OS = $myOS;
        }
    }
?>