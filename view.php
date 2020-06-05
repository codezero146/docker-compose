<!DOCTYPE html>
<html>
<head>
	<title>View</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

}
</style>
</head>
<body>

<h1>SEARCH</h1>
<form method="get">
    Username:
    <input type="text" name="un" placeholder="user name" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<br>
<br>
  <?php
     
    if(isset($_GET['submit']))
    {
     ?>
     <table>
    <tr>
        <th>Name</th>
        <th>phone</th>
    </tr>
     <?php
     extract($_GET);
    $un = $un;
     $conn = mysqli_connect('wordpress','root','password','wordpress');
     $sql = "SELECT * FROM data where name LIKE '$un'";

     $result = mysqli_query($conn,$sql);

     while($row = mysqli_fetch_array($result))
     {
     	?>
             <tr>
             	<td> <?php echo $row[0]; ?></td>
             	<td> <?php echo $row[1]; ?></td>
             </tr>
     	<?php
     }
 }
 else
{
    echo "No result found";
}
 ?>
</table>
</body>
</html>