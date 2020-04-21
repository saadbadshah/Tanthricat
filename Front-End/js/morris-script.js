$(document).ready(function() {
  //barChart();
  lineChart();
  //areaChart();
  //donutChart();
  retrieveValues();

  $(window).resize(function() {
    //window.barChart.redraw();
    window.lineChart.redraw();
    //window.areaChart.redraw();
    //window.donutChart.redraw();
  });
});



var devices = new Array();

function retrieveValues() {
  // call ajax
  var ajax = new XMLHttpRequest();

  // sending ajax request to php file containing array
  ajax.open("GET", "../calculate-values.php", true);
  ajax.send();

  // receiving response from calculate-values.php
  ajax.onreadystatechange = function ()
  {
      if (this.readyState == 4 && this.status == 200)
      {
          // converting JSON back to array
          devices = JSON.parse(this.responseText);
          // console.log(values);
      }

  }

  calculateEnergy();
}
function calculateEnergy() {
  // Calculating energy usage for each device
  for (var i=0; i<devices.length; i++) {

    var date = new Date();
    var time = Math.abs(date - devices[i][2]);
    var totHours = time/3600000;
    var energy = Math.round(totHours * devices[i][1]);
    
    devices[i] = {nickname:devices[i][0], value:energy};
 	//console.log(devices[i]);
  }

}
//console.log(devices[0]);
 //console.log(devices[0].value);

// Use devices[index].nickname for device name
// and devices[index].value for how much energy it has used


function barChart() {
  window.barChart = Morris.Bar({
    element: 'bar-chart',
    data: [
      { y: '2006', a: 100, b: 90 },
      { y: '2007', a: 75,  b: 65 },
      { y: '2008', a: 50,  b: 40 },
      { y: '2009', a: 75,  b: 65 },
      { y: '2010', a: 50,  b: 40 },
      { y: '2011', a: 75,  b: 65 },
      { y: '2012', a: 100, b: 90 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    lineColors: ['#1e88e5','#ff3321'],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}

function lineChart() {
  window.lineChart = Morris.Line({
    element: 'line-chart',
    data: [
      { y: '2006', a: 100, b: 90 },
      { y: '2007', a: 75,  b: 65 },
      { y: '2008', a: 50,  b: 40 },
      { y: '2009', a: 75,  b: 65 },
      { y: '2010', a: 50,  b: 40 },
      { y: '2011', a: 75,  b: 65 },
      { y: '2012', a: 100, b: 90 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    lineColors: ['#1e88e5','#ff3321'],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}

function areaChart() {
  window.areaChart = Morris.Area({
    element: 'area-chart',
    data: [
      { y: '2006', a: 100, b: 90, c:50},
      { y: '2007', a: 75,  b: 65, c:28},
      { y: '2008', a: 50,  b: 40, c:75},
      { y: '2009', a: 75,  b: 65, c:75},
      { y: '2010', a: 50,  b: 40, c:75},
      { y: '2011', a: 75,  b: 65, c:75},
      { y: '2012', a: 100, b: 90, c:75}
    ],
    xkey: 'y',
    ykeys: ['a', 'b','c'],
    labels: ['Series A', 'Series B','Series C'],
    lineColors: ['#1e88e5','#ff3321','#2e4521'],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}

function donutChart() {
  window.donutChart = Morris.Donut({
  element: 'donut-chart',
  data: [
    {label: "Download Sales", value: 50},
    {label: "In-Store Sales", value: 25},
    {label: "Mail-Order Sales", value: 5},
    {label: "Uploaded Sales", value: 10},
    {label: "Video Sales", value: 10}
  ],
  resize: true,
  redraw: true
});
}

function pieChart() {
  var paper = Raphael("pie-chart");
paper.piechart(
  100, // pie center x coordinate
  100, // pie center y coordinate
  90,  // pie radius
   [18.373, 18.686, 2.867, 23.991, 9.592, 0.213], // values
   {
   legend: ["Windows/Windows Live", "Server/Tools", "Online Services", "Business", "Entertainment/Devices", "Unallocated/Other"]
   }
 );
}