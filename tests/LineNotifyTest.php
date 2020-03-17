<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/LineNotify.php';

/**
 * @property KS\Line\LineNotify LineNotify
 */
class LineNotifyTest extends PHPUnit_Framework_TestCase {

  private $LineNotify;
  private $token = 'this_is_a_token';

  public function __construct() {
    $this->LineNotify = new KS\Line\LineNotify($this->token);
  }

  public function testGetToken() {
    $result = $this->LineNotify->getToken();
    $this->assertEquals($this->token, $result);
  }

  public function testSetToken() {
    $token = 'new_token';
    $this->LineNotify->setToken($token);
    $result = $this->LineNotify->getToken();
    $this->assertEquals($token, $result);
  }

  public function testUrlApi() {
    $expected = 'https://notify-api.line.me/api/notify';
    $this->assertEquals($expected, KS\Line\LineNotify::API_URL);
  }

$token = 'bZ9OmQXNC3X5e3hsKLh7Ks5D3CUfGt43T0o6DA8oGqn';
$ln = new KS\Line\LineNotify($token);

$text = 'Hello Line Notify';
$ln->send($text);
  
}
