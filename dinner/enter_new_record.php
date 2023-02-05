<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Meals - Enter </title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<body>
<div id="container">
<h1>Dinner: Enter New Meal</h1>
<p class="middle"><a href="meals_ordered.php">View full list</a></p>
<div id="meals">
<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="mealform" method="post" action="" autocomplete="off">
  <label for="type">What type of meal?</label>
  <select name="type" id="type" required>
      <option value=""></option>
      <option value="takeout">Takeout</option>
      <option value="dine in">Dine in</option>
      <option value="homemade">Homemade</option>
      </select>
  <label for="meal">What was your meal? </label>
	<input type="text" name="meal" id="meal" maxlength="50" required>
  <label for="price">What was the price? </label>
	<input type="price" name="price" id="price" max="9999.99" step="0.01" required>
    <label for="guilty">How guilty did you feel afterwards? (1 = not at all, 5 = very guilty)</label>
    <select name="guilty" id="guilty" required>
        <option value=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
	<input type="submit" id="submit" value="Submit">
</form>
<!-- close the form -->
</div> <!-- close #socks -->
<!-- empty div -->
<div id="response"></div>
</div> <!-- close container -->
<script src="js/enter.js"></script>
</body>
</html>
