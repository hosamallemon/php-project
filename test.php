<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
session_start();
    echo $_SESSION['user_name'];

    echo "<br>";
    echo $_SESSION['user_id'];

?>
</body>
</html>