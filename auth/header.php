     <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
        <a href="dashboard" class="brand-logo">
               <img src="assets/img/logo.svg" alt="Assetmonk Logo" width="85%">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
	
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="input-group search-area right d-lg-inline-flex d-none">
                            <h4 style="color:#89879f">Logged In As : <?php echo $type; ?></h4>
							</div>
                        </div>
                        <ul class="navbar-nav header-right main-notification">
						
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="assets/icon.png" width="20" alt=""/>
									<div class="header-info">
                                    <span><?php echo $name; ?></span>
										<small><?php echo $type; ?></small>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                   
                                    
                                    <a href="logout" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
				
			</div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->