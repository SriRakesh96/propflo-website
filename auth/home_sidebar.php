<!--**********************************
   Sidebar start
   ***********************************-->


<?php

if($type=="EDITOR"){

?>
<div class="deznav">

    <div class="deznav-scroll">



        <ul class="metismenu" id="menu">

            <li class="nav-label">Main Menu</li>
            <li><a href="dashboard">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>



          
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-book"></i>
                    <span class="nav-text">Category</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="add_cat">Add Category</a></li>
                    <li><a href="manage_cat">Manage Category</a></li>
                </ul>
            </li>
   
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-earth-globe"></i>
                    <span class="nav-text">Blogs</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="add_news">Add Blogs</a></li>
                    <li><a href="manage_news">Manage Blogs</a></li>
                </ul>
            </li>


        </ul>
        <div class="copyright">
            <p style="text-align:center;"><strong> Propflo Editor Dashboard</strong> <br> © <?php echo DATE("Y"); ?>
                All Rights Reserved
            </p>
        </div>
    </div>
</div>
<?php


}


else{

?>

<div class="deznav">

    <div class="deznav-scroll">


        <ul class="metismenu" id="menu">

            <li class="nav-label">Main Menu</li>
            <li><a href="dashboard">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-user"></i>
                    <span class="nav-text">Logins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="add_login">Add Logins</a></li>
                    <li><a href="manage_login">Manage Logins</a></li>
                </ul>
            </li>

          
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-book"></i>
                    <span class="nav-text">Category</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="add_cat">Add Category</a></li>
                    <li><a href="manage_cat">Manage Category</a></li>
                </ul>
            </li>
        
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-bookmark-1"></i>
                    <span class="nav-text">Blogs</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="add_news">Add Blogs</a></li>
                    <li><a href="manage_news">Manage Blogs</a></li>
                </ul>
            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-381-earth-globe"></i>
							<span class="nav-text">Jobs</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="add_jobs">Add Jobs</a></li>
                        
                         <li><a href="manage_jobs"> Manage Jobs</a></li>
                
                        </ul>
                    </li>
                    



            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-folder"></i>
                    <span class="nav-text">Forms/Leads</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="contact_form">Contact Form</a></li>

                    <li><a href="down_cform">Download Contact Form Leads</a></li>
                    <li><a href="demo-form">Demo Form</a></li>

                    <li><a href="down_dform">Download Demo Form Leads</a></li>
                    <li><a href="popup-form">Exit Popup Form</a></li>
                </ul>
            </li>


        </ul>
        <div class="copyright">
            <p style="text-align:center;"><strong> Propflo Admin Dashboard</strong> <br> © <?php echo DATE("Y"); ?>
                All Rights Reserved
            </p>
        </div>


    </div>
</div>
<?php
      }

      ?>


<!--**********************************
   Sidebar end
   ***********************************-->