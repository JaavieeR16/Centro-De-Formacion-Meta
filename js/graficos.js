const ctx = document.getElementById('lineChart');
    new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['8:00 a.m', '9:30 a.m', '10:00 a.m', '11:30 a.m', '12:00 p.m', '13:30 p.m','14:00 p.m', '15:30 a.m', '16:00 p.m', '17:30 a.m', '18:00 p.m'],
        datasets: [{
        label: 'Horas con más conectividad',
        data: [1, 10, 12, 20, 25, 5, 1, 0, 3, 8, 15],
        borderWidth: 1
        }]
    },
    options: {
        scales: {
        y: {
            beginAtZero: true
        }
        }
    },
    options:{
        responsive:true
    }
});

//Segundo gráfico

const ctxi = document.getElementById('doughnut');

  new Chart(ctxi, {
    type: 'doughnut',
    data: {
      labels: ['DAW', 'DAM', 'ASIR', 'PM', 'ADE', 'QI'],
      datasets: [{
        label: 'Cursos con más demanda',
        data: [10, 30, 8, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
    options:{
        responsive:true
    }
  });

  //Tercer gráfico

const ctxe = document.getElementById('borderRadius');

 new Chart(ctxe, {
   type: 'bar',
   data: {
     labels: ['Sanidad', 'Química', 'Informática', 'Energía', 'Administración', 'Marketing'],
     datasets: [{
       label: 'Categorias',
       data: [9, 4, 19, 5, 10, 12],
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

 //Cuarto gráfico

const ctxo = document.getElementById('polarArea');

new Chart(ctxo, {
  type: 'polarArea',
  data: {
    labels: ['DAW', 'DAM', 'ASIR', 'PM', 'ADE', 'QI'],
    datasets: [{
      label: 'Aprobados por Cursos',
      data: [12, 19, 3, 5, 10, 8],
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
