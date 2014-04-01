<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
   <h3>
    <span> You are evaluating </span> 
    <?php 
        if($type==1)
          echo '<span style="color:#EB3110">'.$courseCode.'</span>';
        else if($type==2)
          echo '<span style="color:#EB3110">'.$orgCode.'</span>';
        else if($type==3)
          echo '<span style="color:#EB3110">'.$eventname.'</span>';
        else if($type==4)
          echo '<span style="color:#EB3110">'.$officename.'</span>';
    ?>
   </h3>

  <div class="form">
      <?php
        if($type==1){
          echo '<h3 class="sub-header" id="eval-label" type="'.$type.'" section = "'.$section.'" courseCode ="'.$courseCode.'"> by '.$professor[0]->firstname.' '.$professor[0]->lastname. '</h3>';
        }
        else if($type==2){
          echo '<h3 class="sub-header" id="eval-label" orgCode = "'.$orgCode.'" type="'.$type.'"> by '.$orgName[0]->orgName.' </h3>';
        }
        else if($type==3){
          echo '<h3 class="sub-header" id="eval-label" eventid = "'.$eventid.'" type="'.$type.'"> by DLSU </h3>';
        }
        else if($type==4){
          echo '<h3 class="sub-header" id="eval-label" officeid = "'.$officeid.'" type="'.$type.'"> by DLSU </h3>';
        }

        $x=1;
        foreach ($question as $row){
          echo '<h3 class="question" id=question' .$x. ' questionid='.$row->questionid.'>' .$row->question. '</h3>';
          
          echo '<div class="row placeholders">
          <ul class="list-inline emotion" id="emotion'.$x.'">';

          for($i=1; $i<=9; $i++){
            echo '<li id = "'.$i.'"><div><img src = "'.base_url().'image/'.$i.'.png" class="images"><br>'.$mood[$i-1]->name.'</li>';
          }
          echo '</ul></div>';

          


          $x++;
        }
      ?>

      <h3> Recommendations </h3>

      <?php
        $j=1;
        echo '<div class = "check-group">';
        foreach($recommendation as $row){
          echo '<div class="checkbox">
            <input type="checkbox" name="optionCheckbox" id="optionCheckbox'.$j.'" value="'.$row->recommendationid.'">';
          echo '<label for"optionCheckbox'.$j.'>'
              .$row->recommendation.'
            </label>
          </div>';
          $j++;
        }

        echo '<form class="form-inline">
        <label class = "checkbox">
          <input type ="checkbox" name="optionCheckbox" id="optionCheckbox'.$j.'"value = "5">';
        echo '</label>
        <input type="text" name="optionTextbox value"" placeholder="Other">
        </form.>';  

        

        echo '</div>';

      ?>
      
      <h3> Comments (Optional)</h3>
      <div class="comments-box">
        <textarea class="form-control" id="comment" rows="4" placeholder = "i.e.: start and end the class on time"></textarea>
      </div>

        <button type="submit" class="btn btn-default" id="submit">Evaluate</button>
     
  </div>
</div>

 <script src = "http://localhost/script/eval.js" type="text/javascript"></script>
