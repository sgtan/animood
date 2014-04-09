$(function () {
    
        var colors = ['#000066', '#003300', '#003333', '#cc0033', '#660066', '#663333', '#991f00', '#4c0f00', '#990000'],
            categories = ['awesome', 'contented', 'happy', 'pleased', 'so-so', 'confused', 'disappointed', 'annoyed', 'frustrated'],
            name = 'Moods',
            data = [{
                    y: 30,
                    color: colors[0],
                    drilldown: {
                        name: 'awesome',
                        categories: ['awesome'],
                        data: [30],
                        color: colors[0]
                    }
                }, {
                    y: 10,
                    color: colors[1],
                    drilldown: {
                        name: 'contented',
                        categories: ['contented'],
                        data: [10],
                        color: colors[1]
                    }
                }, {
                    y: 10,
                    color: colors[2],
                    drilldown: {
                        name: 'happy',
                        categories: ['happy'],
                        data: [10],
                        color: colors[2]
                    }
                }, {
                    y: 10,
                    color: colors[3],
                    drilldown: {
                        name: 'pleased',
                        categories: ['pleased'],
                        data: [10],
                        color: colors[3]
                    }
                }, {
                    y: 2,
                    color: colors[4],
                    drilldown: {
                        name: 'so-so',
                        categories: ['so-so'],
                        data: [2],
                        color: colors[4]
                    }
                }, {
                    y: 5,
                    color: colors[5],
                    drilldown: {
                        name: 'confused',
                        categories: ['confused'],
                        data: [5],
                        color: colors[5]
                    } 
                }, {
                    y: 5,
                    color: colors[6],
                    drilldown: {
                        name: 'disappointed',
                        categories: ['disappointed'],
                        data: [6],
                        color: colors[6]
                    } 
                }, {
                    y: 5,
                    color: colors[7],
                    drilldown: {
                        name: 'annoyed',
                        categories: ['annoyed'],
                        data: [7],
                        color: colors[7]
                    } 
                }, {
                    y: 5,
                    color: colors[8],
                    drilldown: {
                        name: 'frustrated',
                        categories: ['frustrated'],
                        data: [8],
                        color: colors[8]
                    } 
                }];
    
    
        // Build the data arrays
        var moodData = [];
        for (var i = 0; i < data.length; i++) {
    
            // add data
            moodData.push({
                name: categories[i],
                y: data[i].y,
                color: data[i].color
            });
    
        }
    
        // Build the chart
        $('#mood-pie').highcharts({
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Mood Summary'
            },
            plotOptions: {
                pie: {
                    shadow: false,
                    center: ['50%', '50%'],
                    showInLegend: true
                }

            },
            tooltip: {
                valueSuffix: '%'
            },
            series: [{
                name: 'Moods',
                data: moodData,
                size: '110%',
                dataLabels: {
                    formatter: function() {
                        return this.y > 5 ? this.point.name : null;
                    },
                    color: 'white',
                    distance: -30
                }
            }]
        });
    });
    
