<?php 
		exit;
	}

	$sql = "SELECT * FROM user";

	if($query = $mysqli->query($sql)){

		#user = $query->fetch_all(MYSQL_BOTH);
		#var_dump($user);
		#echo "email: ".$user[0]["email"];
		#echo " - email: ".$user[0][2];
	};

/*	foreach($user as $value) {
		echo "name: ".$value["name"]."<br/>";
}*/


//var_dump($user);

echo "name: ".$user["name"]."<br/>";

while ($user = $query->fetch_array(MYSQLI_NUM)){
	echo "email: ".$user[2]."<br/>";
}

#fetch_row
$user = $query->fetch_row();
var_dump($user);
echo "name: ".$user[1]."<br/>";

#fetch_object
/*$user = $query->fetch_object();
// var_dump($user);
echo "name: ".$user->name."<br/>";*/

while ($user = $query->fetch_object()){
	$row[] = $user;
}

foreach ($row as $value) {
	echo "name: ".$value->name."<br/>";
}

while ($user = $query->fetch_object()){
	echo "email: ".$user->name."<br/>";
}

//Dica
foreach ($query = $mysqli->query($sql) as $user) {
	echo "name: ".$user['name']."<br/>";
}







	while($data = $query->fetch_assoc()){

	$server 	= "localhost";
	$user 		= "root";
	$pass 		= "123456";
	$database 	= "teste";

	//Conecta MySQL
	@$mysqli = new mysqli($server, $user, $pass, $database);

	//Tratamento de Erro

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: (".$mysqli->connect_errno.")".$mysqli->connect_error;
		echo "Id: ".$data['id']."<br>";
		echo "Name: ".$data['name']."<br>";
		echo "E-mail: ".$data['email']."<br><hr>";
	}

 ?>