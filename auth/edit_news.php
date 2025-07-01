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


 <!-- <script src="https://cdn.tiny.cloud/1/noxdzcquitqa1g550ym1c0lvkawp8gftogelv9pwg3eecl4v/tinymce/5.9.2/tinymce.min.js" referrerpolicy="origin"></script>
   -->
   
   <!-- <script src="https://cdn.tiny.cloud/1/a7nac8oouj4wyv1vlkmimrkg0z6vsw6n5o395l2svoqqu8tj/tinymce/5.9.2/tinymce.min.js" referrerpolicy="origin"></script>-->
      
     <!-- New Key Created with Incor Marcom Email ID -->
     <script src="https://cdn.tiny.cloud/1/a7nac8oouj4wyv1vlkmimrkg0z6vsw6n5o395l2svoqqu8tj/tinymce/5.9.2/tinymce.min.js" referrerpolicy="origin"></script>
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
                           <h4 class="card-title">Edit Blog</h4>
                        </div>
                        <div class="card-body">
                           <div class="basic-form">
                              <form id="editForm" method="POST" enctype="multipart/form-data">
                                 
                                 <?php
                                    $news_id=$_GET['news_id'];
                                    $jquery = "SELECT * FROM propflo_blogs  WHERE news_id='$news_id' ORDER BY id DESC";
                                    $jresult = mysqli_query($conn, $jquery);
                                    
                                    while ($row4 = mysqli_fetch_array($jresult)) {
                                      
                                        $news_img = $row4['news_img'];
                                        $title = $row4['news_title'];
                                        $meta_title = $row4['meta_title'];
                                        $meta_desc = $row4['meta_desc'];

                                        $url=$row4['url'];

                                        $hschema=$row4['head_scripts'];
                                        
                                        $added = $row4['added_on'];
                                        $news_desc = $row4['news_description'];
                                    }
                                    ?>


                                 <input type="hidden" name="news_id" value="<?php echo $news_id; ?>">
                                 <div class="form-row">
                                    <div class="form-group col-md-12">
                                       <label>Blog Title</label>
                                       <input type="text" class="form-control" name="news_title" placeholder="Enter Blog Title" value="<?php echo $title; ?>">
                                    </div>
                                   
                                    <div class="form-group col-md-6">
                                       <?php if (!empty($news_img)) : ?>
                                       <label>Current Image</label>
                                       <img src="../uploads/<?php echo $news_img; ?>" alt="Current Image" width="150">  <a href="?img=<?php echo $news_img; ?>&news_id=<?php echo $news_id; ?>" style="background-color:#33bdec; color:#000; border-radius:20px;padding:5px">Delete Image</a>
                                      
    <!-- Add this hidden input field to capture the current image name -->
        <input type="hidden" name="current_img" value="<?php echo $news_img; ?>">


        <br>
                                       <?php else : ?>
                                       <div class="form-group col-md-6">
                                          <label>Image</label>
                                          <input type="file" class="form-control" id="image_upload" name="image_upload">
                                          
                                       </div>
                                       <?php endif; ?>
                                    </div>

                                    <div class="form-group col-md-12">
                                 <label>Meta Title</label> 
                                 <input type="text" class="form-control" name="meta_title" placeholder="Enter Meta Title" value="<?php echo $meta_title; ?>">
                              </div>


                              <div class="form-group col-md-6">
                                 <label>Blog Url</label>
                                 <input type="text" class="form-control" name="url" placeholder="Enter Slug" value="<?php echo $url; ?>">
                              </div>

                          
                              <div class="form-group col-md-12">
                                 <label>Meta Description</label>
                                 <input type="text" class="form-control" name="meta_desc" placeholder="Enter Meta Description" value="<?php echo $meta_desc; ?>">
                              </div>

                              <div class="form-group col-md-12">
                                       <label>Head Tag (Scripts/Schema Optional)</label>
                                       <textarea  class="form-control" name="schema" rows="8"><?php echo $hschema; ?></textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                       <label>Blog Content</label>
                                       <textarea id="news_description" class="custom-textarea" name="content" rows="20"><?php echo $news_desc; ?></textarea>
                                    </div>
                                    <?php
                                       $nimg = $_GET['img'];
                                       
                                       $nid=$_GET['news_id'];
                                       
                                       
                                       if(!empty($nimg)){
                                       
                                           $currentImage = "../uploads/" . $nimg;
                                       
                                           if (!empty($nimg) && file_exists($currentImage)) {
                                               unlink($currentImage);
                                       
                                       
                                               // Set the news_img column in the database to NULL or an empty string, depending on your setup
                                       $updateSql = "UPDATE propflo_blogs SET news_img = '' WHERE news_id = '$nid'";
                                       mysqli_query($conn, $updateSql);
                                       
                                           echo "<meta http-equiv=\"refresh\" content=\"0;url=edit_news?news_id=$nid\" />";
                                       
                                       
                                       
                                           }
                                           
                                       
                                       
                                       }
                                       
                                           
                                       
                                       ?>
                                 </div>
                                 <input type="submit" class="btn btn-primary" id="submit" name="edit_news" value="Edit Blog">
                              </form>
                              <script>
                                 function confirmDelete() {
                                     var result = confirm("Are you sure you want to delete the current image?");
                                     if (result) {
                                         document.getElementById('deleteImageInput').value = "1"; // Set the value to indicate image deletion
                                         document.getElementById('newImage').style.display = 'block'; // Show the upload image input
                                     }
                                 }
                              </script>
                           </div>
                        </div>
                     </div>
                     <script type="text/javascript">
                        $(window).on('beforeunload', function () {
                            $("input[type=submit], input[type=button]").prop("disabled", "disabled");
                        });
                     </script>
                     <script>
                        tinymce.init({
                           selector: '#news_description',
                                    plugins: 'advlist autolink lists link image charmap print preview hr anchor searchreplace wordcount code media',
                            toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | link image media | removeformat | heading | code',
                             menubar: false,
                                    style_formats: [
                                        { title: 'Heading 1', format: 'h1' },
                                        { title: 'Heading 2', format: 'h2' },
                                        { title: 'Heading 3', format: 'h3' },
                                        { title: 'Heading 4', format: 'h4' },
                                        { title: 'Heading 5', format: 'h5' },
                                        { title: 'Heading 6', format: 'h6' }
                                    ],
                        images_upload_handler: function (blobInfo, success, failure) {
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', 'image_upload_handler.php', true);
                        
                        const formData = new FormData();
                        formData.append('image', blobInfo.blob(), blobInfo.filename());
                        
                        xhr.onload = function () {
                        if (xhr.status === 200) {
                        const response = JSON.parse(xhr.responseText);
                        success(response.url);
                        } else {
                        failure('Image upload failed');
                        }
                        };
                        
                        xhr.send(formData);
                        }
                        });
                        
                     </script>
                     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                     <script>
                        $(document).ready(function () {
                            $('#editForm').submit(function (e) {
                                e.preventDefault();
                        
                                // Your existing form data
                                var formData = new FormData($(this)[0]);
                        
                                // Get the TinyMCE content and append it to the FormData
                                var newsDescription = tinymce.get('news_description').getContent();
                                formData.append('content', newsDescription);
                        
                                // AJAX code to submit the form
                                $.ajax({
                                    url: 'edit_news_pro.php',
                                    type: 'POST',
                                    data: formData,
                                    contentType: false,
                                    processData: false,
                                    xhr: function () {
                                        var xhr = new XMLHttpRequest();
                                        xhr.upload.addEventListener('progress', function (event) {
                                            if (event.lengthComputable) {
                                                var percentComplete = (event.loaded / event.total) * 100;
                                                $('#new_image_upload_progress').val(percentComplete);
                                                $('#new_image_upload_status').text(percentComplete + '% uploaded');
                                            }
                                        }, false);
                                        return xhr;
                                    },
                                    success: function (response) {
                                        if (response === 'success') {
                                            alert('Blog edited successfully!');
                                            window.location.href = 'manage_news.php';
                                        } else {
                                            alert('Failed to edit news. Please try again.');
                                        }
                                    },
                                    error: function () {
                                        alert('Error occurred while editing news. Please try again.');
                                    }
                                });
                            });
                        });
                     </script>
                     </form>
                     <script type="text/javascript">
                        $(window).on('beforeunload', function () {
                            $("input[type=submit], input[type=button]").prop("disabled", "disabled");
                        });
                     </script>
                     <script type="text/javascript">
                        var dname = new LiveValidation('name', { validMessage: 'validated', wait: 100});
                                 	dname.add(Validate.Presence, {failureMessage: "Name can not be Blank!"});
                                 	dname.add( Validate.Length, { minimum: 3 } );
                                 	dname.add( Validate.Length, { maximum: 20} );
                        	dname.add(Validate.Format, {pattern: /^[a-z ,.'-]+$/i});
                        	
                        var phone = new LiveValidation('phone', { validMessage: 'validated', wait: 100});
                                 	phone.add(Validate.Presence, {failureMessage: "Phone Number can not be Blank!"});
                        
                        	phone.add(Validate.Format, {pattern: /^[6789][0-9]{9}$/i});
                        	
                        	
                        
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
       echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid.php?ms_id=jn63eJ\" />";
   }
        
   ?>