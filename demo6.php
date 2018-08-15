<?php
function listDirFiles($DriPath){
    if($dir = opendir($DriPath)){
        while (($file = readdir($dir))!== false){
            if(!is_dir($DriPath.$file)){
                echo "filename:$file<br/>";
            }
        }
    }
}
listDirFiles('D:\news');