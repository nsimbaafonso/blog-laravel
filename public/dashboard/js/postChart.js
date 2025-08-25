// 1. Posts Mais Populares
new Chart(document.getElementById('popularesChart'), {
  type: 'bar',
  data: {
    labels: ['Post A', 'Post B', 'Post C', 'Post D', 'Post E'],
    datasets: [{
      label: 'Visualizações',
      data: [850, 720, 680, 590, 500],
      backgroundColor: '#2196f3'
    }]
  },
  options: {
    responsive: true
  }
});