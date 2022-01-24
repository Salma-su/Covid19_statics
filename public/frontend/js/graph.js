var type=0;
var data = document.currentScript.getAttribute('data');
data = JSON.parse(data);

var Titles = [['Nouveaux cas','#fdb4b4'], ['Nouveaux guérisons','#a7f1be'], ['Nouveaux décès','#bdbfc1']];

var ctx = document.getElementById('myChart1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    
    data: {
        
        labels: data[0],
        datasets: [{
            
            label: Titles[type][0],
            data: data[4],
            fill : false,
            backgroundColor: 
                Titles[type][1]
            ,

            hoverBackgroundColor: 
            'rgba(240, 52, 52, 1)',
            
            borderWidth: 1
            
        }]
    },
    options: {
        legend : {
            display: false
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
            }
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


function OnSelectionChangeGraph()
{
    var e = document.getElementById("type");
    type = e.value;
    type=parseInt(type);
    
    myChart.data.datasets.forEach((dataset) => {
        dataset.data= data[type+4];
        dataset.label= Titles[type][0];
        dataset.backgroundColor = Titles[type][1];
    });
    myChart.update();
}