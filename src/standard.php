<?php
/**
 * Created By: _Kshatriya_16
 * Date: 04/02/2024
 * Uses:
 * Last Modefied:
*/

namespace standard;

abstract class standard{
  
  /**
   * Check is a string is empty (abstract)
   * @param (string)
   * @return (bool)
  */
  public static function isEmpty(string $str): bool{
    return $str === '';
  }
  
  /**
   * Get the length of the string. (abstract)
   * @param (string)
   * @return (int)
  */
  public static function getStrLen(string $str): int{
    $str = strlen($str);
    return $str;
  }
  
  /**
   * Warpper of trim (abstract)
   * @param (string)
   * @return (string)
  */
  public static function trim(string $str): string{
    if(empty($str)){
      die('Please dont pass null value');
    }else{
      $str = trim($str);
      return $str;
    }
  }
  
  /**
   * Warpper of ltrim (abstract)
   * @param (string)
   * @return (string)
  */
  public static function ltrim($str){
    $str = ltrim($str);
    return $str;
  }
  
  /**
   * Warpper of rtrim (abstract)
   * @param (string)
   * @return (string)
  */
  public static function rtrim($str){
    $str = rtrim($str);
    return $str;
  }
  
  /**
   * String to Lower (abstract)
   * @param (string)
   * @return (string)
  */
  public static function lower(string $str): string{
    $str = strtolower($str);
    return $str;
  }
  
  /**
   * String to Upper (abstract)
   * @param
   * @return
  */
  public static function upper(string $str): string{
    $str = strtoupper($str);
    return $str;
  }
  
  /**
   * Check word is palindrome or not. (abstract)
   * @param (string)
   * @return (bool)
  */
  public static function isPalindrome(string $str, bool $caseInsensitive = true): string{
    $str = trim($str);
    if(empty($str)){
      die("Please don't pass null string value.");
    }
    if($caseInsensitive){
      $str = strtolower($str);
    }
    if($str !== strrev($str)){
      return 1;
    }
    return 0;
  }
  
  /**
   * Count Number of Words is a string (abstract)
   * @param (string)
   * @return (int)
  */
  public static function wordCount(string $str): int{
    $str = str_word_count($str);
    return $str;
  }
  
  /**
   * Removing HTML Tags is string (abstract)
   * @param (string)
   * @return (string)
  */
  public static function htmlRemoveTags(string $str): string{
    $str = strip_tags($str);
    return $str;
  }
  
  /**
   * Removing Slashes (abstract)
   * @param (string)
   * @return (string)
  */
  public static function removeSlashes(string $str): string{
    $str = stripslashes($str);
    return $str;
  }
  
  /**
   * Removing double Slashes
   * @param (string)
   * @return (string)
  */
  public static function removeDoubleSlashes(string $str): string{
    $str = preg_replace('#(^|[^:])//+#', '\\1/', $str);
    return $str;
  }

  /**
   * Reduce Multiples
   * @param (string)
   * @return (string)
  */
  public static function reduceMultiples(string $str, $char = ',', $trim = false){
    $str = preg_replace('#'.preg_quote($char, '#').'{2,}#', $char, $str);
    return ($trim === TRUE) ? trim($str, $char) : $str;
  }
  
  /**
   * Convert an arrray to a string (abstract)
   * @param (string)
   * @return (string)
  */
  public static function arrayToString(array $arr): string{
    $str = implode(" ",$arr);
    return $str;
  }
  
  /**
   * Convert string to a character array. (abstract)
   * @param (string)
   * @return (string)
  */
  public static function reverseString(string $str){
    $str = trim($str);
    $chars = str_split($str);
    $revChars = [];
    for($i = (count($chars)- 1); $i >= 0; $i--){
      $revChars[] = $chars[$i];
    }
    return implode('',$revChars);
  }
  
  /**
   * Creates a random string of characters. (abstract)
   * @param (string)
   * @return (string)
  */
  public static function randomString(int $len){
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $len; $i++) {
      $index = rand(0, strlen($chars) - 1);
       $randomString .= $chars[$index];
    }
    return $randomString;
  }
  
  /**
   * Convert the first character to uppercase (abstract)
   * @param (string)
   * @return (string)
  */
  public static function ucFirst(string $str): string{
    $str = ucfirst($str);
    return $str;
  }
  
  /**
   * Capitalize last letter of a string.
   * @param (string)
   * @return string
  */
  public static function ucLast(string $str){
    $str = strrev(ucfirst(strrev($str)));
    return $str;
  }
  
  /**
   * Check String is Anagram. (abstract)
   * @param (string)
   * @return (bool)
  */
  public static function isAnagram(string $originalString, string $testingSteing){
    $originalString = strtolower($originalString);
    $testingSteing = strtolower($testingSteing);
    return count_chars($originalString, 1) === count_chars($testingSteing, 1);
  }
  
  /**
   * Count Sentences. (abstract)
   * @param (string)
   * @return (int)
  */
  public static function countSentence(string $str): int{
    $str = trim($str);
    return preg_match_all('/[^\s|^\...](\.|\!|\?)(?!\w)/',$str);
  }
  
  /**
   * Remove Duplicate Charsacters in string. (abstract)
   * @param (string)
   * @return (int)
  */
  public static function removeDuplicateChars(string $str){
    $formatted = implode('', str_split($str));
    $a = explode(" ",$formatted); 
    $j = strtolower($a[0]); 
    $k="";
    for($i=1;$i<=count($a);$i++){ 
    	if(strtolower($j)!=strtolower($a[$i])){
    		$k .= $j." ";
    	} 
    		$j = $a[$i]; 
    }
    return $k;
  }
  
  /**
   * Remove Comment. (abstract)
   * @param (string)
   * @return (int)
  */
  public static function l(string $str){
    $str = preg_replace('/(?=<!--)([\s\S]*?)-->/', '', $str);
    return $str;
  }
  
  /**
   * Remove 0-9 Numeric Degits. (abstract)
   * @param (string)
   * @return (int)
  */
  public static function removeComment(string $str){
    $str = preg_replace('/(?=<!--)([\s\S]*?)-->/', '', $str);
    return $str;
  }
  
  /**
   * Remove 0-9 Numeric Degits. (abstract)
   * @param (string)
   * @return (string)
  */
  public static function stripDigit(string $str){
    $str = preg_replace('/[0-9]/', '', $str);
    return $str;
  }
}

/**
 * END;
*/
?>