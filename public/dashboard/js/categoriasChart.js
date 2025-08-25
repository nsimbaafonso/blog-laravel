// 1. Visitas ao Blog
new Chart(document.getElementById('categoriasChart').getContext('2d'), {
    type: 'doughnut',
    data: {
      labels: ['Notícias', 'Tutoriais', 'Opinião', 'Eventos', 'Tech'],
      datasets: [{
        label: 'Posts por Categoria',
        data: [25, 40, 15, 10, 30], // números de posts por categoria
        backgroundColor: [
          '#FF6384', // rosa
          '#36A2EB', // azul
          '#FFCE56', // amarelo
          '#4BC0C0', // verde-água
          '#9966FF'  // roxo
        ],
        hoverOffset: 8
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom'
        },
        title: {
          display: true,
          text: 'Posts por Categoria'
        }
      }
    }
  });
