<?php
if (!isset($_GET['host'])) {
    header("location: index.php");
}

$host = $_GET['host'];

$ip = gethostbyname($host);
$records = dns_get_record($host);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="img/favicon.png" href="http://localhost/RoXtar/favicon.ico"/>
    <title>DNS LookUp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <style>
        body, html {
            height: 100%;
            width: 100%;
        }
        .bg {
            background-image: url("images/bg.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
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
        <div class="row">
            <div class="col-md-6 offset-md-3" style="border: 1px solid #CCC;">
                <p style="text-align: center; font-size: 35px; font-weight: 100px;">DNS LookUp Tool</p>
                <hr>
                <h6><strong>IP Address</strong></h6>
                <h5 style="font-weight: 500; font-size: 15px;"><?php echo $ip;  ?></h5>
                <hr><br><br><br>
                <p><strong><?php echo count($records); ?> DNS records found : </strong></p>
                <hr>
                <div class="row" style="width: 100%; font-weight: 600;">
                    <div class="col-md-2">Type</div>
                    <div class="col-md-3">Host</div>
                    <div class="col-md-2">TTL</div>
                    <div class="col-md-1">Class</div>
                    <div class="col-md-2">IP</div>
                    <div class="col-md-2">TXT</div>
                </div>
                <hr>
                <?php foreach ($records as $record): ?>
                    <?php $record = json_decode(json_encode($record)) ;?>
                    <div class="row" style="width: 100%;">
                        <div class="col-md-2"><?php echo $record->type; ?></div>
                        <div class="col-md-3"><?php echo $record->host; ?></div>
                        <div class="col-md-2"><?php echo $record->ttl; ?></div>
                        <div class="col-md-1"><?php echo $record->class; ?></div>
                        <div class="col-md-2"><?php if (isset($record->ip)) {
                            echo $record->ip;
                        } else { echo "N/A" ;}?></div>
                        <div class="col-md-2"><?php if (isset($record->txt)) {
                            echo $record->txt;
                        } else { echo "N/A" ;}?></div>
                    </div>
                    <hr>
                <?php endforeach ?>
                <a href="index.php"><button type="submit" class="btn btn-outline-success btn-lg">LookUp Again</button></a>
            </div>

        </div>
    </div> <hr>
    <footer>
              <h4><center><p>DNS LookUp || Copyright &copy; <a href="https://www.facebook.com/x.3xp1r3.x">Fahmid Hasan Anabi</a></p></center></h4>
    </footer>
</body>
</html>
