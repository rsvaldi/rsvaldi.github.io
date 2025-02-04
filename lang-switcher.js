// Define translations in JSON format
const translations = {
  en: {
    title: "Professor John Doe",
    subtitle: "Advancing the Frontiers of Artificial Intelligence & Machine Learning",
    contact: "Email: john.doe@university.edu | Phone: +1 (555) 123-4567",
    "nav-home": "Home",
    "nav-publications": "Publications",
    "nav-teaching": "Teaching",
    "current-position-title": "Current Position",
    "current-position": "Professor of Artificial Intelligence at University of Exampleville.",
    "research-title": "Research Interests",
    "research-content": "Artificial Intelligence, Machine Learning, Computer Vision, and Ethics in AI.",
    "footer-text": "&copy; 2025 Professor John Doe. All rights reserved.",
  },
  it: {
    title: "Professor John Doe",
    subtitle: "Avanzando le frontiere dell'intelligenza artificiale e del machine learning",
    contact: "Email: john.doe@university.edu | Telefono: +1 (555) 123-4567",
    "nav-home": "Home",
    "nav-publications": "Pubblicazioni",
    "nav-teaching": "Insegnamento",
    "current-position-title": "Posizione Attuale",
    "current-position": "Professore di Intelligenza Artificiale all'Università di Exampleville.",
    "research-title": "Interessi di Ricerca",
    "research-content": "Intelligenza Artificiale, Machine Learning, Visione Computazionale, Etica nell'IA.",
    "footer-text": "&copy; 2025 Professor John Doe. Tutti i diritti riservati.",
  },
};

// Language switch logic
document.querySelectorAll(".flag-icon").forEach(flag => {
  flag.addEventListener("click", () => {
    const lang = flag.dataset.lang;
    switchLanguage(lang);
  });
});

function switchLanguage(lang) {
  const elementsToTranslate = document.querySelectorAll("[id]");
  elementsToTranslate.forEach(el => {
    const key = el.id;
    if (translations[lang][key]) {
      el.innerHTML = translations[lang][key];
    }
  });
}