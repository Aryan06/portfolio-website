<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<link rel="Stylesheet" type="text/css" href="style.css">
</head>
<body>
<main>
<h1>INTRODUCTION</h1>
<form class="form" action="contactform.php" method-"post">
<input type="text" name="name" placeholder="Full name:"><br>
<br>
<input type="text" name="title" placeholder="Title:"><br>
<br>
<input type="text" name="designation" placeholder="Designation:"><br>
<br>
<input type="text" name="about" placeholder="About:"><br>
<br>
<label for="fileupload"> Select a file to upload: </label>
<input type="file" name="fileupload" value="fileupload" id="fileupload"><br>
<br>
<button type="submit"> SUBMIT </button>
</form>
</main>
</body>
</html>