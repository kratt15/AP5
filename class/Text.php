<?php
class Text{

private static $suffix = "€";
public static function withZero($chiffre){
 if($chiffre < 10)
 {
    return'0'.$chiffre.self::$suffix;
 } else
 {
    return $chiffre.self::$suffix;
 }
}

}
?>