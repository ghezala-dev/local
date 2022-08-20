<?php

// username: admin
// password: admin

/*
products

-clothes
-fashion
-drags
-shoes
-kids


Students
- name
- father name
- class
- email


Teacher
- id
- first_name
-last_name
-email
-department


CRUD: Create Read Update Delete

INSERT INTO students (email, father_name, class, name) VALUES ('saramani@gmail.com', 'amen sahib', 3, 'sara amani');

SELECT * FROM `students`;
SELECT * FROM students WHERE class=3;

UPDATE students SET class=3, name='Ahmad ' WHERE name='Ahmad';

DELETE FROM students WHERE class=2;

*/


$db_connection = new mysqli('localhost', 'root', 'root', 'codeweekend');

// $sql_query = ' INSERT INTO teachers (first_name,last_name, email, department) VALUES ("Ahmad", "Ahmadali@gmail.com", "CIS") ';
// $sql_query = ' UPDATE teachers SET phone="+90700100200" WHERE id=5 ';
// $sql_query = ' DELETE FROM teachers WHERE id=5 ';
// $sql_query = ' SELECT * FROM teachers WHERE department="CIS" ';
$sql_query = ' SELECT * FROM teachers ';

$result = $db_connection->query($sql_query);


// echo '<pre>';
// var_dump($result);

// $data = $result->fetch_assoc();
$data = $result->fetch_all(MYSQLI_ASSOC);
?>

<table border="1">
	<tr>
		<th>id</th>
		<th>first_name</th>
		<th>last_name</th>
		<th>email</th>
		<th>department</th>
		
	</tr>

	<tbody>

		<?php 
			
			foreach($data as $record){

				echo 	'<tr>
							<td>'. $record['id'] .'</td>
							<td>'. $record['first_name'] .'</td>
							<td>'. $record['last_name'] .'</td>
							<td>'. $record['email'] .'</td>
							<td>'. $record['department'] .'</td>
						</tr>';

			}

		?>

	</tbody>
</table>
