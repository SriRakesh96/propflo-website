<style>
/* Preloader container styles */
.preloader-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #f3f3f3;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

/* Spinner styles */
.spinner {
  border: 8px solid #f3f3f3; /* Light grey */
  border-top: 8px solid #08CF65; /* Blue */
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: rotate 0.7s linear infinite;
}

@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
/* Mobile-specific styles */
@media (max-width: 500px) {
  .main-menu ul li a {
    font-size: 16px;
    display: none; /* Hide the links until preloader is finished */
  }
}

</style>


    
 <script>

document.addEventListener("DOMContentLoaded", () => {
  const preloader = document.querySelector(".preloader-container");
  const content = document.querySelector(".main-menu"); // This is your header, adjust if needed

  // Display the preloader for 2 seconds and show content after that
  setTimeout(() => {
    preloader.style.display = "none"; // Hide preloader
    content.style.display = "block";  // Show the menu content

    // Make sure that after preloader, the media query applies properly
    if (window.innerWidth <= 500) {
      document.querySelector(".main-menu ul li a").style.display = 'block'; // Adjust visibility for mobile if needed
    }
  }, 1800);
});



    document.addEventListener("DOMContentLoaded", () => {
  const preloader = document.querySelector(".preloader-container");
  const content = document.querySelector(".main-content");

  // Display the preloader for 2 seconds
  setTimeout(() => {
    preloader.style.display = "none";
    content.style.display = "block";
  }, 50);
});


</script>