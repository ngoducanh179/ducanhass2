<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<head>
	<title>Database Test</title>

</head>
<link rel="stylesheet" href="style.css">
<style type="text/css">
	body {
		width: 100%;
		height: 100%;
		background: url(pexels-photo-1229861.jpeg) no-repeat;
		background-size: cover;
	}

	p {
		text-align: center;
	}
</style>

<body>

	<p style="color:azure;"><strong>Name:</strong> Ngo Duc anh</p>
	<p style="color:azure;"><strong>Class:</strong> GCD0818</p>
	<p style="color:azure;"><strong>ID:</strong> GCD17028</p>
	<br>
	<br>
	<div class="row">
		<div class="col-12">

			<!-- <a href="ConnectToDB.php" class="myButton pl-3">View Data</a>

			<a href="InsertData.php" class="myButton pl-3">Insert data to the database</a>

			<a href="UpdateData.php" class="myButton pl-3">Update data to the database</a>

			<a href="DeleteData.php" class="myButton pl-3">Delete data to the database</a> -->
			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

			<div id="id01" class="modal">

				<form class="modal-content animate">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
						<img src="ducanh.jpg" alt="Avatar" class="avatar">
					</div>

					<div class="container">
						<label><b>Username</b></label>
						<input type="text" placeholder="Enter Username" id="username" required>

						<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" id="password">

						<button type="submit" onclick="login1()">Login</button>
					</div>

					<div class="container" style="background-color:#f1f1f1">
						<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

		//login 
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;

		function login1() {
			if (username == "admin") {
				alert("Login successfully");
				// window.location = "ConnectToDB.php";
				// window.location.replace("http://www.w3schools.com");
				// } else if (username == "employee" && password == "employee") {
				// 	alert("Login successfully");
				// 	// window.location = "InsertData.php";
				// 	return;
			} else {
				return false;
			}


		}
	</script>
</body>

</html>