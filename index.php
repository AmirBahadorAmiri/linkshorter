<html lang="fa">
<head>
    <title>Link Shorter</title>
    <link rel="shortcut icon" href="icon-128x128.png" type="image/x-icon" />
    <link rel="stylesheet" href="tools/bootstrap-5.3.5-dist/css/bootstrap.min.css">
</head>
<body style="padding: 16px;">
<form action="api.php" method="post">
    <label for="url_text" class="form-label">Your URL</label>
    <input type="url" class="form-control" name="url_text" id="url_text" placeholder="Insert Your URL">
    <input style="margin-top: 16px" type="submit" class="btn btn-primary" id="short_it" value="Short it">
</form>
</body>
<?php
if ( isset($_GET['url_id']) ) {
    include 'tools/SQLHelper.php';
    $url_id = $_GET['url_id'];
    $url_text = "";
    $isFind = false;
    $sqlManager = new SQLHelper();
    $sqlManager->sendQuery("SELECT * FROM `amirbaha_urlshort_tb` WHERE url_id = '$url_id'");
    if ( $sqlManager->getResult()->num_rows > 0 ) {
        while ( $row = $sqlManager->getResult()->fetch_assoc() ) {
            $url_text = $row["url_text"];
            $isFind = true;
        }
    }
    if ( $isFind ) {
//        echo "<meta http-equiv='refresh' content='0; url=$url_text' />";
        echo "<script type=\"text/javascript\">
    location.href = \"$url_text\";
</script>";
    }
}
?>
</html>