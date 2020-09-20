<?php 
function getPerson($name, $surname) {
  return $name + " " + $surname;
}

echo getPerson("Иван","Петров");
?>