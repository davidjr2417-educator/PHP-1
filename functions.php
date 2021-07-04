<?php

/******* createNewStudentDBFile Function *******/
function createNewStudentDBFile(){
  
  if( !file_exists("students.db")){
    $fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/students.db","w");
    fclose($fp);
  }

}




/******* createStudentsTable Function *******/
function createStudentsTable($dbVal){
 
  echo "Checking If Table Exists... ";

  $dbVal->exec("CREATE TABLE IF NOT EXISTS Students ( STUDENTID Integer NOT NULL PRIMARY KEY AUTOINCREMENT, FIRSTNAME varchar(255), LASTNAME varchar(255), EMAIL varchar(255), AGE Integer);");

}




/******* insertNewStudentData Function *******/
function insertNewStudentData($dbVal){
  echo "<br>";

  echo"Inserting New Student...";

  $dbVal->exec("INSERT INTO Students (FIRSTNAME, LASTNAME, EMAIL,AGE)  
  VALUES ('{$_GET["firstName"]}','{$_GET["lastName"]}', '{$_GET["email"]}', {$_GET["age"]});  ");

  echo "<br><br>";
}




/******* printMostRecent Function *******/
function printMostRecent($dbVal)
{

	$mostRecentSubmission =  $dbVal->query("SELECT * FROM Students ORDER BY STUDENTID DESC LIMIT 1")->fetchALL(PDO::FETCH_ASSOC);

	echo "Welcome {$mostRecentSubmission[0]["FIRSTNAME"]}  {$mostRecentSubmission[0]["LASTNAME"]}, <br>";


	echo "You Are #{$mostRecentSubmission[0]["STUDENTID"]} To Sign Up Here...";
}





/******* printAllData Function *******/
function printAllData($dbVal)
{

	$allResults = $dbVal->query("SELECT * FROM Students")->fetchALL(PDO::FETCH_ASSOC);

	echo " 
		<br> <br>
		<h3><u>Check The List Below: </u></h3>
		";

?>
	<table border="1" cellpadding="15">
		<tr>
			<th>StudentID</th>
			<th>FirstName</th>
			<th>LastName</th>
			<th>Email</th>
			<th>Age</th>
		</tr>
<?php

	foreach ($allResults as $row) {
?>
		<tr>
			<td><?php echo $row['STUDENTID']; ?></td>
			<td><?php echo $row['FIRSTNAME']; ?></td>
			<td><?php echo $row['LASTNAME']; ?></td>
			<td><?php echo $row['EMAIL']; ?></td>
			<td><?php echo $row['AGE']; ?></td>
		</tr>
<?php
	}
?>
	</table>
<?php
}

?>