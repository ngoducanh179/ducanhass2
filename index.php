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
  
  <form class="modal-content animate" action="/ConnectToDB.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="ducanh.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" id = "UserName1" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id = "PassWord1" required>
        
      <button type="submit" onclick = "login1()">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
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
var UserName = document.getElementById('UserName1').value;
var Password = document.getElementById('PassWord1').value;
function login1(){
if (UserName && Password == "admin"){
	window.location.href = 'ConnectToDB.php';
}
// else if (UserName && Password == "employee"){
// 	window.location.href = 'InsertData.php';
// }
else {
	return false;
}
}
</script>
</body>

</html>