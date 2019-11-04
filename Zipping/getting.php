<?php


$files = $_FILES;

$zip = new ZipArchive;

$location = "files/myFiles.zip";


if (file_exists($location)) {
    $zip->open($location, ZIPARCHIVE::OVERWRITE);
} else {
    $zip->open($location, ZIPARCHIVE::CREATE);
}

// Filtering $files
foreach ($files['myFiles']['name'] as $key => $filename) {
     $zip->addFile($files['myFiles']['tmp_name'][$key], $filename );
}



$zip->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="img/favicon.png" href="http://localhost/RoXtar/favicon.ico"/>
    <title>File Zipper</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <style>
        body, html {
            height: 100%;
        }
        .bg {
            background-image: url("images/bg.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #qrbox>div {
            margin: auto;
        }
    </style>
    <style type="text/css">
    .topcorner{
    position:absolute;
    top:0;
    right:0;
    }
    </style>

    </head>
    <body class="bg">

    <div class="topcorner"><a href="http://localhost/RoXtar/"><button type="submit" class="btn btn-outline-success btn-lg"><strong>Back to Home</button></strong></a></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h1>File Zipped</h1></div>
                    <p style="font-style: italic;">Your file is ready to download.</p>
                    <hr>
                    <br>
                    <div style="text-align: center;">
                        <a class="btn btn-outline-success btn-lg" href="files/myFiles.zip" download>Download ZIP</a>
                        <br><br>
                        <a href="index.php"><button type="submit" class="btn btn-outline-success btn-lg">Zip Again</button></a>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div><hr>
    <footer>
              <h4><center><p>Bar Code Generator || Copyright &copy; <a href="https://www.facebook.com/x.3xp1r3.x">Fahmid Hasan Anabi</a></p></center></h4>
    </footer>
</body>
</html>
