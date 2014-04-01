 
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">


      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['AY 2013-2014', 'Awesome', 'Contented', 'Happy', 'Pleased', 'So-So', 'Confused', 'Disappointed', 'Annoyed', 'Frustrated'],
          ['Term 1',  <?php echo $awesome[0]->total; ?> ,      0 , 0,  0 ,  0 ,  0  ,  0  ,0 ,  0 ],
          ['Term 2',  20,      46, 10,30,0,0,0,0,0],
          ['Term 3',  40,       20, 40,20,0,0,0,0,0],
      
        ]);

        var options = {
          title: 'Overall Mood Summary AY 2013-2014' 
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>




 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         <h1 class="page-header">Home</h1>


    <div id="chart_div" style="width: 900px; height: 500px;"></div>

 
 </div> 
  
  










 
