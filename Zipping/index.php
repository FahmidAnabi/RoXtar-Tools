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
                    <div class="panel-heading"><h1>Zipping files easily.</h1></div>
                    <hr>
                    <form action="getting.php" method="post"  enctype="multipart/form-data">
                        <input type="file" name="myFiles[]"  class="form-control" style="border-radius: 0;"><br>
                        <input type="file" name="myFiles[]"  class="form-control" style="border-radius: 0;"><br>
                  <center >   <input type="submit" value="Zap" class="btn btn-outline-success btn-lg"> </center>

                    </form>
                </div>
            </div>
        </div>
    </div><hr>
    <footer>
              <h4><center><p> File Zipper || Copyright &copy; <a href="https://www.facebook.com/x.3xp1r3.x">Fahmid Hasan Anabi</a></p></center></h4>
    </footer>
</body>
</html>
