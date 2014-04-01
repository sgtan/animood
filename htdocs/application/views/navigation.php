
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
                       echo  '<a>Organization';
                           if($organizations != null) 
                          echo '<span class="glyphicon glyphicon-chevron-down"></span>';
                        echo'</a>';
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
                                    

                                    echo '</ul>';
                                }
                                else
                                    echo'</a>';
                                

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
    
  



