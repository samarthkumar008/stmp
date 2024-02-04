<?php
/**
 * Created By: _Kshatriya_16
 * Date: 04/02/2024
 * Uses:
*/

namespace stMp\abst;

abstract class ab{
  
  /**
   * Get the length of the string
  */
  public static function getlength($str){
    $val = strlen($str);
    return $val;
  }
  
  /**
   * Trim Abstract Function
  */
  public static function totrim(string $str):string{
    $str = trim($str);
    return $str;
  }
  
  /**
   * String Lower Abstract Function
  */
  public static function tolower(string $str):string{
    $str = strtolower($str);
    return $str;
  }
  
  /**
   * String Upper Abstract Function
  */
  public static function toupper(string $str):string{
    $str = strtoupper($str);
    return $str;
  }

}

/**
 * END;
*/
?>