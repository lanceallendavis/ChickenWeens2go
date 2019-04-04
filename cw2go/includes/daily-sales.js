$(document).ready(function(){
  $.ajax({
    url: "http://localhost/test/data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var date = [];
      var stock = [];

      for(var i in data) {
        date.push(data[i].stock_date);
        stock.push(+data[i].stocks);
      }

      var chartdata = {
        labels: date,
        datasets : [
          {
            label: 'Stocks sold',
            backgroundColor: 'rgba(255, 150, 15, 0.25)',
            borderColor: 'rgba(255, 150, 15, 0.75)',
            hoverBackgroundColor: 'rgba(255, 150, 15, 1)',
            hoverBorderColor: 'rgba(255, 150, 15, 1)',
            data: stock

          }
        ]
      };

      var  options = {
     scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true,
                 userCallback: function(label, index, labels) {
                     // when the floored value is the same as the value we have a whole number
                     if (Math.floor(label) === label) {
                         return label;
                     }
                 },
             }
         }],
     },
 };


      var ctx = $("#mycanvas");
      var barGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata,
        options: options

      });
    },


    error: function(data) {
      console.log(data);
    }
  });
});
