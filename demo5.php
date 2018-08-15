<?php
function  my_candir($dir){
    $files=array();
    if($handle=opendir($dir)){
        while(($file=readdir($handle))){

            if($file!='..'&&$file!='.'){
                if(is_dir($dir.'/'.$file)){
                    $files[$file]=my_candir($dir.'/'.$file);

                }else{
                    $files[]=$file;

                }
            }
        }
        closedir($handle);
        return $files;
    }
}
echo '<pre>';
print_r(my_candir("H:\wed"));