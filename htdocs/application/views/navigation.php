
 <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="" id="home"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/account/log_out"><i class="fa fa-bar-chart-o fa-fw"></i> Logout</a>
                        
                    </li>
                  
                    <li>
                        <a href=""><i class="fa fa-wrench fa-fw"></i> Course
                           <?php if($course != null) 
                                 echo  '<span class="glyphicon glyphicon-chevron-down"></span>' ;
                             ?>
                        </a>
                        <ul class="nav nav-second-level collapse" id ="course">
                            <?php
                            foreach ($course as $row)
                            {
                                echo '<li id = '. $row->coursecode .'><a href= "">' . $row->coursecode . '</a></li>';     
                            };

                             ?>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <?php 
                    if($type == 1){
                       echo  '<li>';
                       echo  '<a><i class="fa fa-sitemap fa-fw"></i> Organization<span class="glyphicon glyphicon-chevron-down"></span></a>';
                       echo '<ul class="nav nav-second-level collapse">';
                        
                            
                       echo'</ul>';
                       echo '</li>';

                    }
                    ?>
                    <li>
                        <a href=""><i class="fa fa-sitemap fa-fw"></i> Organization Event</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-sitemap fa-fw"></i> Office</a>
                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
    
  



