<?php

include('doctype.php');


?>

<head>


 <title>Administratror</title>


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
									<div class="text-center mb-3">
										<img src="assets/img/logo.svg" alt="" width="300px">
									</div>
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                    <form action="forgot_pass_pro.php" method="POST">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
                                        </div>
                                        
                                     
                                        <div class="text-center">
                                            <input type="submit" value="Forgot Password" id="submit" class="btn btn-primary btn-block">
                                        </div>
                                        
                                    </form>
                                  
                                  
                                  
 <script type="text/javascript">
        $(window).on('beforeunload', function () {
            $("input[type=submit], input[type=button]").prop("disabled", "disabled");
        });
    </script>
    <script type="text/javascript">
	

						
				
		            var email = new LiveValidation('email', { validMessage: 'validated', wait: 100});
		            	email.add(Validate.Presence, {failureMessage: "Email can not be Blank!"});
		            	email.add( Validate.Length, { minimum: 6 } );
		            	email.add( Validate.Length, { maximum: 50} );
						email.add(Validate.Format, {pattern: /^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$/});
				
            </script>
            
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php

include('footerjs.php');

?>

</body>

</html>