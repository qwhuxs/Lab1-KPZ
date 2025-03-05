<?php
include 'header.php';
?>

<div class="container">
    <h2>Працівники</h2>
    <?php
    class Employee {
        public $name;
        public $position;
        public $experience;
        public $photo;

        public function __construct($name, $position, $experience, $photo) {
            $this->name = $name;
            $this->position = $position;
            $this->experience = $experience;
            $this->photo = $photo;
        }

        public function getInfo() {
            return "<div class='card'>
                        <img src='images/{$this->photo}' alt='{$this->name}'>
                        <h2>{$this->name}</h2>
                        <p>Посада: {$this->position}</p>
                        <p>Досвід: {$this->experience} років</p>
                    </div>";
        }
    }

    $employees = [
        new Employee("Олександр Іваненко", "Доглядач", 12, "працівник1.jpg"),
        new Employee("Марія Коваленко", "Ветеринар", 9, "працівник2.jpg"),
        new Employee("Дмитро Петренко", "Зоолог", 7, "працівник3.jpg"),
        new Employee("Світлана Левченко", "Доглядач", 5, "працівник4.jpg"),
    ];

    foreach ($employees as $employee) {
        echo $employee->getInfo();
    }
    ?>
</div>

<?php
include 'footer.php';
?>
