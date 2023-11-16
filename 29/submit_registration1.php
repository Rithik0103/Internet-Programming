<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
</head>
<body>
    <h2>Form Submission Result</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
	$phone = $_POST["phone"];
	$company = $_POST["company"];
	$attendeetype = $_POST["attendee-type"];
	$comments = $_POST["comments"];        
        echo "<p>Form successfully registered.</p>";
    } else {
        echo "<p>ERROR 404... SORRY!!! </p>";
    }
    ?>
</body>
</html>
