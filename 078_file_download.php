<?php
// PHP file download
/*
why use PHP to download a file
01. Giving users the opportunity to downloading PDF, image, video and other file formats.
02.Securing the file,  so that only logged-in users can download it.
03. Monitoring whether the file has been downloaded.

We use a PHP built-in function for this- readfile()

We must set the Content-Type-response header to application/octet-stream. and to allow "save as," set the Content-Disposition header.
*/
//with readfile()
$filePath = 'image2.png';

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
readfile($filePath);

//setting a data limit and storing it in a buffer
$filename = 'image2.png';

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($filename) . '"');

$handle = fopen($filename, 'rb');
$buffer = '';
$chunkSize = 1024 * 1024;

ob_start();
while (!feof($handle)) {
    $buffer = fread($handle, $chunkSize);
    echo $buffer;
    ob_flush();
    flush();
}
fclose($handle);

//with file_get_contents()
$file = 'test5.txt';

if (file_exists($file)) {
    $content = file_get_contents($file);

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . strlen($content));

    echo $content;
    exit;
} else {
    echo "File not found";
}

?>
//triggerd when the download link is clicked
<?php
if (!empty($_GET['file'])) {
    $filename = basename($_GET['file']);
    $filepath = 'file_download/' . $filename;
    if (!empty($filename) && file_exists($filepath)) {
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        readfile($filepath);
        exit;
    } else {
        echo "file not found";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h2>Download files from here</h2>
    <a href="078_file_download.php?file=image2.png">Click here</a>

</body>

</html>


//Best Practices
/*
File Validation
Authenticatio
Hide File Path
Limit File Types
Download restrictions
*/