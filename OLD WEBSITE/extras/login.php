<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body>

</body>
</html>><?php include('headersignin.php'); ?>
<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1>LOGIN</h1>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                      <form name="loginfrm" action="signin.php" method="post">
                        <div class="form-group">
                            <label>User Name</label>
                            <input class="form-control" type="text" name = "username"/>
                            <p> </p>
                        </div>
                         <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name = "password"/>
                            
                        </div>
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="Login"/>
                        </form>
                        <p></p>
                        New User?   <a href="signup.php">   Click to Signup</a>
                    </div>
                    
                    <div class="col-lg-4 col-md-4">
                         
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

        <?php include('footer.php'); ?>