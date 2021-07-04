<?php
include 'functions.php';

$db = new PDO('sqlite:students.db');
/* 2-3 Sentences About The createNewStudentDBFile() Function Definition */
createNewStudentDBFile();

/* 2-3 Sentences About The createStudentsTable() Function Definition */
createStudentsTable($db);
/* 2-3 Sentences About The insertNewStudentData() Function Definition */
insertNewStudentData($db);

/* 2-3 Sentences About The printMostRecent() Function Definition */
printMostRecent($db);
/* 2-3 Sentences About The printAllData() Function Definition */
printAllData($db);







 