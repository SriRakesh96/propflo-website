<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   

   // Assuming $conn is the database connection object
   
   // Set the number of items to display per page
   $itemsPerPage = 15;
   
   // Get the current page from the URL parameter
   $page = isset($_GET['page']) ? $_GET['page'] : 1;
   
   // Calculate the OFFSET for the SQL query
   $offset = ($page - 1) * $itemsPerPage;
   
   // Fetch the specific news articles from the database with LIMIT and OFFSET
   $fetch_article = "SELECT * FROM propflo_blogs WHERE act='1' ORDER BY id DESC LIMIT $itemsPerPage OFFSET $offset";
   $fetch_article_query = mysqli_query($conn, $fetch_article);
   
   
   include('doctype.php');
      
      ?>
<head>
<title>Blog - PropFlo</title>
    <meta content="Read popular blogs related to real estate CRM, CRM tools, CRM marketing and sales, unique real estate marketing and sales ideas, strategies &amp; tips. click here to know more" name="description" />
    <meta property="og:image" content="https://www.propflo.ai/img/propflo_share.png">
   <meta content="Best Intelligent Real Estate CRM Software India 2024 - Propflo" property="twitter:title" />
   <meta content="Be in control of your real estate business with PropFlo, the AI powered customer-centric intelligent real estate CRM software that makes managing your leads and customers easier than ever! know more." property="twitter:description" />
   <?php
      include('head.php');
       
       ?>
   <style>
.blog-head {
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Limit to 2 lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    word-wrap: break-word; /* Break long words */
    line-height: 1.4; /* Adjust to your preference */
    max-height: calc(1.4em * 2); /* 2 lines with the defined line height */
}

    .blog-head{

        font-size:20px;
        line-height:30px;
    }
      #mob-fea{
      display:none;
      }
      @media only screen and (max-width: 600px) {
      #mob-fea{
      display:block !important;
      }
      #offer-section{
      display:none !important;
      }
      .cont-ofer h2{
      font-size: 30px;
      font-weight: 700;
      line-height: 40px;
      }
      #choose{
      padding:5px !important;
      }
      }
   </style>
</head>
<body>

   <?php
      include('header.php');
      
      ?>
   <div class="ScrollSmoother-content">
      <main>
         <!-- Banner area start here -->
         <section class="banner-inner-area">
            <div class="container">
               <h2 class="section-title" style="text-align:center">Our Latest Blog and News</h2>
            </div>
         </section>
         <!-- Banner area end here -->
         <!-- Blog area start here -->
         <section class="blog-area pb-120">
            <div class="container">
               <div class="row g-4">
                  <?php
                     // Display the articles
                     while ($row = mysqli_fetch_array($fetch_article_query)) {
                         $news_title = $row['news_title'];
                         $news_content = $row['news_description'];
                         $news_img = $row['news_img'];
                         $news_cat = $row['category'];
                         $news_date = $row['news_date'];
                         $add_by = $row['added_by'];
                         $add_on = date("d-m-Y", strtotime($row['added_on']));
                     
                         $url=$row['url'];
                         $clean_url_title = urlencode(strtolower(str_replace(' ', '-', $news_title)));
                         $clean_url = "blog/$url";
                     
                         echo"   <div class=\"col-lg-4\">
                             <div class=\"blog__item\">
                                 <div class=\"blog__image image\">
                                   <a href='$clean_url'> <img src=\"uploads/$news_img\" alt=\"image\"></a>
                                   
                                  
                                   
                                 </div>
                                 <h4 class=\"mt-10 mb-15\">
                                 <a class='primary-hover blog-head' href='$clean_url'>$news_title</a></h4>
                                 <a class='fs-18 blog-btn text-font' href='$clean_url'>Read More <i
                                         class=\"fa-solid ms-1 fa-arrow-right\"></i></a>
                             </div>
                         </div>";
                                 }
                                 ?>
               </div>
               <div class="pegi justify-content-center mt-60">
               <?php
                                // Add pagination links
                                $totalArticlesQuery = mysqli_query($conn, "SELECT COUNT(*) as total FROM propflo_blogs WHERE act='1'");
                                $totalArticles = mysqli_fetch_assoc($totalArticlesQuery)['total'];
                                $totalPages = ceil($totalArticles / $itemsPerPage);

                                if ($page > 1) {
                                    echo "<a href='?page=" . ($page - 1) . "' aria-label='Previous Page' class='btn-propflo' style=\"display: flex;align-items: center;\">
                                          <svg class='w-pagination-prev-icon' height='12px' width='12px' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' transform='translate(0, 1)'>
                                                <path fill='none' stroke='currentColor' fill-rule='evenodd' d='M8 2l-4 4 4 4'></path>
                                            </svg>
                                               <div class='w-inline-block' style=\"margin-left:5px\">Previous</div>
                                           
                                          </a>";
                                }

                                if ($page < $totalPages) {
                                    echo "<a href='?page=" . ($page + 1) . "' aria-label='Next Page' class='btn-propflo' style=\"display: flex;align-items: center;\">
                                            <div class='w-inline-block' style=\"margin-right:5px\">Next</div>
                                            <svg class='w-pagination-next-icon' height='12px' width='12px' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' transform='translate(0, 1)'>
                                                <path fill='none' stroke='currentColor' fill-rule='evenodd' d='M4 2l4 4-4 4'></path>
                                            </svg>
                                          </a>";
                                }
                                ?>
               </div>
            </div>
         </section>
         <!-- Blog area end here -->
      </main>
      <?php
         include('footer.php');
          
          ?>
   </div>
   <!-- Back to top btn area start here -->
   <button id="back-top" class="btn-backToTop">
   <i class="fa-solid fa-chevron-up"></i>
   </button>
   <!-- Back to top btn area end here -->
   <?php
      include('footerjs.php');
       
       ?>