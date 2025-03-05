<?php
include 'header.php';
?>

<div class="container">
    <h2>Корм</h2>
    <?php
    class Food {
        public $type;
        public $quantity;
        public $suitableFor;
        public $photo;

        public function __construct($type, $quantity, $suitableFor, $photo) {
            $this->type = $type;
            $this->quantity = $quantity;
            $this->suitableFor = $suitableFor;
            $this->photo = $photo;
        }

        public function getInfo() {
            return "<div class='card'>
                        <img src='images/{$this->photo}' alt='{$this->type}'>
                        <h2>{$this->type}</h2>
                        <p>Кількість: {$this->quantity} кг</p>
                        <p>Для: {$this->suitableFor}</p>
                    </div>";
        }
    }

    $foods = [
        new Food("М'ясо", 200, "Леви, тигри", "korm1.jpg"),
        new Food("Фрукти", 100, "Мавпи, слони", "korm2.jpg"),
        new Food("Трава", 300, "Зебри, жирафи", "korm3.jpg"),
    ];

    foreach ($foods as $food) {
        echo $food->getInfo();
    }
    ?>
</div>

<?php
include 'footer.php';
?>
