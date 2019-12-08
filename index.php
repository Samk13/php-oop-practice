<?php 

echo <<<EOH

 ______     ______     __    __        ______     ______     ______     __     _____    
/\  ___\   /\  __ \   /\ "-./  \      /\  __ \   /\  == \   /\  == \   /\ \   /\  __-.  
\ \___  \  \ \  __ \  \ \ \-./\ \     \ \  __ \  \ \  __<   \ \  __<   \ \ \  \ \ \/\ \ 
 \/\_____\  \ \_\ \_\  \ \_\ \ \_\     \ \_\ \_\  \ \_\ \_\  \ \_____\  \ \_\  \ \____- 
  \/_____/   \/_/\/_/   \/_/  \/_/      \/_/\/_/   \/_/ /_/   \/_____/   \/_/   \/____/ 
     
  
EOH;

class Weather {
    public static $tempConditions = ['cold','mild','warm'];

    public static function celsiusToFareneit($c){
        $cf= $c * 9 / 5 +32;
        return "$c C converted to F ===> $cf F";
    }
    public static function determineTempCondition($f){
        if ($f < 40 ){
            return " \n\t ====> today the wheather is " . self :: $tempConditions[0] . "❌";

        } elseif($f < 70){
            return self :: $tempConditions[1];
        }else{
            return self :: $tempConditions[2];
        }
    }
}

print_r( Weather :: $tempConditions);

echo Weather :: celsiusToFareneit(20);

echo Weather :: determineTempCondition(10);

?>
