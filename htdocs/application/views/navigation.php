<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 58f2816a83a0d5ff39fdeeb69238930b5748c06a

 <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="" id="home"> Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/account/log_out">Logout</a>
                        
                    </li>
                  
                    <li>
                        <a href="">Course
                           <?php if($courses != null) 
                                 echo  '<span class="glyphicon glyphicon-chevron-down"></span>' ;
                             ?>
                        </a>
                        <ul class="nav nav-second-level collapse" id ="course">
                            <?php
                            foreach ($courses as $course)
                            {
                                echo '<li courseCode= '. $course->coursecode .' section = '. $course->section.'><a href= "">' . $course->coursecode . '</a></li>';     
                            };

                             ?>
                        </ul>
                    
                    </li>
                    <?php 
                    
                    if($type == 1){
                       echo  '<li>';
                       echo  '<a>Organization<span class="glyphicon glyphicon-chevron-down"></span></a>';
                       echo '<ul class="nav nav-second-level collapse" id ="org">';
                        
                            $adminCounter = 0;
                         foreach ($organizations as $org)
                            {
                                echo '<li org ='. $org->orgCode .'><a href= "">'. $org->orgCode;

                                if($org->type == 1){
                                    $adminCounter++;
                                    echo '<span class="glyphicon glyphicon-chevron-down"></span></a>';   
                                    echo '<ul class="nav nav-third-level collapse">';

                                    echo  '<li><a href= "">Register Member</a></li>';
                                    echo  '<li><a class = "appoint-btn" href= "" data-org="'.$org->orgCode.'">Appoint Admin</a></li>';
                                    echo  '<li><a href= "">Evaluation Summary</a></li>';

                                    echo '</ul>';
                                }
                                

                            echo '</li>';  
                            };
                           
                            if($adminCounter != 0){
                             ?>   
                                <script type = "text/javascript">
                                    $(document).ready(initAppoint);
                                    function initAppoint(){
                                        $('.appoint-btn').click(loadMembers);
                                        function loadMembers(){
                                            var orgCode = $(this).attr('data-org');
                                            
                                            $.ajax({
                                                data:{
                                                    o: orgCode
                                                },
                                                type:"get",
                                                success: loadSuccess,
                                                error: loadError,
                                                url: '<?php echo base_url();?>index.php/organization/load_member'
                                                
                                            });
                                            
                                            function loadSuccess(data, textStatus){
                                                $('#main-content').html(data);
                                            }
                                            
                                            function loadError(data, textStatus){
                                                alert("error");
                                            }
                                        
                                        }
                                    }
                                </script>
                                
                            <?php
                        
                        }
                               



                        echo '</li>';    
                       echo'</ul>';
                       echo '</li>';
                     

                    }
                    ?>
                    <li id="events">
                        <a href="">Organization Event</a>
                    </li>
                    <li id="office">
                        <a href="">Office</a>
                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
</nav>
    
  


<<<<<<< HEAD
=======
=======
<div class = "navigation">
			<div class="nav-div">
				<ul id="nav-menu">
					<li> 
						Home
					</li>
					<li>
						Logout
					</li>
					<li data-toggle="subjects" class="menu-toggle">SUBJECTS
						<ul class="sub-menu" id="subjects" style="display:none">
							<li>WEBAPPS</li>
							<li>ALGOCOM</li>
							<li>HCIFACE</li>
						</ul>
					</li>
					<li data-toggle="organizations" class="menu-toggle">ORGANIZATIONS
						<ul class="sub-menu" id="organizations" style="display:none">
							<li>HTG</li>
							<li>LSDC</li>
							<li>La Salle Sports Commission of De La SAlle University</li>
						</ul>
					</li>
					
				</ul>
			</div>
				<div class="clearfix"> <!-- pag may float laging may clearfix -->                                                                                                     
				</div>
		</div>

</div>
>>>>>>> 544f9ece8955b97bd363387097b4301cca7a0071
>>>>>>> 58f2816a83a0d5ff39fdeeb69238930b5748c06a

