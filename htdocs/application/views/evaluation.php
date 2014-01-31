<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id ="main-content">
   <h1 class="page-header"><?php echo 'Course Evaluation' ?></h1>

  <div class="form-group">
    
      <h1 class="sub-header" align="center"> <?php echo 'WEBAPPS - Briane Samson' ?></h1>

      <?php
        $x=0;
        foreach ($question as $row){
          echo '<h2>' .$row->question. '</h2>';
          
          echo '<div class="row placeholders">
          <ul class="list-inline emotion" id="emotion'.$x.'">';

          for($i=0; $i<9; $i++){
            echo '<li id = "'.$i.'"><img src = "'.base_url().'image/'.$i.'.png" class="image"></li>';
          }
          echo '</ul></div>';

          $x++;
        }
      ?>

      <h2> Recommendations </h1>

      <?php
        $j=0;
        echo '<div class = "check-group">';
        foreach($recommendation as $row){
          echo '<div class="checkbox">
            <label>
            <input type="checkbox" name="optionCheckbox" id="optionCheckbox'.$j.'" value="'.$j.'">'
              .$row->recommendation.'
            </label>
          </div>';
          $j++;
        }
        echo '</div>';

      ?>
      

      <div class="comments-box">
        <h3> Comments </h3>

        <textarea class="form-control" rows="4" placeholder = "Optional"></textarea>
      </div>

        <button type="submit" class="btn btn-default" id="submit">Submit</button>
     
  </div>
</div>

 <script src = "http://localhost/script/eval.js" type="text/javascript"></script>
