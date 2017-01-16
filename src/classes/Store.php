<?php

/**
*
*/
class Store
{

  private static
    $_cacheDuration = 3600;

  function __construct() {}

  public static function cacheDuration($cacheDuration = null) {
    if ($cacheDuration != null)
      self::$_cacheDuration = $cacheDuration;
    return self::$_cacheDuration;
  }

  private static function method($key) {
    $methods = array(
      'user-status' => 'session',
      'token' => 'session'
    );

    return isset($methods[$key]) ? $methods[$key] : false;
  }

  public static function get($key) {
    $method = self::method($key);

    switch ($method) {
      case 'session':
        $value = self::getFromSession($key);
        break;

      case 'cache':
        $value = self::getFromCache($key);
        break;

      default:
        break;
    }

    return $value;
  }

  public static function set($key, $value) {
    $method = self::method($key);

    switch ($method) {
      case 'session':
        self::setInSession($key, $value);
        break;

      case 'cache':
        self::setInCache($key, $value);
        break;

      default:
        break;
    }
  }

  private static function getFromSession($key, $value) {
    return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
  }

  private static function setInSession($key, $value) {
    $_SESSION[$key] = $value;
  }

}

?>
