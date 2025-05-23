 // Get DOM elements
 const body = document.getElementById('body');
 const heading = document.getElementById('heading');
 const toggleBtn = document.getElementById('toggleBtn');
 const toggleCircle = document.getElementById('toggleCircle');
 const sunIcon = document.getElementById('sunIcon');
 const moonIcon = document.getElementById('moonIcon');
 const card = document.getElementById('card');
 const cardHeading = document.getElementById('cardHeading');
 const cardText = document.getElementById('cardText');
 
 // Variable to track current mode
 let darkMode = false;
 
 // Check if user has a preference in localStorage
 if (localStorage.getItem('darkMode') === 'true') {
   darkMode = true;
   enableDarkMode();
 }
 
 // Function to enable dark mode
 function enableDarkMode() {
   // Add dark mode classes
   body.classList.add('bg-gray-900');
   body.classList.add('text-white');
   
   // Update toggle button appearance
   toggleCircle.classList.add('translate-x-6');
   sunIcon.classList.add('hidden');
   moonIcon.classList.remove('hidden');
   
   // Save preference to localStorage
   localStorage.setItem('darkMode', 'true');
   
   // Update dark mode state
   darkMode = true;
 }
 
 // Function to disable dark mode
 function disableDarkMode() {
   // Remove dark mode classes
   body.classList.remove('bg-gray-900');
   body.classList.remove('text-white');
   
   // Update toggle button appearance
   toggleCircle.classList.remove('translate-x-6');
   sunIcon.classList.remove('hidden');
   moonIcon.classList.add('hidden');
   
   // Save preference to localStorage
   localStorage.setItem('darkMode', 'false');
   
   // Update dark mode state
   darkMode = false;
 }
 
 // Function to toggle dark mode
 function toggleDarkMode() {
   if (darkMode) {
     disableDarkMode();
   } else {
     enableDarkMode();
   }
 }
 
 // Add click event listener to toggle button
 toggleBtn.addEventListener('click', toggleDarkMode);