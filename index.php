<?php

$students = array(
    array("имя" => "Иван", "фамилия" => "Иванов", "предметы" => array("Математика", "Физика", "Химия")),
    array("имя" => "Петр", "фамилия" => "Петров", "предметы" => array("История", "Литература")),
    array("имя" => "Мария", "фамилия" => "Сидорова", "предметы" => array("Биология", "География", "Физкультура", "Информатика")),
    array("имя" => "Елена", "фамилия" => "Козлова", "предметы" => array("Английский язык", "Итальянский язык", "Изобразительное искусство"))
);


$max_subjects = 0;
$max_student = null;

foreach ($students as $student) {
    $num_subjects = count($student["предметы"]);
    if ($num_subjects > $max_subjects) {
        $max_subjects = $num_subjects;
        $max_student = $student;
    }
}

if ($max_student !== null) {
    echo "Студент с наибольшим числом предметов:\n";
    echo "Имя: " . $max_student["имя"] . "\n";
    echo "Фамилия: " . $max_student["фамилия"] . "\n";
    echo "Предметы:\n";
    foreach ($max_student["предметы"] as $subject) {
        echo "- " . $subject . "\n";
    }
} else {
    echo "Студенты не найдены.";
}

?>