<?php
include 'header.php';
?>

<div class="container">
    <h2>Вольєри</h2>
    <?php
    class Enclosure {
        public $name;
        public $size;
        public $type;
        public $photo;

        public function __construct($name, $size, $type, $photo) {
            $this->name = $name;
            $this->size = $size;
            $this->type = $type;
            $this->photo = $photo;
        }

        public function getInfo() {
            return "<div class='card'>
                        <img src='images/{$this->photo}' alt='{$this->name}'>
                        <h2>{$this->name}</h2>
                        <p>Розмір: {$this->size} м²</p>
                        <p>Тип: {$this->type}</p>
                    </div>";
        }
    }

    $enclosures = [
        new Enclosure("Саванна", 500, "Відкритий простір", "вальер1.jpg"),
        new Enclosure("Джунглі", 300, "Тропічний ліс", "вальер2.jpg"),
        new Enclosure("Скелясті гори", 400, "Гірський ландшафт", "вальер3.jpg"),
    ];

    foreach ($enclosures as $enclosure) {
        echo $enclosure->getInfo();
    }
    ?>
</div>

<?php
include 'footer.php';
?>
