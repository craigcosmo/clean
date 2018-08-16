<template>
    <basic-line-chart :data="chartData" v-if="showChart" :styles="styles" />
</template>

<script>
    import { Line } from 'vue-chartjs'
    import Chart  from 'chart.js'

    //let draw = Chart.controllers.line.prototype.draw;
    //Chart.controllers.line.prototype.draw = function() {
    //    draw.apply(this, arguments);
    //    let ctx = this.chart.chart.ctx;
    //    let _stroke = ctx.stroke;
    //    ctx.stroke = function() {
    //        ctx.save();
    //        ctx.shadowColor = '#aaa';
    //        ctx.shadowBlur = 10;
    //        ctx.shadowOffsetX = 0;
    //        ctx.shadowOffsetY = 4;
    //        _stroke.apply(this, arguments);
    //        ctx.restore();
    //    }
    //};

    const BasicLineChart = {
      extends: Line,
      props: ['data', 'options'],
      mounted () {
        const options = this.options || {
            responsive: true, 
            maintainAspectRatio: false,
            borderWidth: 1,
            legend: {
                display: false
            },
            tooltips: {
                enabled: true,
                bodyFontFamily: 'apercu-light',
                titleFontFamily: 'apercu-light',
                cornerRadius: 0,
                yPadding: 12,
                xPadding: 12,
                callbacks: {
                  label: function(tooltipItem, data) {
                    return data.labels[tooltipItem.index].tooltip;
                  }
                }
            },
            scales: {
                yAxes: [{
                    position: 'right',
                    scaleLabel: {
                        display: false,
                        labelString: 'Pris',
                        fontFamily: 'apercu-light',
                    },
                    gridLines: {
                        display:true,
                        lineWidth: 2,
                        color: 'rgba(255, 255, 255, 0.6)'
                    },
                    ticks: {
                        beginAtZero:false,
                        fontFamily: 'apercu-light',
                        padding: -5,
                        mirror: true,
                        suggestedMin: Math.max.apply(Math, [(Math.min.apply(Math, this.data.datasets[0].data) * 0.9), 0]),
                        suggestedMax: Math.max.apply(Math, this.data.datasets[0].data) * 1.1
                    }
                }],
                xAxes: [{
                    
                    ticks: {
                        display: true,
                        fontFamily: 'apercu-light',
                        autoSkip: true,
                        maxTicksLimit: 9,
                        maxRotation: 0,
                        minRotation: 0,
                        padding: 5
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Datum',
                        fontFamily: 'apercu-light',
                    },
                    gridLines: {
                        display:true,
                        lineWidth: 2,
                        color: 'rgba(255, 255, 255, 0.6)'
                    }
                }]
            }
        }
        // let ctx = this.$refs.canvas.getContext('2d')

        // console.log('$$', this.$refs.canvas)
        // console.log('con', ctx)
        // var originalStroke = ctx.types.Line;
        // ctx.stroke = function () {
        //     ctx.save();
        //     ctx.shadowColor = '#000';
        //     ctx.shadowBlur = 10;
        //     ctx.shadowOffsetX = 0;
        //     ctx.shadowOffsetY = 4;
        //     originalStroke.apply(this, arguments)
        //     ctx.restore();
        // } 
        //console.log('thiss',this.$data._chart)



        this.addPlugin({
          id: 'kwhWeek',
          beforeDraw: function(chartInstance, easing) {
              var ctx = chartInstance.chart.ctx;
              ctx.fillStyle = '#E4ECEA'; 

              var chartArea = chartInstance.chartArea;
              ctx.fillRect(chartArea.left, chartArea.top, chartArea.right - chartArea.left, chartArea.bottom - chartArea.top);
            }
        });
        // this.addPlugin({
        //   id: 'kwhWeek',
        //   afterDatasetDraw(chart) {
        //     const ctx = chart.chart.ctx;
        //     // var originalStroke = ctx.types.Line;
        //     var originalStroke = ctx.stroke;
        //     console.log('ori', originalStroke)
        //     ctx.stroke = function () {
        //         ctx.save();
        //         ctx.shadowColor = '#000';
        //         ctx.shadowBlur = 0;
        //         ctx.shadowOffsetX = 0;
        //         ctx.shadowOffsetY = 0;
        //         originalStroke.apply(this, arguments)
        //         ctx.restore();
        //     } 
        //   },
        // });

        this.renderChart(this.data, options)
      }
    }

    export default {
        props: ['id', 'styles'],
        components: {
            BasicLineChart,
        },
        created() {
            this.draw()
        },
        data() {
            return {
                chartData: {},
                showChart: false
            }
        },
        methods: {
            

            draw() {
                axios.get('/marketdata/all/json/' + this.id).then(({ data })=> {

                    function DataPoint(date, price, volume) {
                        this.date = date;
                        this.price = price;
                        this.volume = volume;
                        this.tooltip = "Datum: " + date + ", Pris: " + price +", Volym: " + volume;
                    };

                    DataPoint.prototype.toString = function () {
                        return this.date.substring(2, 10);
                    };

                    var labels = [];
                    //let labels = data.map(data => data.date).reverse();
                    data.forEach(function(entry) {
                        var dataPoint = new DataPoint(entry.date, entry.price, entry.volume);
                        labels.unshift(dataPoint);
                    });
                    let prices = data.map(data => data.price).reverse();
                    //console.log('label', labels)
                    //console.log('price', prices)
                    this.chartData = {
                        labels: labels,
                        datasets: [
                            {
                                label: 'Price',
                                data: prices,
                                borderWidth: 3,
                                lineTension:0,
                                fill: true,
                                backgroundColor: "rgba(147, 187, 180, 0.3)",
                                borderColor: '#93BBB4',
                                pointRadius: 0,
                                pointHitRadius: 5,
                                pointBorderWidth: 0, 
                                radius: 0
                            }
                        ]
                    };

                    this.showChart = true;
                })
            } 
        }
    };
</script>
