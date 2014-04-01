 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 	<?php
 		if($type==3)
        	echo '<h1 class="page-header">Event List</h1>';
		else if($type==4)
			echo '<h1 class="page-header">Office List</h1>';
    ?>


 	<?php
 		if($type==3){
 			echo '<div class="row placeholders">
          		<ul class="list-inline list" id="event-list">';

          	foreach($event as $row){
            	echo '<a><li id = "'.$row->eventID.'" eventname="'.$row->eventName.'">'.$row->eventName. ' - ' .$row->eventDesc. '</li></a>';
          	}

          	echo '</ul></div>';
        }
        else if($type==4){
        	echo '<div class="row placeholders">
          		<ul class="list-inline list" id="office-list">';

          	foreach($office as $row){
            	echo '<a><li id = "'.$row->officeID.'" officename="'.$row->officeName.'">'.$row->officeName. ' - ' .$row->officeDesc. '</li></a>';
          	}

          	echo '</ul></div>';
        }

 	?>
 </div> 

 <link rel="stylesheet" href ="http://localhost/style/list.css" style="text/css"/> 
 <script src = "http://localhost/script/list.js" type="text/javascript"></script>
