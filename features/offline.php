<?php
   session_start();
   
   $servername = "localhost";
   $username = "MonkNewAdminPassword";
   $password = "MonkNewAdminPassword";
   $database = "propflo";
   
   //Local Time Zone
   date_default_timezone_set('Asia/Kolkata');
   $ltz = date("Y-m-d H:i:s");
   
   
   
   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $database);
   
   // Check connection
   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }
   
   
   /* Form POst Validation Function */
   
   function check_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
   
   //UTM DETAILS 
   
   if (isset($_GET['utm_source'])) {
     $utm_source = $_GET['utm_source'];
     $_SESSION['utm_source'] = $utm_source;
   }
   
   
   if (isset($_GET['utm_campaign'])) {
     $utm_campaign = $_GET['utm_campaign'];
     $_SESSION['utm_campaign'] = $utm_campaign;
   }
   
   
   $url='https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
   
   if($url == "https://www.propflo.ai/blog/real-estate-crm" OR $url == "https://propflo.ai/blog/real-estate-crm"){
   
       header("Location: https://www.propflo.ai/real-estate-crm");
   
   }
   
   
   elseif($url == "https://www.propflo.ai/blog/propflo-crm-is-an-intelligent-ai-driven-solution" OR $url == "https://propflo.ai/blog/propflo-crm-is-an-intelligent-ai-driven-solution"){
   
     header("Location: https://www.propflo.ai/blog/6-ways-to-empower-your-real-estate-business-with-an-intelligent-crm");
   
   }
   
   elseif($url == "https://www.propflo.ai/blog/how-an-intelligent-crm-can-resolve-user-issues-and-maximise-business-efficie" OR $url == "https://propflo.ai/blog/how-an-intelligent-crm-can-resolve-user-issues-and-maximise-business-efficie"){
   
     header("Location: https://www.propflo.ai/blog/6-ways-to-empower-your-real-estate-business-with-an-intelligent-crm");
   
   }
   
   elseif($url == "https://www.propflo.ai/blog/how-an-intelligent-crm-can-resolve-user-issues-and-maximise-business-e" OR $url == "https://propflo.ai/blog/how-an-intelligent-crm-can-resolve-user-issues-and-maximise-business-e"){
   
     header("Location: https://www.propflo.ai/blog/6-ways-to-empower-your-real-estate-business-with-an-intelligent-crm");
   
   }
   

   elseif($url == "https://www.propflo.ai//blog/how-to-craft-effective-whatsapp-templates-for-higher-delivery-rates") {
    header("Location: https://www.propflo.ai/blog/how-to-craft-effective-whatsapp-templates-for-higher-delivery-rates");
   }
   elseif($url == "https://www.propflo.ai//blog/ace-the-customer-centric-approach-like-the-leading-companies-with-real-estate-crm") {
    header("Location: https://www.propflo.ai/blog/ace-the-customer-centric-approach-like-the-leading-companies-with-real-estate-crm");
   }
   elseif($url == "https://www.propflo.ai//blog/hyderabad-hydra-crisis-propflo-offers-solutions") {
    header("Location: https://www.propflo.ai/blog/hyderabad-hydra-crisis-propflo-offers-solutions");
   }
   elseif($url == "https://www.propflo.ai//features/sales-management") {
    header("Location: https://www.propflo.ai/features/sales-management");
   }
   elseif($url == "https://www.propflo.ai//blog/chatbots-a-new-way-of--communication-in-real-estate") {
    header("Location: https://www.propflo.ai/blog/chatbots-a-new-way-of--communication-in-real-estate");
   }
   elseif($url == "https://www.propflo.ai//features/mobile-app") {
    header("Location: https://www.propflo.ai/features/mobile-app");
   }
   elseif($url == "https://www.propflo.ai//demo") {
    header("Location: https://www.propflo.ai/demo");
   }
   elseif($url == "https://www.propflo.ai//blog/top-real-estate-companies-in-india") {
    header("Location: https://www.propflo.ai/blog/top-real-estate-companies-in-india");
   }
   elseif($url == "https://www.propflo.ai//features/inventory-management") {
    header("Location: https://www.propflo.ai/features/inventory-management");
   }
   elseif($url == "https://www.propflo.ai//blog/top-real-estate-technology-innovations-in-2024") {
    header("Location: https://www.propflo.ai/blog/top-real-estate-technology-innovations-in-2024");
   }
   elseif($url == "https://www.propflo.ai//blog/customer-centric-crm-building-stronger-connections-and-driving-growth") {
    header("Location: https://www.propflo.ai/blog/customer-centric-crm-building-stronger-connections-and-driving-growth");
   }
   elseif($url == "https://www.propflo.ai//blog/the-key-to-effective-offline-marketing-in-real-estate") {
    header("Location: https://www.propflo.ai/blog/the-key-to-effective-offline-marketing-in-real-estate");
   }
   elseif($url == "https://www.propflo.ai//legal/terms-and-conditions") {
    header("Location: https://www.propflo.ai/legal/terms-and-conditions");
   }
   elseif($url == "https://www.propflo.ai//legal/privacy-policy") {
    header("Location: https://www.propflo.ai/legal/privacy-policy");
   }
   elseif($url == "https://www.propflo.ai//features/marketing-automation") {
    header("Location: https://www.propflo.ai/features/marketing-automation");
   }
   elseif($url == "https://www.propflo.ai//blog/how-social-media-is-helping-in-getting-more-prospective-clients-for-real-estate-projects") {
    header("Location: https://www.propflo.ai/blog/how-social-media-is-helping-in-getting-more-prospective-clients-for-real-estate-projects");
   }
   elseif($url == "https://www.propflo.ai//real-estate-crm") {
    header("Location: https://www.propflo.ai/real-estate-crm");
   }
   elseif($url == "https://www.propflo.ai//features/channel-partner-management") {
    header("Location: https://www.propflo.ai/features/channel-partner-management");
   }
   elseif($url == "https://www.propflo.ai//blog/how-whatsapp-automation-is-revolutionizing-the-real-estate-industry") {
    header("Location: https://www.propflo.ai/blog/how-whatsapp-automation-is-revolutionizing-the-real-estate-industry");
   }
   elseif($url == "https://www.propflo.ai//blog/exploring-real-estate-investment-in-india-trends-and-opportunities") {
    header("Location: https://www.propflo.ai/blog/exploring-real-estate-investment-in-india-trends-and-opportunities");
   }
   elseif($url == "https://www.propflo.ai//blog") {
    header("Location: https://www.propflo.ai/blog");
   }
   elseif($url == "https://www.propflo.ai//careers") {
    header("Location: https://www.propflo.ai/careers");
   }
   elseif($url == "https://www.propflo.ai//blog/how-to-target-and-reach-the-right-audience-in-the-real-estate-industry") {
    header("Location: https://www.propflo.ai/blog/how-to-target-and-reach-the-right-audience-in-the-real-estate-industry");
   }
   elseif($url == "https://www.propflo.ai//features/third-party-integrations") {
    header("Location: https://www.propflo.ai/features/third-party-integrations");
   }
   elseif($url == "https://www.propflo.ai//blog/hyderabad-real-estate-market-analysis") {
    header("Location: https://www.propflo.ai/blog/hyderabad-real-estate-market-analysis");
   }
   elseif($url == "https://www.propflo.ai//features/omni-channel-communication") {
    header("Location: https://www.propflo.ai/features/omni-channel-communication");
   }
   elseif($url == "https://www.propflo.ai//testimonals") {
    header("Location: https://www.propflo.ai/testimonals");
   }
   elseif($url == "https://www.propflo.ai//blog/swot-analysis-in-real-estate-leveraging-data-for-informed-decision-making") {
    header("Location: https://www.propflo.ai/blog/swot-analysis-in-real-estate-leveraging-data-for-informed-decision-making");
   }
   elseif($url == "https://www.propflo.ai//blog/deciding-between-hyderabad-and-bangalore") {
    header("Location: https://www.propflo.ai/blog/deciding-between-hyderabad-and-bangalore");
   }
   elseif($url == "https://www.propflo.ai//features/lead-management") {
    header("Location: https://www.propflo.ai/features/lead-management");
   }
   elseif($url == "https://www.propflo.ai//faqs") {
    header("Location: https://www.propflo.ai/faqs");
   }
   elseif($url == "https://www.propflo.ai//blog/hyderabad-housing-market-slump-causes-and-predictions") {
    header("Location: https://www.propflo.ai/blog/hyderabad-housing-market-slump-causes-and-predictions");
   }
   elseif($url == "https://www.propflo.ai//blog/why-crm-software-is-essential-for-your-real-estate-business") {
    header("Location: https://www.propflo.ai/blog/why-crm-software-is-essential-for-your-real-estate-business");
   }
   elseif($url == "https://www.propflo.ai//blog/top-real-estate-crm-softwares-in-india") {
    header("Location: https://www.propflo.ai/blog/top-real-estate-crm-softwares-in-india");
   }
   elseif($url == "https://www.propflo.ai//blog/how-to-create-effective-email-campaigns-with-low-effort-using-real-estate-crm") {
    header("Location: https://www.propflo.ai/blog/how-to-create-effective-email-campaigns-with-low-effort-using-real-estate-crm");
   }
   elseif($url == "https://www.propflo.ai//features/post-sales-management") {
    header("Location: https://www.propflo.ai/features/post-sales-management");
   }
   elseif($url == "https://www.propflo.ai//features/ai-features") {
    header("Location: https://www.propflo.ai/features/ai-features");
   }
   elseif($url == "https://www.propflo.ai//blog/whatsapp-marketing-vs-sms-marketing") {
    header("Location: https://www.propflo.ai/blog/whatsapp-marketing-vs-sms-marketing");
   }
   elseif($url == "https://www.propflo.ai//blog/email-integration-the-key-to-smoother-real-estate-crm-workflows") {
    header("Location: https://www.propflo.ai/blog/email-integration-the-key-to-smoother-real-estate-crm-workflows");
   }
   elseif($url == "https://www.propflo.ai//about") {
    header("Location: https://www.propflo.ai/about");
   }
   elseif($url == "https://www.propflo.ai//blog/revealing-6-common-myths-and-misconceptions-about-real-estate-crms") {
    header("Location: https://www.propflo.ai/blog/revealing-6-common-myths-and-misconceptions-about-real-estate-crms");
   }
   elseif($url == "https://www.propflo.ai//blog/looking-for-a-real-estate-crm-heres-a-checklist-of-features-for-data-security") {
    header("Location: https://www.propflo.ai/blog/looking-for-a-real-estate-crm-heres-a-checklist-of-features-for-data-security");
   }
   elseif($url == "https://www.propflo.ai//blog/flats-vs-apartments-key-differences") {
    header("Location: https://www.propflo.ai/blog/flats-vs-apartments-key-differences");
   }
   elseif($url == "https://www.propflo.ai//contact") {
    header("Location: https://www.propflo.ai/contact");
   }
   elseif($url == "https://www.propflo.ai//solutions/developers") {
    header("Location: https://www.propflo.ai/solutions/developers");
   }
   elseif($url == "https://www.propflo.ai//case-studies") {
    header("Location: https://www.propflo.ai/case-studies");
   }
   elseif($url == "https://www.propflo.ai//features/reports-and-dashboards") {
    header("Location: https://www.propflo.ai/features/reports-and-dashboards");
   }
   elseif($url == "https://www.propflo.ai//solutions/channel-partner") {
    header("Location: https://www.propflo.ai/solutions/channel-partner");
   }
   elseif($url == "https://www.propflo.ai//blog/top-10-fastest-growing-cities-in-india-2024") {
    header("Location: https://www.propflo.ai/blog/top-10-fastest-growing-cities-in-india-2024");
   }
   elseif($url == "https://www.propflo.ai//features/customer-app") {
    header("Location: https://www.propflo.ai/features/customer-app");
   }
   elseif($url == "https://www.propflo.ai//blog/4-revealing-insights-into-indias-booming-residential-real-estate-market") {
    header("Location: https://www.propflo.ai/blog/4-revealing-insights-into-indias-booming-residential-real-estate-market");
   }
   elseif($url == "https://www.propflo.ai//blog/india-housing-market-analysis") {
    header("Location: https://www.propflo.ai/blog/india-housing-market-analysis");
   }
   
  
   
   
   ?>