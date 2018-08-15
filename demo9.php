<?php
  function getTree($arr,$pid,$lv=0){
      static $terr =[];
 foreach ($arr as $v){
     if($v['c_pid'] = $pid){
        $v['lv'] = $lv;
        $terr = $v;
       $this-> getTree($arr,$v['c_id'],$v+1);
         }
      }
      return $terr;
  }