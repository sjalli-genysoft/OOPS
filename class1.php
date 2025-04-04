<?php
class Fruit {
    public $name;
    public $color;

    public function set_name($name) {
        $this->name = $name;
    }

    public function set_color($color) {
        $this->color = $color;
    }

    public function get_info() {
        return "This is a $this->color $this->name.";
    }
}

$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");

$grapes = new Fruit();
$grapes->set_name("grapes");
$grapes->set_color("green");

echo $apple->get_info();   // Outputs: This is a Red Apple.
echo "<br>";
echo $grapes->get_info();  // Outputs: This is a green grapes.

?>