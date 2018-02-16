




    <?php

    $file = "ADDIMISSION FORM FOR PUPILS.docx";
    // Quick check to verify that the file exists
    if( !file_exists($file) ) die("File not found");
    // Force the download
    header("Content-Disposition: attachment; filename='$file'");
    header("Content-Type: vnd.openxmlformats-officedocument.wordprocessingml.document;");
    readfile($file);

    ?>