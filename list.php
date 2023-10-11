
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Biann</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/list.css" />
</head>
<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	
	<header>
		<h1>List Hobi</h1>
        
		<form id="new-task-form">
			<input 
				type="text" 
				name="new-task-input" 
				id="new-task-input" 
				placeholder="Masukan List" />
			<input 
				type="submit"
				id="new-task-submit" 
				value="Add Task" />
                
		</form>
	</header>
	<main>
		<section class="task-list">

		
			<h2>List</h2>
			 

			 <table>
				<thead>
					<tr>
						<th>Nama</th>
						<th>Hobi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					
					$host = 'localhost';
					$username = 'root';
					$password = '';
					$database = 'biann_db';
					
					$koneksi = new mysqli($host, $username, $password, $database);
					
					if (!$koneksi) {
						die('Koneksi ke database gagal: ' . mysqli_connect_error());
					}

					$sql = "SELECT * FROM data";
					$result = $koneksi->query($sql);

					if(!$result){
						die("Invalid" . $koneksi->error);
					}

					while($row = $result->fetch_assoc()){
						echo "
						<tr>
						<td>" . $row ["name"] ." </td>
						<td>" . $row ["hobi"] ." </td>
						</tr>";

					}
					?>
					
				</tbody>


			 </table>




			<div id="tasks">

			</div>
            
            <h2><a id="back" href="index.html">BACK</a></h2>
		</section>
	</main>

	<script src="js/list.js"></script>
</body>

</html>