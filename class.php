<?php
class Fruit {
  // Properties
  public $name;
  // public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$mango=new Fruit();

$apple->set_name('Apple');
$banana->set_name('Banana');
$mango->set_name('Mango');
$grapes->set_name('Grapes');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $mango->get_name();
echo "<br>";
echo $grapes->get_name();
?>
