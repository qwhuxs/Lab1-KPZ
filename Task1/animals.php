<?php
include 'header.php';
?>

<div class="container">
    <h2>Список тварин</h2>
    <?php
    class Animal {
        public $name;
        public $species;
        public $age;
        public $diet;
        public $photo;

        public function __construct($name, $species, $age, $diet, $photo) {
            $this->name = $name;
            $this->species = $species;
            $this->age = $age;
            $this->diet = $diet;
            $this->photo = $photo;
        }

        public function getInfo() {
            return "<div class='card'>
                        <img src='images/{$this->photo}' alt='{$this->name}'>
                        <h2>{$this->name}</h2>
                        <p>Вид: {$this->species}</p>
                        <p>Вік: {$this->age} років</p>
                        <p>Харчування: {$this->diet}</p>
                    </div>";
        }
    }

    $animals = [
        new Animal("Лео", "Лев", 7, "М'ясо", "lion.jpg"),
        new Animal("Марті", "Зебра", 5, "Трава, сіно", "zebra.jpg"),
        new Animal("Глорія", "Бегемот", 10, "Фрукти, овочі", "hippo.jpg"),
        new Animal("Алекс", "Тигр", 6, "М'ясо", "tiger.jpg"),
        new Animal("Джордж", "Жираф", 8, "Листя, трава", "giraffe.jpg"),
        new Animal("Коко", "Горила", 12, "Фрукти, горіхи", "gorilla.jpg"),
    ];

    foreach ($animals as $animal) {
        echo $animal->getInfo();
    }
    ?>
</div>

<?php
include 'footer.php';
?>
