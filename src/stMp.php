<?php
/**
 * Created By: _Kshatriya_16
 * Date: 04/02/2024
 * Uses:
*/

namespace stMp;

class stMp extends \standard\standard{
  
  /**
   * Check is a string is empty
   * @param (string)
   * @return (bool)
  */
  public static function _isEmpty($str){
    $str = self::isEmpty($str);
    return $str;
  }
  
  /**
   * Get the length of the string.
   * @param (string)
   * @return (int)
  */
  public static function _getStrLen($str){
    $str = self::getStrLen($str);
    return $str;
  }
  
  /**
   * Warpper of trim
   * @param (string)
   * @return (string)
  */
  public static function _trim($str){
    $str = self::trim($str);
    return $str;
  }
  
  /**
   * Warpper of trim
   * @param (string)
   * @return (string)
  */
  public static function _ltrim($str){
    $str = self::ltrim($str);
    return $str;
  }
  
  /**
   * Warpper of trim
   * @param (string)
   * @return (string)
  */
  public static function _rtrim($str){
    $str = self::rtrim($str);
    return $str;
  }
  
  /**
   * String to Lower
   * @param (string)
   * @return (string)
  */
  public static function _lower($str){
    $str = self::lower($str);
    return $str;
  }
  
  /**
   * String to Upper
   * @param
   * @return
  */
  public static function _upper($str){
    $str = self::upper($str);
    return $str;
  }
  
  /**
   * Removes single and double quotes from a string
   * @param
   * @return
  */
  public static function _stripQuotes($str){
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
  public static function _upperCamelCase(string $str){
    return str_replace(' ', '', ucwords(str_replace('_', ' ', $str)));
  }
  
  /**
   * Convet string to a slug formet.
   * @param (string)
   * @return 
  */
  public static function _slug(string $val): string{
    return strtolower(self::_replace($val, '-'));
  }
  
  /**
   * Convet string to a snake formet.
   * @param (string)
   * @return 
  */
  public static function _snakeCase(string $str){
    return self::_replace($str, '_');
  }
  
  /**
   * create a dot notation string.
   * @param (string)
   * @return (string)
  */
  public static function _dotNotation(string $str){
    return self::_replace($str, '.');
  }
  
  /**
   * Check word is palindrome or not.
   * @param (string)
   * @return (bool)
  */
  public static function _isPalindrome(string $str): string{
    $str = self::isPalindrome($str);
    return $str;
  }
  
  /**
   * Count Number of Words is a string
   * @param (string)
   * @return (int)
  */
  public static function _wordCount(string $str){
    $str = self::wordCount($ste);
    return $str;
  }
  
  /**
   * Removing HTML Tags is string
   * @param (string)
   * @return (string)
  */
  public static function _htmlRemoveTags(string $str){
    $str = self::htmlRemoveTags($str);
    return $str;
  }
  
  /**
   * Removing Slashes
   * @param (string)
   * @return (string)
  */
  public static function _slashesRemove(string $str): string{
    $str = self::slashesRemove($str);
    return $str;
  }
  
  /**
   * Convert an arrray to a string
   * @param (string)
   * @return (string)
  */
  public static function _arrayToString(array $arr): string{
    $str = self::arrayToString($arr);
    return $str;
  }
  
  /**
   * Convert string to a character array.
   * @param (string)
   * @return (string)
  */
  public static function _reverseString(string $str){
    $str = self::reverseString($str);
    return $str;
  }
  
  /**
   * Creates a random string of characters.
   * @param (string)
   * @return (string)
  */
  public static function _randomString(int $len){
    $str = self::randomString($len);
    return $str;
  }
  
  /**
   * Convert the first character to uppercase
   * @param (string)
   * @return (string)
  */
  public static function _ucFirst(string $str){
    $str = self::ucFirst($str);
    return $str;
  }
  
  /**
   * Capitalize last letter of a string.
   * @param (string)
   * @return string
  */
  public static function _ucLast(string $str){
    $str = self::ucLast($str);
    return $str;
  }

  /**
   * Check String is Anagram.
   * @param (string)
   * @return (bool)
  */
  public static function _isAnagram(string $originalString, string $testingSteing){
    $str = self::isAnagram($originalString,$testingSteing);
    return $str;
  }
  
  /**
   * Count Sentences.
   * @param (string)
   * @return (int)
  */
  public static function _countSentence(string $str){
    $str = self::countSentence($str);
    return $str;
  }
  
  /**
   * Remove Duplicate Charsacters in string.
   * @param (string)
   * @return (int)
  */
  public static function _removeDuplicateChars(string $str){
    $str = self::removeDuplicateChars($str);
    return $str;
  }

  /**
   * Remove Comment.
   * @param (string)
   * @return (int)
  */
  public static function _removeComment(string $str){
    $str = self::removeComment($str);
    return $str;
  }
  
  /**
   * Remove 0-9 Numeric Degits.
   * @param (string)
   * @return (string)
  */
  public static function _stripDigit(string $str){
    $str = self::stripDigit($str);
    return $str;
  }
}

/**
 * END;
*/
?>