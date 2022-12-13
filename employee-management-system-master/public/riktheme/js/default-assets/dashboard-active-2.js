!function(o,e,t){var a,r=t("#revenue-line-chart"),i={labels:["Apple","Samsung","Sony","Motorola","Nokia","Microsoft","Xiaomi"],datasets:[{label:"Today",data:[100,50,20,40,80,50,80],backgroundColor:"rgba(255, 64, 129, 0.45)",borderColor:"#ff4081",pointBorderColor:"#ff4081",pointBackgroundColor:"#ff4081",pointHighlightFill:"#ff4081",pointHoverBackgroundColor:"#ff4081",borderWidth:2,pointBorderWidth:2,pointHoverBorderWidth:4,pointRadius:4},{label:"Second dataset",data:[60,20,90,80,50,85,40],borderDash:[15,5],backgroundColor:"rgba(128, 222, 234, 0.2)",borderColor:"#ff4081",pointBorderColor:"#ff4081",pointBackgroundColor:"#ff4081",pointHighlightFill:"#ff4081",pointHoverBackgroundColor:"#ff4081",borderWidth:2,pointBorderWidth:2,pointHoverBorderWidth:4,pointRadius:4}]};setInterval(function(){var o=Math.round(Math.random()*(i.labels.length-1));void 0!==a&&(i.datasets[0].data[o]&&(i.datasets[0].data[o]=Math.round(100*Math.random())),i.datasets[1].data[o]&&(i.datasets[1].data[o]=Math.round(100*Math.random())),a.update())},2e3);var l,n={type:"line",options:{responsive:!0,legend:{display:!1},hover:{mode:"label"},scales:{xAxes:[{display:!0,gridLines:{display:!1},ticks:{fontColor:"#fff"}}],yAxes:[{display:!0,fontColor:"#fff",gridLines:{display:!0,color:"rgba(255,255,255,0.3)"},ticks:{beginAtZero:!1,fontColor:"#fff"}}]}},data:i},s=t("#doughnut-chart"),d={type:"doughnut",options:u={cutoutPercentage:70,legend:{display:!1}},data:{labels:["Mobile","Kitchen","Home"],datasets:[{label:"Sales",data:[3e3,500,1e3],backgroundColor:["#F7464A","#ff4081","#ff4081"]}]}},f=t("#trending-bar-chart"),p={labels:["Jan","Feb","Mar","Apr","May","June","July","Aug","Sept"],datasets:[{label:"Sales",data:[6,9,8,4,6,7,9,4,8],backgroundColor:"#6610f2",hoverBackgroundColor:"#6610f2"}]},h=1,g=10;setInterval(function(){if(void 0!==l){0;var o=Math.floor(Math.random()*(g-h+1))+h;p.datasets[0].data.shift(),p.datasets[0].data.push([o]),l.update()}},2e3);var c,b={type:"bar",options:{responsive:!0,legend:{display:!1},hover:{mode:"label"},scales:{xAxes:[{display:!0,gridLines:{display:!1}}],yAxes:[{display:!0,fontColor:"#fff",gridLines:{display:!1},ticks:{beginAtZero:!0}}]},tooltips:{titleFontSize:0,callbacks:{label:function(o,e){return o.yLabel}}}},data:p},C=t("#trending-radar-chart"),u={responsive:!0,legend:{display:!1},hover:{mode:"label"},scale:{angleLines:{color:"rgba(255,255,255,0.4)"},gridLines:{color:"rgba(255,255,255,0.2)"},ticks:{display:!1},pointLabels:{fontColor:"#fff"}}},y={labels:["Chrome","Mozilla","Safari","IE10","Opera"],datasets:[{label:"Browser",data:[5,6,7,8,6],fillColor:"rgba(255,255,255,0.2)",borderColor:"#fff",pointBorderColor:"#fff",pointBackgroundColor:"#ff4081",pointHighlightFill:"#fff",pointHoverBackgroundColor:"#fff",borderWidth:2,pointBorderWidth:2,pointHoverBorderWidth:4}]},m=1,v=10;setInterval(function(){if(void 0!==c){0;var o=Math.floor(Math.random()*(v-m+1))+m;y.datasets[0].data.pop(),y.datasets[0].data.push([o]),c.update()}},2e3);var k={type:"radar",options:u,data:y},A=t("#line-chart"),w={type:"line",options:{responsive:!0,legend:{display:!1},hover:{mode:"label"},scales:{xAxes:[{display:!0,gridLines:{display:!1},ticks:{fontColor:"#fff"}}],yAxes:[{display:!0,fontColor:"#fff",gridLines:{display:!1},ticks:{beginAtZero:!1,fontColor:"#fff"}}]}},data:{labels:["USA","UK","UAE","AUS","IN","SA"],datasets:[{label:"Sales",data:[65,45,50,30,63,45],fill:!1,lineTension:0,borderColor:"#fff",pointBorderColor:"#fff",pointBackgroundColor:"#ff4081",pointHighlightFill:"#fff",pointHoverBackgroundColor:"#fff",borderWidth:2,pointBorderWidth:2,pointHoverBorderWidth:4,pointRadius:4}]}},S=t("#polar-chart"),B={type:"polarArea",options:{responsive:!0,maintainAspectRatio:!1,responsiveAnimationDuration:500,legend:{display:!1},title:{display:!1,text:"Chart.js Polar Area Chart"},scale:{pointLabels:{fontColor:"#fff"},ticks:{beginAtZero:!0,display:!1},reverse:!1},animation:{animateRotate:!1}},data:{labels:["USA","UK","Canada","Austrelia","India","Brazil","Germany"],datasets:[{data:[4800,6e3,1800,4e3,5500,2100,3500],backgroundColor:["#f44336","#9c27b0","#3f51b5","#ff4081","#ff9800","#ff4081","#4caf50"],hoverBackgroundColor:["#FF5A5E","#ff4081","#ff4081","#ff4081","#ffb74d","#ff4081","#81c784"],label:"My dataset"}]}};o.onload=function(){a=new Chart(r,n),l=new Chart(f,b);new Chart(s,d);c=new Chart(C,k);new Chart(A,w);polarChart=new Chart(S,B)},t(function(){t("#clients-bar").sparkline([70,80,65,78,58,80,78,80,70,50,75,65,80,70,65,90,65,80,70,65,90],{type:"bar",height:"25",barWidth:7,barSpacing:4,barColor:"#ff4081",negBarColor:"#ff4081",zeroColor:"#ff4081"}),t("#sales-compositebar").sparkline([4,6,7,7,4,3,2,3,1,4,6,5,9,4,6,7,7,4,6,5,9],{type:"bar",barColor:"#F6CAFD",height:"25",width:"100%",barWidth:"7",barSpacing:4}),t("#sales-compositebar").sparkline([4,1,5,7,9,9,8,8,4,2,5,6,7],{composite:!0,type:"line",width:"100%",lineWidth:2,lineColor:"#fff3e0",fillColor:"rgba(255, 82, 82, 0.25)",highlightSpotColor:"#fff3e0",highlightLineColor:"#fff3e0",minSpotColor:"#ff4081",maxSpotColor:"#00e676",spotColor:"#fff3e0",spotRadius:4}),t("#profit-tristate").sparkline([2,3,0,4,-5,-6,7,-2,3,0,2,3,-1,0,2,3,3,-1,0,2,3],{type:"tristate",width:"100%",height:"25",posBarColor:"#ffecb3",negBarColor:"#fff8e1",barWidth:7,barSpacing:4,zeroAxis:!1}),t("#invoice-line").sparkline([5,6,7,9,9,5,3,2,2,4,6,7,5,6,7,9,9,5],{type:"line",width:"100%",height:"25",lineWidth:2,lineColor:"#E1D0FF",fillColor:"rgba(255, 255, 255, 0.2)",highlightSpotColor:"#E1D0FF",highlightLineColor:"#E1D0FF",minSpotColor:"#ff4081",maxSpotColor:"#4caf50",spotColor:"#E1D0FF",spotRadius:4}),t("#project-line-1").sparkline([5,6,7,9,9,5,3,2,2,4,6,7,5,6,7,9,9,5,3,2,2,4,6,7],{type:"line",width:"100%",height:"30",lineWidth:2,lineColor:"#ff4081",fillColor:"rgba(0, 188, 212, 0.2)"}),t("#project-line-2").sparkline([6,7,5,6,7,9,9,5,3,2,2,4,6,7,5,6,7,9,9,5,3,2,2,4],{type:"line",width:"100%",height:"30",lineWidth:2,lineColor:"#ff4081",fillColor:"rgba(0, 188, 212, 0.2)"}),t("#project-line-3").sparkline([2,4,6,7,5,6,7,9,5,6,7,9,9,5,3,2,9,5,3,2,2,4,6,7],{type:"line",width:"100%",height:"30",lineWidth:2,lineColor:"#ff4081",fillColor:"rgba(0, 188, 212, 0.2)"}),t("#project-line-4").sparkline([9,5,3,2,2,4,6,7,5,6,7,9,5,6,7,9,9,5,3,2,2,4,6,7],{type:"line",width:"100%",height:"30",lineWidth:2,lineColor:"#ff4081",fillColor:"rgba(0, 188, 212, 0.2)"})})}(window,document,jQuery);var chart,options={chart:{height:100,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{columnWidth:"30%",endingShape:"rounded"}},dataLabels:{enabled:!1},stroke:{width:2},colors:["#6610f2"],series:[{name:"Growth",data:[44,55,41,67,22,43,21,33,45,31,87,65]}],grid:{borderColor:"#f1f3fa",padding:{right:0,bottom:0,left:0}},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],offsetX:0},yaxis:{title:{text:"Growth"}},fill:{type:"gradient",gradient:{shade:"light",type:"horizontal",shadeIntensity:.25,gradientToColors:void 0,inverseColors:!0,opacityFrom:.85,opacityTo:.85,stops:[50,0,100]}}};(chart=new ApexCharts(document.querySelector("#rotate-labels-column"),options)).render(),options={chart:{height:300,type:"line",zoom:{enabled:!1},toolbar:{show:!1}},colors:["#6610f2","#ff4081"],dataLabels:{enabled:!0},stroke:{width:[3,3],curve:"smooth"},series:[{name:"Previus Week",data:[32,42,42,62,52,75,62]},{name:"Current Week",data:[42,58,66,93,82,105,92]}],grid:{row:{colors:["transparent","transparent"],opacity:.2},borderColor:"#f1f3fa"},markers:{style:"inverted",size:6},xaxis:{categories:["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],title:{text:"Week 12 - March 18, 2019 to March 24, 2019"}},yaxis:{title:{text:"Sales Analytics"},min:5,max:120},legend:{position:"top",horizontalAlign:"right",floating:!0,offsetY:-25,offsetX:-5},responsive:[{breakpoint:600,options:{chart:{toolbar:{show:!1}},legend:{show:!1}}}]},(chart=new ApexCharts(document.querySelector("#apex-line-1"),options)).render(),options={chart:{type:"radar",toolbar:{show:!1}},series:[{name:"Desktops",data:[90,50,30,40,95,20]},{name:"Tablets",data:[15,30,40,80,25,80]},{name:"Mobiles",data:[46,76,78,15,43,10]}],stroke:{width:0,curve:"smooth"},fill:{opacity:.4},markers:{size:0},legend:{show:!0,offsetY:-10},colors:["#ff4081","#ff4081","#6610f2"],labels:["2012","2013","2014","2015","2016","2017"]};