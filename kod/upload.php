<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded HTML Content</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ellenőrzi, hogy az adatok beérkeztek-e
    if (isset($_POST["htmlContent"])) {
        $htmlContent = $_POST["htmlContent"];

        // Kiírja az HTML tartalmat a weboldalra
        echo $htmlContent;
    } else {
        echo "No HTML content received.";
    }
} else {
    echo "Invalid request method.";
}
?>

</body>
</html>