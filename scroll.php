<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Dynamic Scroll Section</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
       

      
      .img-fluid2{

width:100%;
}

#scroll-item{
margin:40px 0px;
}


@media only screen and (max-width: 600px) {

.div-cont{

margin-top:20px;
}

#mob-scroll{
display:block !important;
}
#web-scroll{
display:none !important;
}
}

#mob-scroll{
display:none;
}



/* Sticky image section */
.image-section {
position: sticky;
top: 0;
height: 80vh;
display: flex;
align-items: center;
justify-content: center;

}

.image-section img {
max-height: 90%;
max-width: 90%;
object-fit: contain;
}

/* Full page sections */
.section {
height: 80vh;
display: flex;
flex-direction: column;
justify-content: center;
padding: 20px;

}

.content-section h3 {
margin-bottom: 15px;
}

.container-fluid {
display: flex;
}

.col-md-6 {
padding: 0;
}

#scrl-btn{
margin-top:-80px;
}
@media only screen and (max-width: 600px) {

#scrl-btn{
margin-top:0px;
}
}
      </style>
   </head>
   <body>


   <div class="container">
            <div class="section-header mb-20 text-center">
               <h2 class="fw-600 wow splt-txt" data-splitting>Turn Leads into Closures with Smart Lead Profiles!
               </h2>
               <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                  Stay ahead of the curve with our intuitive dashboard software, real-time reports, and
                  <br>instant alerts, fuelling better, faster, and more proactive decisions.
               </p>
            </div>
    
            

            

<div class="container-fluid" id="web-scroll">
  <!-- Sticky Image Section -->
  <div id="image-section" class="col-md-6 image-section">
    <img id="dynamic-image" src="assets/img/lead-management/lm1.png" alt="Dynamic Image">
  </div>



            <!-- Scrollable Content Section -->
            <div class="col-md-6">
               <div class="section" id="section-1">
                  <h2 class="feature-title">Marketing Automation</h2>
                  <p>PropFlo equips real estate developers with tools designed to optimize property development and sales.</p>
                  <ul class="feature-list">
                     <li>Lead Capture & Management</li>
                     <p class="feature-description">Automatically capture leads from various channels for efficient follow-up.</p>
                     <li>Bulk WhatsApp Messaging</li>
                     <p class="feature-description">Send personalized messages to engage potential clients effectively.</p>
                     <li>AI Content Generator</li>
                     <p class="feature-description">Create compelling marketing content using AI tools.</p>
                     <li>Marketing Workflows</li>
                     <p class="feature-description">Manage and optimize your marketing pipelines seamlessly.</p>
                  </ul>
               </div>
               <div class="section" id="section-2">
                  <h2 class="feature-title">Presales Management</h2>
                  <p>Optimize presales activities for efficient customer engagement and lead management.</p>
                  <ul class="feature-list">
                     <li>Lead Scoring</li>
                     <p class="feature-description">Evaluate and prioritize leads based on their likelihood of conversion.</p>
                     <li>Performance Dashboard</li>
                     <p class="feature-description">Monitor and manage presales activities from a unified interface.</p>
                     <li>Lead Routing Workflows</li>
                     <p class="feature-description">Automatically assign specific leads to the right presales person.</p>
                     <li>Lead Insights</li>
                     <p class="feature-description">Get comprehensive lead data and engagement scores for better interaction.</p>
                  </ul>
               </div>
               <div class="section" id="section-3">
                  <h3 class="fw-bold mb-10">Channel Partner Management</h3>
                  <p>Simplifies partner interactions and tracks contributions to sales goals, enhancing partner relationships and accountability.
                  </p>
                  <ul class="feature-list">
                     <li>Partner Portals</li>
                     <p>Provides a white-labeled platform for partners to generate and manage leads.
                     </p>
                     <li>Performance Tracking         </li>
                     <p>Monitor partner performance and facilitate effective collaboration of your channel partners.</p>
                     <li style="display:none"><br></li>
                     <p><br><br></p>
                     <li style="display:none"><br></li>
                     <p><br><br></p>
                     <li style="display:none"><br></li>
                     <p><br><br></p>
                  </ul>
               </div>
               <div class="section" id="section-4">
                  <h2 class="feature-title">Sales Management</h2>
                  <p>Streamline sales operations for faster response times and higher conversion rates.</p>
                  <ul class="feature-list">
                     <li>Customizable Sales Processes</li>
                     <p class="feature-description">Tailor your sales strategies to meet specific project needs.</p>
                     <li>Automated Assignment</li>
                     <p class="feature-description">Assign leads to sales reps based on predefined criteria.</p>
                     <li>AI Sales Assistance</li>
                     <p class="feature-description">Utilize AI for smarter, data-driven sales strategies.</p>
                     <li>Mobile Apps</li>
                     <p class="feature-description">Empower sales teams to manage deals on the go.</p>
                  </ul>
               </div>
               <div class="section" id="section-5">
                  <h3 class="fw-bold mb-10">Post-sales Management</h3>
                  <p>Provides seamless management of post-sale processes, enhancing customer retention and satisfaction
                  </p>
                  <ul class="feature-list">
                     <li>Document Repository</li>
                     <p>Centralize all customer documents for easy access and management.
                     </p>
                     <li>Owner Management              </li>
                     <p> Manage all aspects of customer interactions post-sale to ensure continued satisfaction and referrals</p>
                     <li>Document generation</li>
                     <p> Generate bulk demand notes within seconds for all of your projects
                     </p>
                     <li style="display:none"><br></li>
                     <p><br><br></p>
                     <li style="display:none"><br></li>
                     <p><br><br></p>
                  </ul>
               </div>
               <div class="section" id="section-6">
                  <h3 class="fw-bold mb-10">Data Security</h3>
                  <p>Protects sensitive information and builds trust with clients through reliable data security measures.
                  </p>
                  <ul class="feature-list">
                     <li>Secure Access</li>
                     <p>Ensure data integrity and security with role-based access and secure data handling practices</p>
                     <li>Compliance Management             </li>
                     <p>Maintain compliance with industry standards and regulations to protect both company and client data.
                     </p>
                     <li style="display:none"><br></li>
                     <p><br><br></p>
                     <li style="display:none"><br></li>
                     <p><br><br></p>
                     <li style="display:none"><br></li>
                     <p><br><br></p>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      </div>
</div>

<script>
  // Dynamic Image Update
  const dynamicImage = document.getElementById('dynamic-image');
  const sections = document.querySelectorAll('.section');
  const images = [
    'assets/img/lead-management/lm1.png',
    'assets/img/lead-management/lm2.png',
    'assets/img/lead-management/lm3.png',
    'assets/img/lead-management/lm4.png',
    'assets/img/lead-management/lm5.png',
    'assets/img/lead-management/lm6.png'
  ];

  // Add scroll listener to change image based on section visibility
  window.addEventListener('scroll', () => {
    sections.forEach((section, index) => {
      const rect = section.getBoundingClientRect();
      if (rect.top >= 0 && rect.top < window.innerHeight / 2) {
        dynamicImage.src = images[index];
      }
    });
  });
</script>
   </body>
</html>