<?php
//PHP- $FILES
/*
$_FILES Is a superglobal array. all information about uploaded files sent via HTTP POST method is stored here.

A file is uploaded when three conditions are fulfilled:
01. the type attribute of the input element must be "file".
02. the enctype attribute of the form must be multipar/form-data. 
03. the method attribute of the form must be "POST".

When a file is uploaded, the following information about the file is stored in the $_FILES array.
01. $_FILES['file']['name']
02. $_FILES['file']['type']
03. $_FILES['file']['size']
04. $_FILES['file']['tmp_name']
05. $_FILES['file']['full_path']
06. $_FILES['file']['error']

The list of error codes
UPLOAD_ERR_OK (valu=0)
UPLOAD_ERR_INI_SIZE (value=1)
UPLOAD_ERR_FORM_SIZE (value=2)
UPLOAD_ERR_PARTIAL (value=3)
UPLOAD_ERR_NO_FILE (value=4)
UPLOAD_ERR_NO_TMP_DIR (value=6)
UOLOAD_ERR_CAN_WRITE (value=7)
UPLOAD_ERR_EXTENSION (value=8)

Yoy have to check whether $_FILES['file']['error'] == 0 before biginning the real project'

*/
// An example of file uploding
?>
<?php
if (isset($_FILES['file'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "<pre>";

    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_error = $_FILES['file']['error'];

    move_uploaded_file($file_tmp, "uploaded_files/" . $file_name);
}
?>
<html>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <p><input type="file" name="file"></p>
        <p><input type="submit" value="Submit"></p>
    </form>
</body>

</html>

<?php
//Multiple files uploding

/*
<html>
    <body>
        <form action="hello2.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="files[]"/>
            <input type="file" name="files[]"/>
            <input type="submit" value="submit"/>
        </form>
    </body>
</html>
*/
?>








?>