 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <link rel="stylesheet" href="http://localhost/style/student_main.css" style="text/css"/>
         <h1 class="page-header">Home</h1>

      <ul class="list-group" id="group-prof">
            <li class="list-group-item" id ="label-prof">
              Top Professors
            </li>
              
            <li class="list-group-item" >
            <span class="badge">1  </span>
              <?php echo $topProf[0]->total; ?>
            </li>

            <li class="list-group-item">
              <span class="badge">2</span>
               <?php echo $topProf[1]->total; ?>
            </li>
            <li class="list-group-item">
              <span class="badge">3</span>
               <?php echo $topProf[2]->total; ?>
            </li>
        </ul>
               
        <ul class="list-group" id ="group-org">
            <li class="list-group-item" id ="label-org">
              Top Organizations
            </li>
              
            <li class="list-group-item" >
            <span class="badge">1  </span>
              <?php echo $topOrg[0]->total; ?>
            </li>

            <li class="list-group-item">
              <span class="badge">2</span>
              <?php echo $topOrg[1]->total; ?>
            </li>
            <li class="list-group-item">
              <span class="badge">3</span>
              <?php echo $topOrg[2]->total; ?>
            </li>
        </ul>

        <ul class="list-group" id="group-office">
            <li class="list-group-item" id ="label-office">
              Top Offices
            </li>
              
            <li class="list-group-item" >
            <span class="badge">1  </span>
              
               <?php echo $topOffice[0]->total; ?>
            </li>

            <li class="list-group-item">
              <span class="badge">2</span>
              
               <?php echo $topOffice[1]->total; ?>
            </li>
            <li class="list-group-item">
              <span class="badge">3</span>
              
               <?php echo $topOffice[2]->total; ?>
            </li>
        </ul>


       



        
    </div>     

          
 
 </div> 
  
  










 
