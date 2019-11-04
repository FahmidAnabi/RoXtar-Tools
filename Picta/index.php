<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Picturature</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Styling -->
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
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin: auto; background: white; padding: 20px; box-shadow: 10px 10px 5px #888;">
                <div class="panel-heading">
                    <h1>Picturature</h1>
                </div>
                <hr>
                <form action="generate.php" method="post" enctype="multipart/form-data">
                    <textarea name="status" id="status" class="form-control"></textarea><br>
                    <input type="file" name="media" accept="image/*" class="form-control"><br>
                    <input type="number" name="fontsize" value="62" style="border-radius: 0px;" class="form-control"><br>
                    <div class="row">
                        <div class="col-6">
                            <select name="horizontal" id="horizontal" style="border-radius: 0px;" class="form-control">
                                <option value="left">Left</option>
                                <option value="center" selected="selected">Center</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <select name="vertical" id="vertical" style="border-radius: 0px; " class=" form-control">
                                <option value="top">Top</option>
                                <option value="center" selected="selected">Center</option>
                                <option value="bottom">Bottom</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="color">Color</label><br>
                            <input type="color" style="height: 50px;" name="color" class="form-control" value="#FFFFFF">
                        </div>
                        <div class="col-md-12">
                            <label for="shadowcolor">Shadow Color</label><br>
                            <input type="color" style="height: 50px;" name="shadowcolor" class="form-control" value="#000000">
                        </div>
                    </div>
                    <br>
                    <button type="submit" style="border-radius: 0px; " class="btn btn-outline-success btn-lg">Generate Image</button>
                </form>
            </div>
        </div>
    </div> <hr>
    <footer>
            <h4><center><font color="white"><p>Picturature || Copyright &copy; <a href="https://www.facebook.com/x.3xp1r3.x">Fahmid Hasan Anabi</a></p></font></center></h4>
        </footer>
</body>
</html>
