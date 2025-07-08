/**
 * EDAMIC Development - Main Script File
 * Contains all the JavaScript functionality for the website
 */

// ============== Constants and Configurations ==============
const CONFIG = {
  loadingTimeout: 2500, // milliseconds
  themeKey: 'edamic-theme',
  languageKey: 'edamic-language',
  userKey: 'edamic-user',
  usersKey: 'edamic-users'
};

// ============== DOM Elements ==============
const themeToggle = document.getElementById('theme-toggle');
const languageToggle = document.getElementById('language-toggle');
const body = document.body;
const htmlElement = document.documentElement;
const loadingElement = document.getElementById('content-loading');
const languageElements = document.querySelectorAll('[data-lang]');

// ============== Translations ==============
const TRANSLATIONS = {
  en: {
    home: "Home",
    about: "About Us",
    services: "Services",
    courses: "Courses",
    contact: "Contact",
    login: "Login",
    // ... (keep all other translations as is)
  },
  ar: {
    home: "الرئيسية",
    about: "عن الشركة",
    services: "الخدمات",
    courses: "الكورسات",
    contact: "الاتصال",
    login: "تسجيل الدخول",
    // ... (keep all other translations as is)
  }
};

// ============== State Management ==============
let currentState = {
  theme: localStorage.getItem(CONFIG.themeKey) || 'light-mode',
  language: localStorage.getItem(CONFIG.languageKey) || 'en',
  users: JSON.parse(localStorage.getItem(CONFIG.usersKey)) || [],
  currentUser: JSON.parse(localStorage.getItem(CONFIG.userKey))
};

// ============== Core Functions ==============

/**
 * Initialize the application
 */
function init() {
  applyTheme();
  applyLanguage();
  setupEventListeners();
  handleLoadingScreen();
}

/**
 * Apply the saved theme from localStorage
 */
function applyTheme() {
  if (currentState.theme === 'dark-mode') {
    body.classList.add('dark-mode');
    themeToggle.innerHTML = '☀️';
  } else {
    body.classList.remove('dark-mode');
    themeToggle.innerHTML = '🌙';
  }
}

/**
 * Apply the saved language from localStorage
 */
function applyLanguage() {
  // Set HTML direction
  htmlElement.setAttribute('dir', currentState.language === 'en' ? 'ltr' : 'rtl');
  
  // Update all translatable elements
  languageElements.forEach(el => {
    const key = el.getAttribute('data-lang');
    if (TRANSLATIONS[currentState.language][key]) {
      el.textContent = TRANSLATIONS[currentState.language][key];
    }
  });
  
  // Update language toggle button
  languageToggle.textContent = currentState.language === 'en' ? 'AR' : 'EN';
}

/**
 * Setup all event listeners
 */
function setupEventListeners() {
  // Theme toggle
  themeToggle.addEventListener('click', toggleTheme);
  
  // Language toggle
  languageToggle.addEventListener('click', toggleLanguage);
  
  // Window load events
  window.addEventListener('load', handlePageLoad);
  document.addEventListener('DOMContentLoaded', handleDOMReady);
}

/**
 * Handle loading screen display
 */
function handleLoadingScreen() {
  setTimeout(hideLoading, CONFIG.loadingTimeout);
}

/**
 * Hide loading screen
 */
function hideLoading() {
  if (loadingElement) {
    loadingElement.classList.add('hidden');
  }
}

// ============== Event Handlers ==============

/**
 * Toggle between dark and light theme
 */
function toggleTheme() {
  body.classList.toggle('dark-mode');
  
  if (body.classList.contains('dark-mode')) {
    currentState.theme = 'dark-mode';
    themeToggle.innerHTML = '☀️';
  } else {
    currentState.theme = 'light-mode';
    themeToggle.innerHTML = '🌙';
  }
  
  localStorage.setItem(CONFIG.themeKey, currentState.theme);
}

/**
 * Toggle between English and Arabic
 */
function toggleLanguage() {
  currentState.language = currentState.language === 'en' ? 'ar' : 'en';
  localStorage.setItem(CONFIG.languageKey, currentState.language);
  applyLanguage();
}

/**
 * Handle page load event
 */
function handlePageLoad() {
  hideLoading();
}

/**
 * Handle DOM ready event
 */
function handleDOMReady() {
  hideLoading();
}

// ============== User Management ==============

/**
 * Register a new user
 * @param {string} email 
 * @param {string} password 
 */
function registerUser(email, password) {
  const user = { email, password };
  currentState.users.push(user);
  localStorage.setItem(CONFIG.usersKey, JSON.stringify(currentState.users));
}

/**
 * Login a user
 * @param {string} email 
 * @param {string} password 
 * @returns {boolean} True if login successful
 */
function loginUser(email, password) {
  const user = currentState.users.find(u => u.email === email && u.password === password);
  if (user) {
    currentState.currentUser = user;
    localStorage.setItem(CONFIG.userKey, JSON.stringify(user));
    return true;
  }
  return false;
}

/**
 * Logout current user
 */
function logout() {
  currentState.currentUser = null;
  localStorage.removeItem(CONFIG.userKey);
  window.location.href = 'index.php';
}

// ============== Initialize Application ==============
document.addEventListener('DOMContentLoaded', init);