$(document).ready(function() {
  //barChart();
  lineChart();
  //areaChart();
  //donutChart();

  /*
  Creates an array that will hold device objects
  with their nicknames and calculated energy usage.
  */
  var devices = new Array();
  retrieveValues();

  $(window).resize(function() {
    //window.barChart.redraw();
    window.lineChart.redraw();
    //window.areaChart.redraw();
    //window.donutChart.redraw();
  });
});


function retrieveValues() {
    // Create an AJAX get request to fetch the array (in string form)
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "Front-End/calculate-values.php";
    var asynchronous = true;

    // Form the request and send it
    ajax.open(method, url, asynchronous);
    ajax.send();

    // Receive the response and then convert the string back to an array, before passing it on
    ajax.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            var data = JSON.parse(this.responseText);
            calculateEnergy(data)
        }
    }
}

// For each device in the array, calculate its energy usage by taking the difference
// between the current date and the last time the device was turned on (i.e. how long
// the device has currently been on for), convert it into hours, and then multiplying
// by its energy rating (watts per hour) to achieve its energy usage.
// Assign the device's nickname and its energy value as a new entry to the array of
// devices.
function calculateEnergy(data) {
    var today = new Date();
    for (var i=0; i<data.length; i++) {
        var name = data[i].Nickname;

        var d = new Date(JSON.stringify(data[i].LastOnDate));
        var time = Math.abs(today - d);
        var totHours = time/(3600*1000);

        var rating = Number(data[i].EnergyRating);
        var energy = Math.round(totHours * rating);
        
        devices[i] = {nickname:name, value:energy};
    }
    console.log(devices);
}

/* SEE THE FOLLOWING SUGGESTION WHEN MAPPING VALUES TO CHART

var added = new Array();
// When device value is mapped to the chart, add it to the array 'added' - this an array of all devices
// which have been recorded on the chart in the past.

// Loop through all devices and their values to be updated to the chart, for every device - if the device's nickname
// exists in the array (i.e. indexOf returns its index in the array) then its current value will simply be added to
// its previous value recorded on the chart.
// However, if the device's name is not found in the array (i.e. it is a new entry to the chart) then create a new
// entry of the device and its value on the chart.

for (var i=0; i<devices.length; i++) {
    var name = devices[i].Nickname;
    if (added.indexOf(name) != -1) {
        // If the device exists in the chart, just append its new
        // energy value to its previous chart value.
    }
    else {
        // Add the new device and its energy value to the chart, and then add the device to the array.
        added.push(devices[i]);
    }

    IMPORTANT
    Once all device values have been updated on the chart, update the TanthricatDevices table in the database to set the
    'LastOnDate' value of the devices used to today's date by passing a list of the nicknames and updating the table accordingly.

    This is to prevent the user from accessing the reports page, thus updating the chart for currently active devices, and then
    refreshing which would cause the values to be updated again. By setting the 'LastOnDate' to the current day, this means the 'time'
    variable used above in calculateEnergy() method will be: the current date - device LastOnDate (current day) = 0 day difference, 
    thus meaning its energy value will be 0 and so it wont add anything to its chart value until the next day at the earliest.
    
}
*/


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