<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
   <h1 class="page-header">
    <?php 
        if($type==1)
          echo 'You are evaluating ' .$courseCode;
        else if($type==2)
          echo 'You are evaluating ' .$orgCode;
        else if($type==3)
          echo 'You are evaluating ' .$eventname;
        else if($type==4)
          echo 'You are evaluating ' .$officename;
    ?>
   </h1>

  <div class="form">
      <?php
        if($type==1){
          echo '<h1 class="sub-header" id="eval-label" type="'.$type.'" section = "'.$section.'" courseCode ="'.$courseCode.'"> by '.$professor[0]->firstname.' '.$professor[0]->lastname. '</h1>';
        }
        else if($type==2){
          echo '<h1 class="sub-header" id="eval-label" orgCode = "'.$orgCode.'" type="'.$type.'"> by '.$orgName[0]->orgName.' </h1>';
        }
        else if($type==3){
          echo '<h1 class="sub-header" id="eval-label" eventid = "'.$eventid.'" type="'.$type.'"> by list of orgs </h1>';
        }
        else if($type==4){
          echo '<h1 class="sub-header" id="eval-label" officeid = "'.$officeid.'" type="'.$type.'"> by DLSU </h1>';
        }

        $x=1;
        foreach ($question as $row){
          echo '<h2 class="question" id=question' .$x. ' questionid='.$row->questionid.'>' .$row->question. '</h2>';
          
          echo '<div class="row placeholders">
          <ul class="list-inline emotion" id="emotion'.$x.'">';

          for($i=1; $i<=9; $i++){
            echo '<li id = "'.$i.'"><img src = "'.base_url().'image/'.$i.'.png" class="image"></li>';
          }
          echo '</ul></div>';

          echo '<div class="row placeholders">
          <ul class="list-inline emotion-label">';
          foreach ($mood as $row){
            echo '<li>' .$row->name. '</li>';
          }
          echo '</ul></div>';


          $x++;
        }
      ?>

      <h2> Recommendations </h2>

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

        echo '<div class="checkbox">
            <input type="checkbox" name="optionCheckbox" id="optionCheckbox'.$j.'" value="5">';
        echo '<label for"optionCheckbox'.$j.'>Other: 
            </label>
          </div>';

        echo '</div>';

      ?>
      
      <h2> Comments (Optional)</h2>
      <div class="comments-box">
        <textarea class="form-control" id="comment" rows="4" placeholder = "i.e.: start and end the class on time"></textarea>
      </div>

        <button type="submit" class="btn btn-default" id="submit">Evaluate</button>
     
  </div>
</div>

 <script src = "http://localhost/script/eval.js" type="text/javascript"></script>
