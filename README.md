PHP Reflection
==============

How to use:

```php
$reflector = new Ovr\PHPReflection\Reflector(
    new Ovr\PHPReflection\Manually\PHP56\Core()
);

var_dump($reflector->getFunction('floatval'));
class Ovr\PHPReflection\FunctionReflection#6 (4) {
  public $name =>
  string(8) "floatval"
  public $parameters =>
  array(1) {
    [0] =>
    array(2) {
      'type' =>
      string(5) "mixed"
      'required' =>
      bool(true)
    }
  }
  public $returnType =>
  string(6) "double"
  public $returnPossibleValue =>
  string(6) "double"
}

var_dump($reflector->getFunction('gettype'));
class Ovr\PHPReflection\FunctionReflection#6 (4) {
  public $name =>
  string(7) "gettype"
  public $parameters =>
  array(1) {
    [0] =>
    array(2) {
      'type' =>
      string(3) "int"
      'required' =>
      bool(true)
    }
  }
  public $returnType =>
  string(5) "mixed"
  public $returnPossibleValue =>
  array(9) {
    [0] =>
    string(7) "boolean"
    [1] =>
    string(7) "integer"
    [2] =>
    string(6) "double"
    [3] =>
    string(6) "string"
    [4] =>
    string(5) "array"
    [5] =>
    string(6) "object"
    [6] =>
    string(8) "resource"
    [7] =>
    string(4) "NULL"
    [8] =>
    string(12) "unknown type"
  }
}

```
