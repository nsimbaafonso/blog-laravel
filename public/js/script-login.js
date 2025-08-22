//mensagens flash
document.querySelectorAll('.close-btn-alert').forEach(button => {
  button.addEventListener('click', () => {
    const alert = button.parentElement;
    alert.style.opacity = '0';
    alert.style.transform = 'translateY(-1rem)';
    setTimeout(() => alert.remove(), 300);
  });
});
