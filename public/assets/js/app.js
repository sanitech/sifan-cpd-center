const menuContainer = document.getElementById("menuContainer");

const toggleMenu = () => {
  menuContainer.classList.toggle("open-nav");
};

const navbar = document.querySelector(".navbar");
const body = document.querySelector("body");
// window.addEventListener("scroll", () => {
//   console.log(window.scrollY);
//   if (window.scrollY > 5775) {
//     navbar.classList.add("scrolled");
//     navbar.classList.remove("scrolled-linear");
//   } else if (window.scrollY > 5008) {
//     navbar.classList.remove("scrolled");
//     navbar.classList.remove("scrolled-linear");
//   } else if (window.scrollY > 3837) {
//     navbar.classList.add("scrolled");
//     navbar.classList.remove("scrolled-linear");
//   } else if (window.scrollY > 3168) {
//     navbar.classList.add("scrolled");
//     navbar.classList.remove("scrolled-linear");
//   } else if (window.scrollY > 2464) {
//     navbar.classList.remove("scrolled");
//     navbar.classList.add("scrolled-linear");
//   } else if (window.scrollY > 2336) {
//     navbar.classList.add("scrolled");
//   } else if (window.scrollY > 1947) {
//     navbar.classList.remove("scrolled");
//     navbar.classList.remove("scrolled-linear");
//   } else if (window.scrollY > 560) {
//     navbar.classList.add("scrolled");
//     navbar.classList.remove("scrolled-linear");
//   } else {
//     navbar.classList.remove("scrolled");
//     navbar.classList.remove("scrolled-linear");
//   }
// });

const sections = document.querySelectorAll("section");

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
