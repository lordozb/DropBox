<!DOCTYPE html>
<html lang="en">

<head>
    <!-- The above 3 meta tags *must* come first in the head; any other head
         content must come *after* these tags -->
    <title>DropBox Personel</title>
        <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Css/Style.css">
</head>
<body>
<?php include 'navbar.php' ?>
<?php include 'Slideshow.php'?>
    <div class="jumbotron">
  <h1>Welcome to the dropbox</h1>
  <p>Please login to continue</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
    
    <div><br><br></div>
    <div class="container">
        <div class="row row-content">
<!--            <form role="form" action="login.php" method="post">-->
<!--                      <div class="form-group">-->
<!--                        <label >Name</label>-->
<!--                        <input type="text" class="form-control" id="user" name="user">-->
<!--                      </div>-->
<!--                      <div class="form-group">-->
<!--                        <label >Password:</label>-->
<!--                        <input type="password" class="form-control" id="pass" name="pass">-->
<!--                      </div>-->
<!--                        <input type="submit" class="btn btn-default" value="Submit">-->
<!---->
<!--            </form>-->

            <div >

                <!-- Nav tabs -->
                <ul  class="nav nav-tabs" role="tablist">
                    <li class="col-md-6" class="btn info"  role="presentation" class="active"><a href="#Login" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
                    <li class="col-md-6"   role="presentation" ><a  href="#Signup" aria-controls="profile" role="tab" data-toggle="tab">SignUp</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content" >
                    <div role="tabpanel"  class="active"  id="Login"><form role="form" action="login.php" method="post">
                                                  <div class="form-group">
                                                    <label >Name</label>
                                                    <input type="text" class="form-control" id="user" name="user">
                                                  </div>
                                                  <div class="form-group">
                                                    <label >Password:</label>
                                                    <input type="password" class="form-control" id="pass" name="pass">
                                                  </div>
                                                    <input type="submit" class="btn btn-default" value="Submit">

                                        </form></div>
                    <div role="tabpanel" class="tab-pane fade" id="Signup"></div>

                </div>

            </div>

        </div>
        <br><br>
<?php include  'footer.php'?>
    </div>
   
</body>


</html>
