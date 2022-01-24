var data = document.currentScript.getAttribute('data');
data = JSON.parse(data);

var ctx = document.getElementById('myChart2').getContext('2d');

var myChart = new Chart(ctx, {
    plugins: [{
        beforeInit: function(chart, options) {
            chart.legend.afterFit = function() {
                this.height = this.height + 10;
            };
        }
    }],
    type: 'line',
    
    data: {
        
        labels: data[0],
        datasets: [{
            
            label: "Confirmé",
            data: data[1],
            fill : false,
            backgroundColor: 
                '#fed7d7'
            ,
            hoverBackgroundColor: 
            'rgba(240, 52, 52, 1)',
            pointRadius: 0,
            borderWidth: 2,
            borderColor: '#fdb4b4',
        },
        {
            label: "Rétablis",
            data: data[3],
            fill : false,
            backgroundColor: 
                '#c6f6d5'
            ,
            hoverBackgroundColor: 
            'rgba(240, 52, 52, 1)',
            pointRadius: 0,
            borderWidth: 2,
            borderColor: '#a7f1be'

        },
        {
            label: "Décès",
            data: data[2],
            fill : false,
            backgroundColor: 
                '#ccd7e5'
            ,
            hoverBackgroundColor: 
            'rgba(240, 52, 52, 1)',
            pointRadius: 0,
            borderWidth: 2,
            borderColor: '#bdbfc1'

        },
        {
            label: "Actif",
            data: data[7],
            fill : false,
            backgroundColor: 
                '#ffcc80'
            ,
            hoverBackgroundColor: 
            'rgba(240, 52, 52, 1)',
            pointRadius: 0,
            borderWidth: 2,
            borderColor: '#ffb84d',
        }
        ]
    },
    options: {
        legend : {  
            labels: {   
                usePointStyle: true,
            },
        },
        responsive: false,
        tooltips: {
            mode: 'index',
            intersect: false,
            callbacks: {
                label: function(tooltipItem, data) {

                    let label = data.datasets[tooltipItem.datasetIndex].label;
                    let value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    return  label +' : '+ String(value).replace(/(.)(?=(\d{3})+$)/g,'$1,')

                }
            },
        },
        hover: {
            mode: 'index',
            intersect: false,
            axis: 'x'
        },
        scales: {
            yAxes: [{
                ticks: {
                    callback: function(label, index, labels) {
                        if (label >= 1000000)
                            return label/1000000+'M';
                        if (label >= 1000) 
                            return label/1000+'k';

                        return label;
                    },
                    beginAtZero: true,
                },
                gridLines: {
                    zeroLineColor: 'rgba(0, 0, 0, 1)',
                    zeroLineWidth:1,
                    borderColor : 'rgba(200, 0, 0, 1)',
                    borderWidth: 10,
                    
                },
            }],
            xAxes: [{ 
                ticks: {
                    autoSkip: true,
                    maxTicksLimit: 18
                },
                gridLines: {
                    
                    display : false,

                } 
            }]
        }
    }
});