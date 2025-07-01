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
                  <h4 class="card-title">Add Blogs</h4>
               </div>
               <div class="card-body">
                  <div class="basic-form">
                     <div>
                        <form id="uploadForm" method="POST" enctype="multipart/form-data" action="" onsubmit="uploadFile(); return false;">
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label>Category</label>
                                 <select class="form-control" name="cat">
                                 <?php 
                                    $sel_cat = "SELECT * FROM propflo_category WHERE act='1'";
                                    $sel_qcat = mysqli_query($conn, $sel_cat);
                                    
                                    while ($row4 = mysqli_fetch_array($sel_qcat)) {
                                        $cat_name = $row4['cat_name'];
                                        echo "<option value=\"$cat_name\">$cat_name</option>";
                                    }
                                    ?>
                                 </select>
                              </div>

                              <div class="form-group col-md-6"></div>
                             




                              <div class="form-group col-md-6">
                                 <label>Blog Title</label>
                                 <input type="text" class="form-control" id="job_name" name="news_title" placeholder="Enter Blog Title">
                              </div>


                              <div class="form-group col-md-6">
                                 <label>Blog Image</label>
                                 <input type="file" class="form-control" id="image_upload" name="image_upload">
                                 
                              </div>
                              <style>
                                 .custom-textarea {
                                 height: 100px;
                                 }
                                 .tox-tinymce {
                                 height: 450px !important;
                                 }
                              </style>


                              <div class="form-group col-md-12">
                                 <label>Meta Title</label> 
                                 <input type="text" class="form-control" name="meta_title" placeholder="Enter Meta Title">
                              </div>


                              <div class="form-group col-md-6">
                                 <label>Blog Url</label>
                                 <input type="text" class="form-control" name="url" placeholder="Enter Slug">
                              </div>

                          
                              <div class="form-group col-md-12">
                                 <label>Meta Description</label>
                                 <input type="text" class="form-control" name="meta_desc" placeholder="Enter Meta Description">
                              </div>



                              <div class="form-group col-md-12">
                                 <label>Blog Content</label>
                                 <textarea id="news_description" class="custom-textarea" name="content" rows="10"></textarea>
                              </div>
                           </div>
                           <input type="submit" class="btn btn-primary" id="submit" name="add_job" value="Add Blogs">
                        </form>
                     </div>
                     <script>
                        tinymce.init({
                            selector: 'textarea',
                            plugins: 'advlist autolink lists link image charmap print preview hr anchor searchreplace wordcount code',
                            toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | link image | removeformat | heading',
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
                        
                        
                        function uploadFile() {
                            const form = document.getElementById('uploadForm');
                            const fileInput = document.getElementById('image_upload');
                            const progress = document.getElementById('image_upload_progress');
                            const status = document.getElementById('image_upload_status');
                        
                            const formData = new FormData(form);
                        
                            // Get the TinyMCE content and append it to the FormData
                            const newsDescription = tinymce.get('news_description').getContent();
                            formData.append('content', newsDescription);
                        
                            const xhr = new XMLHttpRequest();
                            xhr.open('POST', 'add_news_pro.php', true);
                        
                            xhr.upload.addEventListener('progress', updateProgress);
                            xhr.addEventListener('load', uploadComplete);
                            xhr.addEventListener('error', uploadFailed);
                            xhr.addEventListener('abort', uploadCanceled);
                        
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === 4 && xhr.status === 200) {
                                    if (xhr.responseText === 'success') {
                                        alert('Blog added successfully!');
                                        window.location.href = 'manage_news';
                                    } else {
                                        alert('Failed to add Blog Please try again.');
                                    }
                                }
                            };
                        
                            xhr.send(formData);
                        
                            function updateProgress(event) {
                                if (event.lengthComputable) {
                                    const percentComplete = (event.loaded / event.total) * 100;
                                    progress.value = percentComplete;
                                    status.innerText = percentComplete + '% uploaded';
                                }
                            }
                        
                            function uploadComplete(event) {
                                status.innerText = 'Upload completed!';
                            }
                        
                            function uploadFailed(event) {
                                status.innerText = 'Upload failed!';
                            }
                        
                            function uploadCanceled(event) {
                                status.innerText = 'Upload canceled!';
                            }
                        }
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