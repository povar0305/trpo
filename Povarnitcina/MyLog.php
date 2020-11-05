<?php
namespace Povarnitcina {

    use core\LogAbstract;
    use core\LogInterface;

    Class MyLog extends LogAbstract implements LogInterface{

        public function _write()
        {
            foreach($this->log as $s){
                echo $s."\n";
            }
        }

        public static function log($str)
        {
            MyLog::Instance()->_log($str);
        }

        public static function write()
        {
            MyLog::Instance()->_write();
        }
        public function _log($str)
        {
           $this->log[]=$str;
        }

    }
}
?>