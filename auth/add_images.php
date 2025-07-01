<?php
session_start();
   
include ('offline.php');

if (!empty($_SESSION['sess_sadm_email']) && !empty($_SESSION['sess_sadm_password']))
{
	$sess_email = $_SESSION['sess_sadm_email'];

	$user_data = "SELECT * FROM propflo_admin WHERE adm_email='$sess_email'";

	$user_conn = mysqli_query($conn, $user_data);

	while ($row6 = mysqli_fetch_assoc($user_conn))
	{

		$type = $row6['adm_type'];
		
		$adm_id = $row6['adm_id'];
		
		$name = $row6['adm_name'];
		   
			 
	}
include('doctype.php');


?>

<head>


<title><?php echo $type; ?> </title>

<?php

include('head.php');


?>
  <script src="https://cdn.tiny.cloud/1/t01eqb1bmr47v9fenaj587zpx82zk1v253e4riyronggsx0e/tinymce/5.9.2/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>


   <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
	
	

<?php

include('header.php');


?>
<?php

include('home_sidebar.php');


?>

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				
                <!-- row -->
                <div class="row">
                <div class="col-lg-12">
                <div class="card">
                 
                <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add News</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                             


    <h2>Image Gallery</h2>

    <!-- Form for uploading images with AJAX -->
    <form id="uploadForm" enctype="multipart/form-data">
        <label for="image">Choose Image:</label>
        <input type="file" name="image" id="image">
        <button type="submit">Upload</button>
    </form>

    <hr>

    <!-- Display uploaded images -->
    <?php
    $galleryDir = '../uploads/';

    // Read image details from a text file
    $imageDataFile = 'image_data.txt';

    if (file_exists($imageDataFile)) {
        $imageData = unserialize(file_get_contents($imageDataFile));

        if ($imageData) {
            foreach ($imageData as $image) {
                echo '<img src="' . $galleryDir . $image['filename'] . '" alt="' . $image['filename'] . '" style="max-width: 300px; margin: 10px;">';
                echo '<p>Image Link: ' . $galleryDir . $image['filename'] . '</p>';
                echo '<hr>';
            }
        }
    }
    ?>



<script>
        $(document).ready(function() {
            // Function to handle image upload using AJAX
            $('#uploadForm').submit(function(e) {
                e.preventDefault();

                var formData = new FormData($(this)[0]);

                $.ajax({
                    type: 'POST',
                    url: 'upload.php',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Reload the gallery after successful upload
                        location.reload();
                    },
                    error: function(error) {
                        console.log(error);
                        alert('Error uploading file.');
                    }
                });
            });
        });
    </script>
                           </div>
                        </div>
                     </div>
                     <script type="text/javascript">
                        $(window).on('beforeunload', function () {
                            $("input[type=submit], input[type=button]").prop("disabled", "disabled");
                        });
                     </script>
                   
                </div>
            </div>
        </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->




        <?php

include('footer.php');


?>


    </div>
    <!--**********************************
        Main wrapper end
    ******-->
	
<?php

include('footerjs.php');


?>

</body>

</html>
    
<?php
}
   
else
{
    echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=jn63eJ\" />";
}
   
   
?>
