<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the note input value
    $noteInput = $_POST["yes"];

    if (empty($noteInput)) {
        echo "Please Check if you are going";
        exit;
    }

    // Open the text file in append mode
    $file = fopen("notes.txt", "a");

    // Write the note to the file
    fwrite($file, $noteInput . PHP_EOL);

    // Close the file
    fclose($file);

    echo "Note saved successfully!";
} else {
    // Redirect to the form if accessed directly without a POST request
    header("Location: index.html");
    exit;
}
?>