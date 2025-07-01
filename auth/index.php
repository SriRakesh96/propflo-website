<?php

include('doctype.php');


?>

<head>


 <title>Admin Login</title>


<?php

include('head.php');


?>


</head>


<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-5">
										<img src="assets/img/logo.svg" alt="" width="200px">
									</div>
                                    <h4 class="text-center mb-4">Sign in your Account</h4>
                                    <form action="login_pro" method="POST">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            
                                            <div class="form-group">
                                               <!-- <a href="forgot_password.php">Forgot Password?</a>-->
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" name="Log_In" value="Log In" class="btn btn-primary btn-block">
                                        </div>
                                    </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">

							
				
		            	
		            	
					var password = new LiveValidation('password', { validMessage: 'validated', wait: 100});
		            	password.add(Validate.Presence, {failureMessage: "Password  can not be Blank!"});
		            	password.add( Validate.Length, { minimum: 6 } );
		            	password.add( Validate.Length, { maximum: 20} );
					//	password.add(Validate.Format, {pattern: /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/});
					    password.add(Validate.Format, {pattern: /^(?=.*\d).{6,20}$/});
					
		
				
						
				
		            var email = new LiveValidation('email', { validMessage: 'validated', wait: 100});
		            	email.add(Validate.Presence, {failureMessage: "Email can not be Blank!"});
		      
		            	email.add( Validate.Length, { maximum: 50} );
						email.add(Validate.Format, {pattern: /^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$/});
				
            </script>

<?php

include('footerjs.php');

?>

</body>

</html>