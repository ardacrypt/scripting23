// Vertical Bar Chart - Share of Canadian Assets Under China’s Control
const barCtx = document.getElementById('barChart').getContext('2d');
const barChart = new Chart(barCtx, {
  type: 'bar',
  data: {
    labels: ['2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
    datasets: [{
      label: '% of Assets',
      data: [2.0, 2.0, 1.9, 3.1, 3.5, 3.7, 3.8, 3.7, 3.5, 3.6],
      backgroundColor: 'rgba(54, 162, 235, 0.7)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
        title: {
          display: true,
          text: '% of Assets'
        }
      }
    }
  }
});


// Pie Chart - Percentage of Visitors by Mode of Transportation
const pieCtx = document.getElementById('pieChart').getContext('2d');
const pieChart = new Chart(pieCtx, {
  type: 'pie',
  data: {
    labels: ['Land', 'Air', 'Water'],
    datasets: [{
      data: [56.3, 34.3, 9.4],
      backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe']
    }]
  },
  options: {
    responsive: true,
    plugins: {
      tooltip: {
        callbacks: {
          label: function(context) {
            return context.label + ': ' + context.raw + '%';
          }
        }
      }
    }
  }
});

const ctxh = document.getElementById('horizontalBarChart').getContext('2d');
const horizontalBarChart = new Chart(ctxh, {
    type: 'bar',
    data: {
      labels: ['Alberta', 'New Brunswick', 'Nunavut', 'Yukon', 'Newfoundland and Labrador', 
        'Saskatchewan', 'Northwest Territories', 'Nova Scotia', 'Prince Edward Island', 
        'Quebec', 'Manitoba', 'Ontario', 'British Columbia'],

datasets: [{
   label: 'Month-to-Month Change ($ Millions)',
   data: [114, 13, 9, 2, 0, -2, -8, -40, -41, -47, -115, -258, -485],
            backgroundColor: function(context) {
                const value = context.raw;
                return value < 0 ? '#ff6384' : '#36a2eb';  // Red for negative, Blue for positive
            },
            borderColor: '#ccc',
            borderWidth: 1,
        }]
    },
    options: {
        indexAxis: 'y',
        scales: {
            x: {
                beginAtZero: true,
                ticks: {
                    callback: function(value) {
                        return '$' + value + 'M';  // Formatting numbers with $ and Millions suffix
                    }
                }
            }
        },
        responsive: true,
        plugins: {
            legend: {
                display: false  // You can turn off the legend if not needed
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        const value = tooltipItem.raw;
                        return (value < 0 ? '-' : '+') + '$' + Math.abs(value) + 'M';
                    }
                }
            }
        }
    }
});


const ctx = document.getElementById('salesChart').getContext('2d');
const salesChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['2019', '2020', '2021', '2022', '2023', '2024'], // X-axis (time)
        datasets: [
            {
                label: 'Total, food services and drinking places ($)',
                data: [6508240, 4313341, 6065981, 7311692, 7982850, 8113613], // Replace with actual data
                borderColor: '#ff0000',
                backgroundColor: 'rgba(255, 0, 0, 0.1)',
                fill: true,
                borderWidth: 2,
            },
            {
                label: 'Special food services ($)',
                data: [528575, 254167, 404477, 556026, 623372, 649772],
                borderColor: '#00ace6',
                backgroundColor: 'rgba(0, 172, 230, 0.1)',
                fill: true,
                borderWidth: 2,
            },
            {
                label: 'Drinking places (alcoholic beverages) ($)',
                data: [220709, 80687, 150249, 207885, 209745, 205362],
                borderColor: '#33cc33',
                backgroundColor: 'rgba(51, 204, 51, 0.1)',
                fill: true,
                borderWidth: 2,
            },
            {
                label: 'Full-service restaurants ($)',
                data: [2883769, 1441876, 2515036, 3199074, 3506385, 3502526],
                borderColor: '#9933ff',
                backgroundColor: 'rgba(153, 51, 255, 0.1)',
                fill: true,
                borderWidth: 2,
            },
            {
                label: 'Limited-service eating places ($)',
                data: [2875187, 2536611, 2996219, 3348707, 3643348, 3755953],
                borderColor: '#ffcc00',
                backgroundColor: 'rgba(255, 204, 0, 0.1)',
                fill: true,
                borderWidth: 2,
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            tooltip: {
                mode: 'index',
                intersect: false
            },
            legend: {
                position: 'top',
            }
        },
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Year'
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Thousands of Dollars'
                }
            }
        }
    }
});