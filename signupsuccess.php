<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Alerts</h2>
  <div class="alert alert-success">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
  <div class="alert alert-info">
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
  </div>
  <div class="alert alert-warning">
    <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
  </div>
  <div class="alert alert-danger">
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>
</div>

</body>
</html>


   <div class="modal fade" id="signupModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sign Up</h4>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            <form class="form-signin" method="post">

              <div class="form-group">
                <label for="inputUserName"><strong>This field is only for staff members</strong></label>
              </div>
      
              <div class="form-group">
                 <div class="required">
                <label for="fullName">Name</label>
              </div>
                <input type="text" name="fullname" class="form-control" placeholder="Full Name"  required />
              </div>

              <div class="form-group">
                 <div class="required">
                <label for="eMail">Email</label>
              </div>
                <input type="email"  name="email" class="form-control" placeholder="Email address" required />
              </div>

              <div class="form-group">
                 <div class="required">
                <label for="inputUserName">User Name</label>
                 </div>
                <input type="text" name="username" class="form-control" placeholder="User Name"  required="" />
              </div>

              <div class="form-group">
                 <div class="required">
                <label for="inputPassword">Password</label>
              </div>
                <input type="password" name="password" class="form-control" placeholder="Password"  required="" />
                <!--<span class="help-block">Strong Password</span> -->
              <div>
          </div>
        </div>
             </div>

          <div class="modal-footer">
            <button class="btn btn-primary" type="submit" name="submit" action="signupsuccess.php">Sign Up</button>
            <button class="btn btn-primary" type="submit" data-dismiss="modal">Close</button>
            <!--  <button class="btn btn-outline-success btn-primary" data-target="#signinModal" data-dismiss="modal" data-toggle="modal">Creata an Account</button> -->
          </div>

      
 
            </form>


          </div>