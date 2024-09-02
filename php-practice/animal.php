<?php
    // クラスの宣言
    class Animal {
        public $cry = "bowbow!";

        function bow() {
            echo "bowbow!" . PHP_EOL;
        }
    }

    // インスタンスの生成
    $animal_1 = new Animal();
    // インスタンスの使用
    $animal_1->bow();
?>
<?php
    // クラスの宣言
    class Animal {
        public $cry = "bowbow!";

        function bow(){
            echo $this->cry . PHP_EOL;
        }
    }
    
    // インスタンスの生成
    $animal_1 = new Animal();
    // インスタンスの使用
    $animal_1->bow();
?>
<?php
    class Animal {
        public $cry = "bowbow!";

        function bow() {
            echo $this->cry . PHP_EOL;
        }
    }

    class Dog extends Animal {
        public $cry = "わんわん！";
    }

    $animal_1 = new Dog();
    $animal_1->bow();
?>