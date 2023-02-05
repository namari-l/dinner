<?php
	include 'database.php';
	$query = "SELECT * FROM meals ORDER BY meal";
	$meals = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Meals had </title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/table.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>
<div id="container">

<h1>Dinner: Meals Had</h1>

<p class="middle"><a href="enter_new_record.php">Add a new meal</a></p>




<table>
	<!-- table column headings -->
	<tr>
    <th >Type</th>
	  <th >Meal</th>
	  <th >Price</th>
	  <th >Guilt</th>
	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
     Each time it loops, it writes ONE ROW.
	 This code depends on the first 5 lines at the start of this file.
	 $socks comes from that code.
	 all form controls must have a name= attribute.
     -->
<?php while ($row = mysqli_fetch_assoc($meals)) :  ?>

<tr>
<td><?php echo stripslashes($row['type']); ?></td>
  <td><?php echo stripslashes($row['meal']); ?></td>
  <td><?php echo $row['price']; ?></td>
  <td><?php echo $row['guilty']; ?></td>

</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>


<!-- close the form -->
</form>

<p class="middle"><a href="enter_new_record.php">Add a new meal</a></p>

</div> <!-- close container -->
</body>
</html>
