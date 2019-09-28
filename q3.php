<?php
if (!empty($_POST["fileup1"]) && !empty($_POST["fileup2"]) && !empty($_POST["fileup3"]) && !empty($_POST["fileup4"]) && !empty($_POST["fileup5"]) && !empty($_POST["fileup6"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileup1"]["name"]);
    $uploadOk = 1;

    if ($_FILES["fileup1"]["size"] > 200000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        echo "<script>setTimeout(\"location.href='./q3.php';\", 2000);</script>";
    }
    if ($_FILES["fileup1"]["size"] == 0) {
        echo "Sorry, your file is empty.";
        echo "<script>setTimeout(\"location.href='./q3.php';\", 2000);</script>";
        $uploadOk = 0;
    }
    if(move_uploaded_file($_FILES["fileup1"]["tmp_name"], $target_file)) {
        // echo "file uploaded";
        $uploadOk = 1;
    }

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileup2"]["name"]);
    $uploadOk = 1;

    if ($_FILES["fileup2"]["size"] > 200000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        echo "<script>setTimeout(\"location.href='./q3.php';\", 2000);</script>";
    }
    if ($_FILES["fileup2"]["size"] == 0) {
        echo "Sorry, your file is empty.";
        echo "<script>setTimeout(\"location.href='./q3.php';\", 2000);</script>";
        $uploadOk = 0;
    }
    if(move_uploaded_file($_FILES["fileup2"]["tmp_name"], $target_file)) {
        // echo "file uploaded";
        $uploadOk = 1;
    }

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileup3"]["name"]);
    $uploadOk = 1;

    if ($_FILES["fileup3"]["size"] > 200000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        echo "<script>setTimeout(\"location.href='./q3.php';\", 2000);</script>";
    }
    if ($_FILES["fileup3"]["size"] == 0) {
        echo "Sorry, your file is empty.";
        echo "<script>setTimeout(\"location.href='./q3.php';\", 2000);</script>";
        $uploadOk = 0;
    }
    if(move_uploaded_file($_FILES["fileup3"]["tmp_name"], $target_file)) {
        // echo "file uploaded";
        $uploadOk = 1;
    }

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileup4"]["name"]);
    $uploadOk = 1;

    if ($_FILES["fileup4"]["size"] > 200000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        echo "<script>setTimeout(\"location.href='./q3.php';\", 2000);</script>";
    }
    if ($_FILES["fileup4"]["size"] == 0) {
        echo "Sorry, your file is empty.";
        echo "<script>setTimeout(\"location.href='./q3.php';\", 2000);</script>";
        $uploadOk = 0;
    }
    if(move_uploaded_file($_FILES["fileup4"]["tmp_name"], $target_file)) {
        // echo "file uploaded";
        $uploadOk = 1;
    }

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileup5"]["name"]);
    $uploadOk = 1;

    if ($_FILES["fileup5"]["size"] > 200000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        echo "<script>setTimeout(\"location.href='./q3.php';\", 2000);</script>";
    }
    if ($_FILES["fileup5"]["size"] == 0) {
        echo "Sorry, your file is empty.";
        echo "<script>setTimeout(\"location.href='./q3.php';\", 2000);</script>";
        $uploadOk = 0;
    }
    if(move_uploaded_file($_FILES["fileup5"]["tmp_name"], $target_file)) {
        // echo "file uploaded";
        $uploadOk = 1;
    }

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileup6"]["name"]);
    $uploadOk = 1;

    if ($_FILES["fileup6"]["size"] > 200000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        echo "<script>setTimeout(\"location.href='./q3.php';\", 2000);</script>";
    }
    if ($_FILES["fileup6"]["size"] == 0) {
        echo "Sorry, your file is empty.";
        echo "<script>setTimeout(\"location.href='./q3.php';\", 2000);</script>";
        $uploadOk = 0;
    }
    if(move_uploaded_file($_FILES["fileup6"]["tmp_name"], $target_file)) {
        // echo "file uploaded";
        $uploadOk = 1;
    }
}

if (isset($_POST["upload"])) {
    $file = fopen("uploads/output.txt", "w");

    $data = explode("\n",file_get_contents($_FILES["fileup1"]["tmp_name"]));
    foreach(array_reverse($data) as $value) {
        fwrite($file,$value."\n");
    }
    $data = explode("\n",file_get_contents($_FILES["fileup2"]["tmp_name"]));
    foreach(array_reverse($data) as $value) {
        fwrite($file,$value."\n");
    }
    $data = explode("\n",file_get_contents($_FILES["fileup3"]["tmp_name"]));
    foreach(array_reverse($data) as $value) {
        fwrite($file,$value."\n");
    }
    $data = explode("\n",file_get_contents($_FILES["fileup4"]["tmp_name"]));
    foreach(array_reverse($data) as $value) {
        fwrite($file,$value."\n");
    }
    $data = explode("\n",file_get_contents($_FILES["fileup5"]["tmp_name"]));
    foreach(array_reverse($data) as $value) {
        fwrite($file,$value."\n");
    }
    $data = explode("\n",file_get_contents($_FILES["fileup6"]["tmp_name"]));
    foreach(array_reverse($data) as $value) {
        fwrite($file,$value."\n");
    }
}

if (isset($_POST["download"])) {
    $name= "uploads/output.txt";

    header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($name));
    ob_clean();
    flush();
    readfile($name); //showing the path to the server where the file is to be download
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Frequency Counter</title>
	<script type="text/javascript">
		function checkextension() {
 			var file = document.querySelector("#file");
  			if ( /\.(txt)$/i.test(file.files[0].name) === false ) { alert("not a txt file!"); }
		}
	</script>
</head>
<body>
	<form action="q3.php" method="post" enctype="multipart/form-data">
		Select text file to upload: 
		<input type="file" name="fileup1" id="file" onchange="checkextension()"><br>
        Select text file to upload: 
		<input type="file" name="fileup2" id="file" onchange="checkextension()"><br>
        Select text file to upload: 
		<input type="file" name="fileup3" id="file" onchange="checkextension()"><br>
        Select text file to upload: 
		<input type="file" name="fileup4" id="file" onchange="checkextension()"><br>
        Select text file to upload: 
		<input type="file" name="fileup5" id="file" onchange="checkextension()"><br>
        Select text file to upload: 
		<input type="file" name="fileup6" id="file" onchange="checkextension()"><br>
        <input type="submit" name="upload" value="Click to upload">
        <input type="submit" name="download" value="Click to download">
	</form>
</body>
</html>