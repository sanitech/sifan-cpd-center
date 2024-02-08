const menuContainer = document.getElementById("menuContainer");

const toggleMenu = () => {
  menuContainer.classList.toggle("open-nav");
};

const navbar = document.querySelector(".navigation");
const body = document.querySelector("body");

const sections = document.querySelectorAll("section");
const socialMediaSection = document.querySelector(".social-media");

const observer = new IntersectionObserver(
  (entries, self) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const sectionId = entry.target.id;
        changeNavbarColor(sectionId);
        console.log(sectionId);
      }
    });
  },
  {
    root: null,
    threshold: 0.9,
  }
);

sections.forEach((section) => {
  observer.observe(section);
});

function changeNavbarColor(sectionId) {
  switch (sectionId) {
    case "details":
      navbar.classList.remove("scrolled");
      navbar.classList.remove("scrolled-linear");

      break;
    case "category":
      navbar.classList.add("scrolled");
      navbar.classList.remove("scrolled-linear");

      break;
    case "abouts":
      navbar.classList.add("scrolled");
      navbar.classList.remove("scrolled-linear");

      break;
    case "service":
      navbar.classList.remove("scrolled");
      navbar.classList.remove("scrolled-linear");

      break;
    case "teams":
      navbar.classList.add("scrolled");
      navbar.classList.remove("scrolled-linear");
      break;
    case "events":
      navbar.classList.add("scrolled");
      navbar.classList.remove("scrolled-linear");
      break;
    case "contact":
      navbar.classList.remove("scrolled");
      navbar.classList.remove("scrolled-linear");

      break;
    case "faq":
      navbar.classList.add("scrolled");
      navbar.classList.remove("scrolled-linear");

      break;
    case "aboutCard":
      navbar.classList.remove("scrolled");
      navbar.classList.add("scrolled-linear");

      break;
    default:
      navbar.classList.remove("scrolled-linear", "scrolled");
      break;
    // Add more cases for each section
  }
}

const socialFetch = () => {
  social.forEach((social) => {
    console.log(social.name);
    socialMediaSection.innerHTML += `
     <a class="mx-1.5 dark:hover:text-blue-400 text-gray-400 transition-colors duration-300 transform hover:text-blue-500" href="${social.link}" target="_blank">
                           ${social.icon}
      </a>
    `;
  });
};

socialFetch();
