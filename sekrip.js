// Toggle Mode Gelap & Terang
document.getElementById("themeToggle").addEventListener("click", function () {
  document.body.classList.toggle("dark-mode");

  // Ganti ikon
  if (document.body.classList.contains("dark-mode")) {
    this.classList.replace("fa-moon", "fa-sun");
  } else {
    this.classList.replace("fa-sun", "fa-moon");
  }
});
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".rainbow-bar").forEach((bar) => {
    let width = bar.getAttribute("data-value");
    bar.style.setProperty("--progress-width", width);
  });
});
document.querySelectorAll("a.nav-link").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const targetId = this.getAttribute("href").substring(1);
    document.getElementById(targetId).scrollIntoView({
      behavior: "smooth",
    });
  });
});
document.addEventListener("DOMContentLoaded", function () {
  let typedText = document.getElementById("typed-text");
  let words = ["Portfolio Saya", "wlewlewle", "Desain & Koding"];
  let index = 0;
  let charIndex = 0;
  let isDeleting = false;

  function typeEffect() {
    let currentWord = words[index];
    let currentText = currentWord.substring(0, charIndex);
    typedText.innerHTML = currentText;

    if (!isDeleting && charIndex < currentWord.length) {
      charIndex++;
      setTimeout(typeEffect, 100);
    } else if (isDeleting && charIndex > 0) {
      charIndex--;
      setTimeout(typeEffect, 50);
    } else {
      isDeleting = !isDeleting;
      if (!isDeleting) {
        index = (index + 1) % words.length;
      }
      setTimeout(typeEffect, 1500);
    }
  }

  typeEffect();
});
