<<<<<<< HEAD
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         <h1 class="page-header">Home</h1>






    <div id="chart_div" style="width: 700px; height: 300px; top: 10px; ">   

=======
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
 
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

<<<<<<< HEAD
     

      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);


      function drawChart() {
 
            var data = google.visualization.arrayToDataTable([
              ['AY 2013-2014', 'Awesome', 'Contented', 'Happy', 'Pleased', 'So-So', 'Confused', 'Disappointed', 'Annoyed', 'Frustrated'],
              ['Term 1',  <?php echo $moodData[1][0]->total; ?>,      <?php echo $moodData[2][0]->total; ?> , <?php echo $moodData[3][0]->total; ?>,  <?php echo $moodData[4][0]->total; ?> ,  <?php echo $moodData[5][0]->total; ?> ,  <?php echo $moodData[6][0]->total; ?>  ,  <?php echo $moodData[7][0]->total; ?>  ,<?php echo $moodData[8][0]->total; ?> ,  <?php echo $moodData[9][0]->total; ?> ],
              ['Term 2',  <?php echo $moodData2[1][0]->total; ?>,      <?php echo $moodData2[2][0]->total; ?> , <?php echo $moodData2[3][0]->total; ?>,  <?php echo $moodData2[4][0]->total; ?> ,  <?php echo $moodData2[5][0]->total; ?> ,  <?php echo $moodData2[6][0]->total; ?>  ,  <?php echo $moodData2[7][0]->total; ?>  ,<?php echo $moodData2[8][0]->total; ?> ,  <?php echo $moodData2[9][0]->total; ?> ],
              ['Term 3',  <?php echo $moodData3[1][0]->total; ?>,      <?php echo $moodData3[2][0]->total; ?> , <?php echo $moodData3[3][0]->total; ?>,  <?php echo $moodData3[4][0]->total; ?> ,  <?php echo $moodData3[5][0]->total; ?> ,  <?php echo $moodData3[6][0]->total; ?>  ,  <?php echo $moodData3[7][0]->total; ?>  ,<?php echo $moodData3[8][0]->total; ?> ,  <?php echo $moodData3[9][0]->total; ?> ],
          
            ]);
          
        
       

        var options = {
          title: 'Overall Mood Summary for the Learning Experience AY 2013-2014' 
        };

          var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
             chart.draw(data, options);

      }

      
    </script>
     </div>


    <div id="chart_div2" style="width: 700px; height: 300px; top: 50px">   

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

     

      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);


      function drawChart() {
 
            var data = google.visualization.arrayToDataTable([
              ['AY 2013-2014', 'Awesome', 'Contented', 'Happy', 'Pleased', 'So-So', 'Confused', 'Disappointed', 'Annoyed', 'Frustrated'],
              ['Term 1',  <?php echo $moodData4[1][0]->total; ?>,      <?php echo $moodData4[2][0]->total; ?> , <?php echo $moodData4[3][0]->total; ?>,  <?php echo $moodData4[4][0]->total; ?> ,  <?php echo $moodData4[5][0]->total; ?> ,  <?php echo $moodData4[6][0]->total; ?>  ,  <?php echo $moodData4[7][0]->total; ?>  ,<?php echo $moodData4[8][0]->total; ?> ,  <?php echo $moodData4[9][0]->total; ?> ],
              ['Term 2',  <?php echo $moodData5[1][0]->total; ?>,      <?php echo $moodData5[2][0]->total; ?> , <?php echo $moodData5[3][0]->total; ?>,  <?php echo $moodData5[4][0]->total; ?> ,  <?php echo $moodData5[5][0]->total; ?> ,  <?php echo $moodData5[6][0]->total; ?>  ,  <?php echo $moodData5[7][0]->total; ?>  ,<?php echo $moodData5[8][0]->total; ?> ,  <?php echo $moodData5[9][0]->total; ?> ],
              ['Term 3',  <?php echo $moodData6[1][0]->total; ?>,      <?php echo $moodData6[2][0]->total; ?> , <?php echo $moodData6[3][0]->total; ?>,  <?php echo $moodData6[4][0]->total; ?> ,  <?php echo $moodData6[5][0]->total; ?> ,  <?php echo $moodData6[6][0]->total; ?>  ,  <?php echo $moodData6[7][0]->total; ?>  ,<?php echo $moodData6[8][0]->total; ?> ,  <?php echo $moodData6[9][0]->total; ?> ],
          
            ]);
          
        
       

        var options = {
          title: 'Overall Mood Summary for the Activities AY 2013-2014' 
        };

          var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
             chart.draw(data, options);

      }

      
    </script>


    </div>

     <div id="chart_div3" style="width: 700px; height: 300px; top: 90px">   

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

     

      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);


      function drawChart() {
 
            var data = google.visualization.arrayToDataTable([
              ['AY 2013-2014', 'Awesome', 'Contented', 'Happy', 'Pleased', 'So-So', 'Confused', 'Disappointed', 'Annoyed', 'Frustrated'],
              ['Term 1',  <?php echo $moodData7[1][0]->total; ?>,      <?php echo $moodData7[2][0]->total; ?> , <?php echo $moodData7[3][0]->total; ?>,  <?php echo $moodData7[4][0]->total; ?> ,  <?php echo $moodData7[5][0]->total; ?> ,  <?php echo $moodData7[6][0]->total; ?>  ,  <?php echo $moodData7[7][0]->total; ?>  ,<?php echo $moodData7[8][0]->total; ?> ,  <?php echo $moodData7[9][0]->total; ?> ],
              ['Term 2',  <?php echo $moodData8[1][0]->total; ?>,      <?php echo $moodData8[2][0]->total; ?> , <?php echo $moodData8[3][0]->total; ?>,  <?php echo $moodData8[4][0]->total; ?> ,  <?php echo $moodData8[5][0]->total; ?> ,  <?php echo $moodData8[6][0]->total; ?>  ,  <?php echo $moodData8[7][0]->total; ?>  ,<?php echo $moodData8[8][0]->total; ?> ,  <?php echo $moodData8[9][0]->total; ?> ],
              ['Term 3',  <?php echo $moodData9[1][0]->total; ?>,      <?php echo $moodData9[2][0]->total; ?> , <?php echo $moodData9[3][0]->total; ?>,  <?php echo $moodData9[4][0]->total; ?> ,  <?php echo $moodData9[5][0]->total; ?> ,  <?php echo $moodData9[6][0]->total; ?>  ,  <?php echo $moodData9[7][0]->total; ?>  ,<?php echo $moodData9[8][0]->total; ?> ,  <?php echo $moodData9[9][0]->total; ?> ],
          
            ]);
          
        
       

        var options = {
          title: 'Overall Mood Summary for AY 2013-2014' 
        };

          var chart = new google.visualization.LineChart(document.getElementById('chart_div3'));
             chart.draw(data, options);

      }

      
    </script>


    </div>

}

<script src = "http://localhost/script/eval.js" type="text/javascript"></script>

 




=======

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
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f

 
 </div> 
  
  










 
