<?php
include "header.php"; 
include "header1.php";
?>

<link href="bootstrap.css" rel="stylesheet" id="bootstrap-css">
<link href="login.css" rel="stylesheet" id="css">
<script src="bootstrap.js"></script>
<script src="jquery.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Admin Login</h3>
                    <form action="adminchk.php" method="post">
                        <div class="form-group">
                            <input type="text" name="txtid" class="form-control" placeholder="Admin Id *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Admin Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Student Login</h3>
                    <form action=loginchk.php method=post>
                        <div class="form-group">
                            <input type="text" name="txtnum" class="form-control" placeholder="Student Registration Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Student Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php
include "footer.php";
?>