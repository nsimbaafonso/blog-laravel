const sidebar = document.querySelector(".sidebar");
const main = document.querySelector(".main");
const openBtn = document.querySelector(".menu-toggle");
const closeBtn = document.querySelector(".close-btn");

// Abrir menu lateral
openBtn.addEventListener("click", () => {
  sidebar.classList.add("active");
  main.classList.add("overlay");
});

// Fechar menu lateral
closeBtn.addEventListener("click", () => {
  sidebar.classList.remove("active");
  main.classList.remove("overlay");
});

// Fechar ao clicar fora
main.addEventListener("click", (e) => {
  if (main.classList.contains("overlay") && !e.target.closest(".sidebar") && !e.target.closest(".menu-toggle")) {
    sidebar.classList.remove("active");
    main.classList.remove("overlay");
  }
});

// Dropdown toggle
document.querySelectorAll(".dropdown-toggle").forEach(toggle => {
  toggle.addEventListener("click", (e) => {
    e.preventDefault();
    const parent = toggle.closest(".dropdown");
    parent.classList.toggle("active");
  });
});

//mensagens flash
document.querySelectorAll('.close-btn-alert').forEach(button => {
  button.addEventListener('click', () => {
    const alert = button.parentElement;
    alert.style.opacity = '0';
    alert.style.transform = 'translateY(-1rem)';
    setTimeout(() => alert.remove(), 300);
  });
});
