<!DOCTYPE html>
<html>
<body>

<h1>DATABASE CONNECTION</h1>

<?php
ini_set('display_errors', 1);
echo "Hello Cloud computing class 0818!";
?>

<?php


if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
     echo '<p>The DB exists</p>';
     echo getenv("dbname");
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

$sql = "SELECT * FROM student ORDER BY stuid";
$stmt = $pdo->prepare($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$resultSet = $stmt->fetchAll();
echo '<p>Students information:</p>';
// foreach ($resultSet as $row) {
// 	echo $row['stuid'];
//         echo "    ";
//         echo $row['fname'];
//         echo "    ";
//         echo $row['email'];
//         echo "    ";
//         echo $row['classname'];
//         echo "<br/>";
// }

?>

<div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Student ID</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>classname</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($resultSet as $key => $value): ?>
                <tr class="odd gradeX">
                  <td><?php echo $value['stuid']; ?></td>
                  <td><?php echo $value['fname']; ?></td>
                  <td><?php echo $value['email']; ?></td>
                  <td><?php echo $value['classname']; ?></td>
                </tr>
              <?php endforeach; ?>
                
              </tbody>
            </table>
          </div>
</body>
</html>
