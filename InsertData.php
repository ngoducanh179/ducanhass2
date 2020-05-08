<!DOCTYPE html>
<html>
<script>
    function CheckClass() {
        var CheckClassName = document.getElementById("Class1").value;
        var checkFullName = document.getElementById("Name1").value;
        var checkEmail = document.getElementById("Email1").value;
        if (CheckClassName == "") {
            alert("FullName should have Data");
            return false;
        } else if (checkFullName == "") {
            alert("Name should have Data");
            return false;
        } else if (checkEmail == "") {
            alert("Price should have Data");
            return false;
        } else {
            return true
        }
    }
</script>

<head>
    <title>ATN Shop</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css">
    <style>
        li {
            list-style: none;
        }

        body {
            width: 100%;
            height: 100%;
            background: url(69626134-color-toys-border-on-the-while-background.jpg) no-repeat;
            background-size: cover;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <h1>INSERT DATA TO DATABASE</h1>
    <h2>Enter data into Product table</h2>
    <ul>
        <form name="InsertData" action="InsertData.php" method="POST">
            <li>Product ID:</li>
            <li><input type="text" name="stuid" /></li>
            <li>Name:</li>
            <li><input type="text" name="fname" id="Name1" /></li>
            <li>Price:</li>
            <li><input type="text" name="email" id="Email1" /></li>
            <li>Supplier:</li>
            <li><input type="text" name="classname" id="Class1" /></li>
            <li><input type="submit" name="Submit" onclick="CheckClass()" /></li>
        </form>
    </ul>
    <div class="row">
        <div class="col-12">
            <a href="ConnectToDB.php" class="myButton pl-3">View Data's ATN</a>

            <a href="UpdateData.php" class="myButton pl-3">Update data to the database's ATN</a>

            <a href="DeleteData.php" class="myButton pl-3">Delete data to the database's ATN</a>
        </div>
    </div>
    <?php

    if (empty(getenv("DATABASE_URL"))) {
        echo '<p>The DB does not exist</p>';
        $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
    } else {

        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf(
            "host=ec2-107-20-230-70.compute-1.amazonaws.com;port=5432;user=eirmniiakxyqoe;password=3e07e3615308dc1f376f5cd4effa6c325e0288742205be8c3e6e0978ce59482b;dbname=d6r6sqblr6dakr",
            $db["host"],
            $db["port"],
            $db["user"],
            $db["pass"],
            ltrim($db["path"], "/")
        ));
    }

    if ($pdo === false) {
        echo "ERROR: Could not connect Database";
    }

    //Khởi tạo Prepared Statement
    //$stmt = $pdo->prepare('INSERT INTO student (stuid, fname, email, classname) values (:id, :name, :email, :class)');

    //$stmt->bindParam(':id','SV03');
    //$stmt->bindParam(':name','Ho Hong Linh');
    //$stmt->bindParam(':email', 'Linhhh@fpt.edu.vn');
    //$stmt->bindParam(':class', 'GCD018');
    //$stmt->execute();
    //$sql = "INSERT INTO student(stuid, fname, email, classname) VALUES('SV02', 'Hong Thanh','thanhh@fpt.edu.vn','GCD018')";
    $sql = "INSERT INTO student(stuid, fname, email, classname)"
        . " VALUES('$_POST[stuid]','$_POST[fname]','$_POST[email]','$_POST[classname]')";
    $stmt = $pdo->prepare($sql);
    //$stmt->execute();
    if (is_null($_POST[stuid])) {
        echo "ProductID must be not null";
    } else {
        if ($stmt->execute() == TRUE) {
            echo "Record inserted successfully.";
        } else {
            echo "Error inserting record: ";
        }
    }
    ?>
</body>

</html>