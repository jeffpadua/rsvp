<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the note input value
    $noteInput = $_POST["noteInput"];

    if (empty($noteInput)) {
        echo "Please enter a note before saving.";
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