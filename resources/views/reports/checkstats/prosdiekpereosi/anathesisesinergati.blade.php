
<?php

// The location of the PDF file
// on the server
$filename = "/reports/Anathesi_se_sineergati.pdf";

// Header content type
header("Content-type: application/pdf");

header("Content-Length: " . filesize($filename));

// Send the file to the browser.
readfile($filename);
?>
