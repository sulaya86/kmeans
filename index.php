<!DOCTYPE html>
<html>
<title>USD-TW Exchange Rate Variation</title>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="scripts/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
Highcharts.setOptions({
    colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4']
});
 $.getJSON("clusteringall.php", function(json){

        Centroids = json[0];
        clusterMarch = json[1];
        clusterApril = json[2];

Highcharts.chart('container', {

    title: {
        text: 'USD-TW Exchange Rate Variation',
    },
    subtitle: {
        text: 'K-Means Clustering'
    },
    xAxis: {
        categories: ['','Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        gridLineWidth: 1,
        title: {
            enabled: true,
            text: 'Month'
        },
        startOnTick: true,
        endOnTick: true,
        showLastLabel: true
    },
    yAxis: {
        title: {
            text: 'Exchange Rate'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'right'
    },
    series: [
      {
        name: 'Centroids',
        type: 'scatter',
        color: Highcharts.getOptions().colors[1],
        data: Centroids

    },
     {
        name: 'Cluster 1 (March)',
        type: 'scatter',
        color: Highcharts.getOptions().colors[2],
        data: clusterMarch

    },
    {
   
        name: 'Cluster 2 (April)',
        type: 'scatter',
        color: Highcharts.getOptions().colors[3],
        data: clusterApril

    }
    ],
    tooltip: {
        headerFormat: '<b>{series.name}</b><br>',
        pointFormat: '{point.x} Month, {point.y} NTD'
    }
});  

});
    });
</script>
<body>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>


</body>
</html>