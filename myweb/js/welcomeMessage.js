  // Get DOM elements
  const welcomeHeading = document.getElementById('welcomeHeading');
  const welcomeMessage = document.getElementById('welcomeMessage');
  const timeInfo = document.getElementById('timeInfo');
  const nameInput = document.getElementById('nameInput');
  const saveBtn = document.getElementById('saveBtn');
  const funFact = document.getElementById('funFact');
  
  // Fun facts array
  const funFacts = [
    "There are more possible iterations of a game of chess than there are atoms in the observable universe.",
    "The first computer programmer was a woman named Ada Lovelace.",
    "Honey never spoils. Archaeologists have found pots of honey in ancient Egyptian tombs that are over 3,000 years old and still perfectly good to eat.",
    "A day on Venus is longer than a year on Venus. It takes 243 Earth days to rotate once on its axis, but only 225 Earth days to go around the Sun.",
    "The average person will spend six months of their life waiting for red lights to turn green.",
    "The world's oldest known living tree is over 5,000 years old."
  ];
  
  // Get random fun fact
  function getRandomFunFact() {
    const randomIndex = Math.floor(Math.random() * funFacts.length);
    return funFacts[randomIndex];
  }
  
  // Update time info
  function updateTimeInfo() {
    const now = new Date();
    timeInfo.textContent = `Current time: ${now.toLocaleTimeString()}`;
  }
  
  // Generate appropriate greeting based on time of day
  function getGreeting() {
    const hour = new Date().getHours();
    
    if (hour >= 5 && hour < 12) {
      return "Good morning";
    } else if (hour >= 12 && hour < 18) {
      return "Good afternoon";
    } else {
      return "Good evening";
    }
  }
  
  // Update welcome message
  function updateWelcomeMessage() {
    const savedName = localStorage.getItem('userName');
    const greeting = getGreeting();
    
    if (savedName) {
      welcomeHeading.textContent = `${greeting}, ${savedName}!`;
      welcomeMessage.textContent = `Welcome back to our website. We're glad to see you again!`;
    } else {
      welcomeHeading.textContent = `${greeting}!`;
      welcomeMessage.textContent = `Welcome to our website. Please enter your name to personalize your experience.`;
    }
  }
  
  // Save user name
  function saveName() {
    const name = nameInput.value.trim();
    
    if (name !== '') {
      localStorage.setItem('userName', name);
      nameInput.value = '';
      updateWelcomeMessage();
    }
  }
  
  // Initialize page
  function initPage() {
    // Update welcome message
    updateWelcomeMessage();
    
    // Update time
    updateTimeInfo();
    setInterval(updateTimeInfo, 1000);
    
    // Set random fun fact
    funFact.textContent = getRandomFunFact();
    
    // Add event listener to save button
    saveBtn.addEventListener('click', saveName);
    
    // Add event listener for Enter key on input
    nameInput.addEventListener('keypress', function(event) {
      if (event.key === 'Enter') {
        saveName();
      }
    });
  }
  
  // Run initialization
  initPage();