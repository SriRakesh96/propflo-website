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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission and image update here
    $news_id = $_POST['news_id'];

    $news_title = mysqli_real_escape_string($conn,$_POST['news_title']);

    $meta_title=mysqli_real_escape_string($conn,$_POST['meta_title']);

    $meta_desc=mysqli_real_escape_string($conn,$_POST['meta_desc']);

     // Replace spaces with hyphens
     $url_b = str_replace(' ', '-', $_POST['url']);

     $url=strtolower($url_b);
     $hschema = $_POST['schema'];

     // Escape the input to prevent SQL injection
     $escaped_hschema = mysqli_real_escape_string($conn, $hschema);

    $newsDescription = isset($_POST['content']) ? $conn->real_escape_string($_POST['content']) : '';

$curr_img=$_POST['current_img'];
if(!empty($curr_img)){

 // Update the other fields in the database
 $updateSql = "UPDATE propflo_blogs SET news_title = '$news_title', meta_title='$meta_title', url='$url', meta_desc='$meta_desc', head_scripts=' $escaped_hschema', news_description = '$newsDescription', name='$name', last_upd_on='$ltz' WHERE news_id = '$news_id'";
 $result = mysqli_query($conn, $updateSql);


    }


    else{



    // Check if a new image is uploaded
    $image_upload = $_FILES['image_upload'];
    if ($image_upload['error'] == UPLOAD_ERR_OK) {
        $upload_dir = "../uploads/";
        
    // Set the image name based on $news_id
    $image_name = $news_id . "_" . basename($image_upload['name']);
    $target_path = $upload_dir . $image_name;

    move_uploaded_file($image_upload['tmp_name'], $target_path);

    // Update the news_img column in the database with the new image name
    $updateSql = "UPDATE propflo_blogs SET news_img = '$image_name' WHERE news_id = '$news_id'";
    mysqli_query($conn, $updateSql);
}
    // Update the other fields in the database
    $updateSql = "UPDATE propflo_blogs SET news_title = '$news_title', meta_title='$meta_title', meta_desc='$meta_desc', head_scripts='$escaped_hschema', news_description = '$newsDescription', name='$name', name='$name', last_upd_on='$ltz' WHERE news_id = '$news_id'";
    $result = mysqli_query($conn, $updateSql);


}
    if ($result) {
        echo 'success';
    } else {
        echo 'error';
    }
    exit;
}
} 

else {
    echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=jn63eJ\" />";
}
?>

