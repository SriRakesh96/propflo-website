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
       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           // Retrieve form data and sanitize it
           $cat = $_POST['cat'];
           $news = mysqli_real_escape_string($conn, $_POST['news_title']);

           // Replace spaces with hyphens
          $url_b = str_replace(' ', '-', $_POST['url']);

          $url=strtolower($url_b);
    
           $content = mysqli_real_escape_string($conn, $_POST['content']);
           
           $meta_title=mysqli_real_escape_string($conn, $_POST['meta_title']);
   
           $meta_desc=mysqli_real_escape_string($conn, $_POST['meta_desc']);
   
           $numbers = time();
           $prefix = "PROPBLOG-";
           $news_id = $prefix . $numbers;
   
           // Handle image file upload
           if (isset($_FILES['image_upload'])) {
               $file = $_FILES['image_upload'];
   
               // Check for errors during upload
               if ($file['error'] === UPLOAD_ERR_OK) {
                   // Specify the directory where you want to save the uploaded image
                   $uploadDir = '../uploads/';
   
                   // Create the uploads directory if it doesn't exist
                   if (!is_dir($uploadDir)) {
                       mkdir($uploadDir, 0755, true);
                   }
   
                   // Get the file extension
                   $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
   
                   // Generate a unique filename for the uploaded image
                   $fileName = $news_id . '.' . $fileExtension;
   
                   // Move the uploaded file to the specified directory
                   if (move_uploaded_file($file['tmp_name'], $uploadDir . $fileName)) {
                       // File upload successful
   
                   // Construct the SQL query
   $query = "INSERT INTO `propflo_blogs` (`id`, `category`, `news_id`, `news_title`, `news_img`, `meta_title`,`url`, `meta_desc`, `news_description`, `added_on`, `added_by`, `name`, `last_upd_on`, `act`) 
   VALUES (NULL, '$cat', '$news_id', '$news', '$fileName', '$meta_title', '$url', '$meta_desc', '$content', '$ltz', '$adm_id', '$name', '', '1')";
   
   // Execute the query
   if (mysqli_query($conn, $query)) {
       mysqli_close($conn);
       echo 'success'; // Send success response
   } else {
   
       unlink($uploadDir . $fileName);
   
       echo 'error: ' . mysqli_error($conn); // Print the error message
   }
   
   
   
                   } else {
                       // File upload failed
                       echo 'Failed to upload the image.';
                   }
               } else {
                   // Error during file upload
                   echo 'An error occurred during file upload.';
               }
           }
       }
   } else {
       echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=jn63eJ\" />";
   }
   ?>