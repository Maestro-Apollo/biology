var chartPie = {
    labels: result_data[0],
    datasets: [{
        label: 'Bar Chart',
        data: result_data[1],
        hoverBorderWidth: 10,

        borderColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
        ],
        backgroundColor: [
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            'rgba(153, 102, 255, 0.7)',
            'rgba(255, 159, 64, 0.7)'
        ],
        hoverBorderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
        hoverBackgroundColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 2,
        hoverOffset: 4,
        offset: 6
    }]
};
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: chartPie,
    options: {
        title: {
            display: true,
            text: 'Total Number of Results',
            fontSize: 25
        },
        legend: {
            display: true,
            position: 'bottom',
        },
        animation: {
            animateScale: true
        },
        tooltips: {
            callbacks: {
                label: function(tooltipItems, data) {
                    return data.labels[tooltipItems.index] +
                        " : " +
                        data.datasets[tooltipItems.datasetIndex].data[
                            tooltipItems.index];
                }
            }
        },
        plugins: {
            datalabels: {
                color: '#fff',
                padding: 6,
                anchor: 'end',
                fillColor: '#000',
                align: 'start',
                offset: -10,
                borderWidth: 2,
                borderColor: '#fff',
                borderRadius: 25,
                backgroundColor: (context) => {
                    return context.dataset.backgroundColor;
                },
                font: {
                    weight: 'bold',

                    size: '12'
                },
                // formatter: (value) => {
                //     return value + '%';
                // },

            }
        }

    }
});