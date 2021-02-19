<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 55</title>
</head>

<body>
    <?php
        class Animal {
            protected $legs = 4;
            final public function info() {
                echo "У меня {$this->legs} лапы.";
            }
            //abstract public function color();
        }
        
        class Dog extends Animal {
            public function color() {
                echo 'red';
            }
            public $name = "Собака";
            // public function info() {
            //     echo "Я {$this->name}, У меня {$this->legs} лапы.";
            // }
            public function voice() {
                echo "{$this->name} издает звук гав-гав.";
            }
            public function parentInfo() {
                parent::info();
            }
        }

        class Cat extends Animal {
            public function color() {
                echo 'black';
            }
            public $name = "Кошка";
            public function voice() {
                echo "{$this->name} издает звук мяу.";
            }
        }

        $dog = new Dog();
        $cat = new Cat();
        if($cat instanceof Animal) {
            echo 'cat является экземпляром класса Animal';
        }
        if($cat instanceof Dog) {
            echo 'cat является экземпляром класса Dog';
        }
        if($cat instanceof Cat) {
            echo 'cat является экземпляром класса Cat';
        }

        // $dog->info();
        // $dog->voice();
        //$dog->parentInfo();
    ?>
</body>

</html>