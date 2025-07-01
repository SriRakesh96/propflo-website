<style>
   body {
   font-family: Arial, sans-serif;
   padding: 20px;
   }
   .scroll-container {
   max-height: 400px;
   overflow-y: auto;
   padding-right: 15px;
   }
   .highlight {
   background-color: #e0f7fa;
   }
   .menu-item {
   cursor: pointer;
   }
</style>
<div class="container">
   <div class="row mb-3">
      <div class="col-4">
         <button class="btn btn-outline-secondary menu-item" onclick="scrollToSection('inventory')">Inventory management</button>
      </div>
      <div class="col-4"> <button class="btn btn-outline-secondary menu-item" onclick="scrollToSection('purchase')">Purchase management</button></div>
      <div class="col-4"><button class="btn btn-outline-secondary menu-item" onclick="scrollToSection('sales')">Sales order management</button></div>
   </div>
   <div class="row mb-3">
      <div class="col-3">
         <button class="btn btn-outline-secondary menu-item" onclick="scrollToSection('planning')">Planning and forecasting</button>
      </div>
      <div class="col-3">  <button class="btn btn-outline-secondary menu-item" onclick="scrollToSection('production')">Production management</button></div>
      <div class="col-3">  <button class="btn btn-outline-secondary menu-item" onclick="scrollToSection('cloud')">Cloud accounting</button></div>
      <div class="col-3">   <button class="btn btn-outline-secondary menu-item" onclick="scrollToSection('warehouse')">Warehouse management</button></div>
   </div>
   <div class="scroll-container" id="scrollContainer">
      <div id="inventory" class="mb-5">
         <h4>Inventory management</h4>
         <p>Details about inventory management...</p>
         <p>Make smarter business decisions with intelligent features like AI Sales Assistant, AI Content Generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI Based Lead Insights</li>
         </ul>
         <p>Make smarter business decisions with intelligent features like AI Sales Assistant, AI Content Generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI Based Lead Insights</li>
         </ul>
      </div>
      <div id="purchase" class="mb-5">
         <h4>Purchase management</h4>
         <p>Details about purchase management...</p>
         <p>Make smarter business decisions with intelligent features like AI Sales Assistant, AI Content Generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI Based Lead Insights</li>
         </ul>
         <p>Make smarter business decisions with intelligent features like AI Sales Assistant, AI Content Generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI Based Lead Insights</li>
         </ul>
      </div>
      <div id="sales" class="mb-5">
         <h4>Sales order management</h4>
         <p>Details about sales order management...</p>
         <p>Make smarter business decisions with intelligent features like AI Sales Assistant, AI Content Generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI Based Lead Insights</li>
         </ul>
         <p>Make smarter business decisions with intelligent features like AI Sales Assistant, AI Content Generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI Based Lead Insights</li>
         </ul>
      </div>
      <div id="planning" class="mb-5">
         <h4>Planning and forecasting</h4>
         <p>Make smarter business decisions with intelligent features like AI Sales assistant, AI Content generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI based Lead insights</li>
         </ul>
         <p>Make smarter business decisions with intelligent features like AI Sales Assistant, AI Content Generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI Based Lead Insights</li>
         </ul>
      </div>
      <div id="production" class="mb-5">
         <h4>Production management</h4>
         <p>Details about production management...</p>
         <p>Make smarter business decisions with intelligent features like AI Sales Assistant, AI Content Generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI Based Lead Insights</li>
         </ul>
         <p>Make smarter business decisions with intelligent features like AI Sales Assistant, AI Content Generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI Based Lead Insights</li>
         </ul>
      </div>
      <div id="cloud" class="mb-5">
         <h4>Cloud accounting</h4>
         <p>Details about cloud accounting...</p>
         <p>Make smarter business decisions with intelligent features like AI Sales Assistant, AI Content Generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI Based Lead Insights</li>
         </ul>
         <p>Make smarter business decisions with intelligent features like AI Sales Assistant, AI Content Generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI Based Lead Insights</li>
         </ul>
      </div>
      <div id="warehouse" class="mb-5">
         <h4>Warehouse management</h4>
         <p>Details about warehouse management...</p>
         <p>Make smarter business decisions with intelligent features like AI Sales Assistant, AI Content Generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI Based Lead Insights</li>
         </ul>
         <p>Make smarter business decisions with intelligent features like AI Sales Assistant, AI Content Generator, predictive analytics, automated lead scoring, and customer insights.</p>
         <ul>
            <li>AI Sales Assistant</li>
            <li>AI Content Generator</li>
            <li>AI Based Lead Insights</li>
         </ul>
      </div>
   </div>
</div>
<script>
   const menuItems = document.querySelectorAll('.menu-item');
   const sections = document.querySelectorAll('.scroll-container > div');
   const scrollContainer = document.getElementById('scrollContainer');
   
   function scrollToSection(id) {
       const section = document.getElementById(id);
       scrollContainer.scrollTo({
           top: section.offsetTop,
           behavior: 'smooth'
       });
   }
   
   scrollContainer.addEventListener('scroll', () => {
       sections.forEach((section, index) => {
           const rect = section.getBoundingClientRect();
           if (rect.top >= 0 && rect.top <= 200) {
               menuItems.forEach(item => item.classList.remove('highlight'));
               menuItems[index].classList.add('highlight');
           }
       });
   });
</script>