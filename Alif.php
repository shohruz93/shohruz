<?php

class Alif
{
    public function amaliyat($file, $amal)
    {
        $fileName = $file . ".txt";
        $myfile = fopen($fileName, "r") or die("Файл ёфт нашуд!");
        while(!feof($myfile)) {
            $line = str_replace(" ",$amal,fgets($myfile));
            $javob = eval("return $line;");
            if ($javob > 0){
                $musbat = fopen("musbat.txt","a+");
                fwrite($musbat,$javob."\n");
            }else{
                $manfi = fopen("manfi.txt","a+");
                fwrite($manfi,$javob."\n");
            }
        }
        echo "All success!";
        fclose($myfile);
    }
}