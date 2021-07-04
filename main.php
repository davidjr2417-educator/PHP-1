<?php
include 'functions.php';

$db = new PDO('sqlite:students.db');
/* MADE UPDATES TO createNewStudentDBFile()  */
createNewStudentDBFile();

/*MADE UPDATES TO createStudentsTable()  */
createStudentsTable($db);
/* MADE UPDATES TO insertNewStudentData() */
insertNewStudentData($db);

/* MADE UPDATES TO printMostRecent()  */
printMostRecent($db);
/* MADE UPDATES TO printAllData()  */
printAllData($db);







 