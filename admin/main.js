$(document).ready(function () {
    $('.tab-link').click(function () {
      $('.tab-link').removeClass('active');
      $(this).addClass('active');
      $('.tab-content').hide();
      $('#' + $(this).data('tab')).show();
    });
    $('.active').click();
  });


  

  // Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Catagory', 'From total stock'],
  ['Medicine', 1000],
  ['Medical Device', 30],
  ['Baby&Mom Products', 300],
  ['Skin Products', 200]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Items in Stock', backgroundColor: '#dbe4ec'};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}



google.charts.setOnLoadCallback(drawChart2);

function drawChart2() {
// Set Data
var data = google.visualization.arrayToDataTable([
  ['Date', 'Price'],
  [5,180],[10,500],[15,460],[20,0],[25,700],
  [30,500]
]);
// Set Options
var options2 = {
  title: 'Daily Profit',
  hAxis: {title: 'Date in February'},
  vAxis: {title: 'Profit(tk)'},
  legend: 'none',
  backgroundColor: '#dbe4ec'
};
// Draw
var chart = new google.visualization.LineChart(document.getElementById('myChart'));
chart.draw(data, options2);
}