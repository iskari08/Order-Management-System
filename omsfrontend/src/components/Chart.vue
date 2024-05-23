<template>
    <div>
      <canvas ref="myChart"></canvas>
    </div>
  </template>
  
  <script setup>
  import { onMounted, ref } from 'vue';
  import Chart from 'chart.js/auto';
  
  const myChart = ref(null);
  
  onMounted(() => {
    const ctx = myChart.value.getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['1 hour', '2 hours', '3 hours', '4 hours', '5 hours', '6 hours', '7 hours', '8 hours'],
        datasets: [{
          label: '# of people who spent hours in social media',
          data: [99, 112, 107, 120, 125, 110, 107, 109],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  });
  
  </script>
  
  <style scoped>
  canvas {
    max-width: 100%;
  }
  </style>
  