<?php
/**
 * Created By: _Kshatriya_16
 * Date: 04/02/2024
 * Uses:
*/

namespace stMp;

class stMp extends \stMp\abst\ab{
  
  /**
   * Check is a string is empty
   * @param (string)
   * @return (bool)
  */
  public static function _isEmpty(string $str): string{
    return $str === '';
  }
  
  /**
   * Get the length of the string.
   * @param (string)
   * @return (int)
  */
  public static function _getStrLen(string $str):int{
    $val = self::getlength($str);
    return $val;
  }
  
  /**
   * Warpper of trim
   * @param (string)
   * @return (string)
  */
  public static function _trim(string $str): string{
    return self::totrim($str);
  }
  
  /**
   * String to Lower
   * @param (string)
   * @return (string)
  */
  public static function _lower(string $str): string{
    return self::tolower($str);
  }
  
  /**
   * String to Upper
   * @param
   * @return
  */
  public static function _upper(string $str): string{
    return self::toupper($str);
  }
  
  /**
   * Removes single and double quotes from a string
   * @param
   * @return
  */
  public static function _stripQuotes(string $str, bool $trim = false): string{
    return str_replace(['"', "'"], '', $trim ? trim($str) : $str);
  }
  
  /**
   * Replace Character in a string.
   * @param
   * @return
  */
  public static function _replace(string $str, string $value): string{
    $str = strtolower(preg_replace('/([A-Z])/', $value . '$1', lcfirst(self::_upperCamelCase(trim($str)))));
    $str = preg_replace('/[^A-Za-z0-9_]+/', $value, $str);
    $str = preg_replace('/_+/', $value, $str);
    /*if(substr_compare($str, $value)){
      $str = mb_substr($str, 0, -1);
    }*/
    return $str;
  }
  
  /**
   * Convert string to upper camel case formet.
   * @param
   * @return
  */
  public static function _upperCamelCase(string $str): string{
    return str_replace(' ', '', ucwords(str_replace('_', ' ', $str)));
  }
  
  /**
   * Convet string to a slug formet.
   * @param (string)
   * @return 
  */
  public static function _slug(string $val): string{
    return strtolower(self::_replace($value, '-'));
  }
  
  /**
   * Convet string to a snake formet.
   * @param (string)
   * @return 
  */
  public static function _snakeCase(string $str): string{
    return self::_replace($string, '_');
  }
  
  /**
   * create a dot notation string.
   * @param (string)
   * @return (string)
  */
  public static function _dotNotation(string $str){
    return self::_replace($str, '.');
  }
  
}

/**
 * END;
*/
?>