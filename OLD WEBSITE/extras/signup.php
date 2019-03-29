<?php include('header.php'); ?>
<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>SIGNUP</h2>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                      <form name="signupfrm" action="signup1.php" method="POST" onsubmit ="return validate();" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="Name" id="1"/>
                            <p></p>
                            </div>
                         <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="Email" id="2"/>
                            <p></p>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" name="Username" id="8"/>
                            <p></p>
                            </div>
                         <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="Password" id="3"/>
                            <p></p>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input class="form-control" type="password" name="confirm password" id="4"/>
                            <p></p>
                        </div>
                        <div class="form-group">
                            <label>Contact No.</label>
                            <input class="form-control" type="number" name="Contact" id="5"/>
                            <p></p>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input class="form-control" type="textarea" column="20" rows="30" name="Address" id="7"/>
                            <p></p>
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input class="form-control" type="date" name="DOB" id="6"/>
                            <p></p>
                        </div>
                       
                        <div class="form-group">
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="Signup"/>
                        <input type="reset" class="btn btn-danger btn-lg btn-block" value="Clear"/>
                        </div>
                    </div>
                    </form>
                    <div class="col-lg-4 col-md-4">
                         
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        <script>
        function validate()
    {
        flag = 0;
        
        if(document.getElementById("1").value=='')
        {
            alert("Enter Your Name");
            flag = 1;
        }
         else if(document.getElementById("8").value=='')
        {
            alert("Please Enter Your Username");
            flag = 1;
        }
       else  if(document.getElementById("2").value=='')
        {
            alert("Enter Your email ");
            flag = 1;
        }
       else if(document.getElementById("3").value=='')
        {
            alert("Please Enter Password");
            flag = 1;
        }
       else if(document.getElementById("4").value=='')
        {
            alert("Please Confirm Password");
            flag = 1;
        }
       else if(document.getElementById("3").value!=document.getElementById("4").value)
        {
            alert("Password didn't match");
            flag = 1;
        }
        
       
       else if(document.getElementById("5").value=='')
        {
            alert("Please Enter Your Contact No.");
            flag = 1;
        }

       else if(document.getElementById("6").value=='')
        {
            alert("Please Enter Your Date of Birth");
            flag = 1;
        }
        else if(document.getElementById("7").value=='')
        {
            alert("Please Enter Your Address");
            flag = 1;
        }
        if (flag==0) 
         return true;
        
        else
            return false;
    }
    </script>
        <?php include('footer.php'); ?>