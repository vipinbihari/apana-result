 <div class="main-table" id="main-table">
                <div class="sub-header ">
                    <div class="swipe-tabs">
                        <div class="swipe-tab">Result</div>
                        <div class="swipe-tab">Admit Card</div>
                        <div class="swipe-tab">Latest Jobs</div>
                    </div>
                </div>
                <div class="main-container">
                    <div class="swipe-tabs-container ">
                        <div class="swipe-tab-content">
                            <div id="box7" align="right">
                                <div id="heading">
                                    <div id="font" align="center">Result</div>
                                </div>
                                <div id="post" align="left">
                                    <div id="post1">
                                        <?php 
                                                $query = "SELECT * FROM result ORDER BY id DESC LIMIT 18";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                   
                                                    echo <<<EOT
                                                    <ul><li style="text-indent: -18.285714px;">
                                                    <i class="fa fa-dot-circle-o fa-lg" aria-hidden="true"></i> &nbsp&nbsp<a onclick="pop('result',{$row['id']}, 'result{$row['id']}')" id="result{$row['id']}">{$row['post_name']}</a></li></ul>

EOT;

                                                    $id = $row['id'];
                                                }

                                                ?>
                                    </div>
                                    <div id="view1">
                                        <div class="view" onclick="<?php echo "moreTiles('result',{$id}, 'post1')"; ?>" value="result">
                                            <span style="color: white;">
                                                <i class="fa fa-refresh fa-spin fa-fw"></i>
                                                View More
                                    
                                    
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swipe-tab-content">
                            <div id="box7" align="right">
                                <div id="heading">
                                    <div id="font" align="center">Admit Card</div>
                                </div>
                                <div id="post" align="left">
                                    <div id="post2">
                                         <?php 
                                            $query = "SELECT * FROM admitcard ORDER BY id DESC LIMIT 15";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                    
                                                    
                                                     echo <<<EOT
                                                    <ul><li style="text-indent: -18.285714px;">
                                                    <i class="fa fa-dot-circle-o fa-lg" aria-hidden="true"></i> &nbsp&nbsp<a onclick="pop('admitcard',{$row['id']}, 'admitcard{$row['id']}')" id="admitcard{$row['id']}">{$row['post_name']}</a></li></ul>
                                                    
EOT;
                                                                                        
                                                    $id = $row['id'];
        
                                                }

                                                                        ?>
                                    </div>
                                    <div id="view2">
                                        <div class="view" onclick="<?php echo "moreTiles('admitcard',{$id}, 'post2')"; ?>" value="result">
                                            <span style="color: white;">
                                                <i class="fa fa-refresh fa-spin fa-fw"></i>
                                                View More
                                    
                                    
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swipe-tab-content">
                            <div id="box7" align="right">
                                <div id="heading">
                                    <div id="font" align="center">Latest Jobs</div>
                                </div>
                                <div id="post" align="left">
                                    <div id="post3">
                                      <?php 
                                            $query = "SELECT * FROM latestjobs ORDER BY id DESC LIMIT 15";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                    
                                                     
                                                    
                                                    
                                                     echo <<<EOT
                                                    <ul><li style="text-indent: -18.285714px;">
                                                    <i class="fa fa-dot-circle-o fa-lg" aria-hidden="true"></i> &nbsp&nbsp<a onclick="pop('latestjobs',{$row['id']}, 'latestjobs{$row['id']}')" id="latestjobs{$row['id']}">{$row['post_name']}</a></li></ul>
                                                    
EOT;
                                                                                                 $id = $row['id'];

                                                }

                                                                        ?>
                                    </div>
                                    <div id="view3">
                                        <div class="view" onclick="<?php echo "moreTiles('latestjobs', {$id}, 'post3')"; ?>" value="result">
                                            <span style="color: white;">
                                                <i class="fa fa-refresh fa-spin fa-fw"></i>
                                                View More
                                    
                                    
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-header ">
                    <div class="swipe-tabs">
                        <div class="swipe-tab">Answer Key</div>
                        <div class="swipe-tab">Syllabus</div>
                        <div class="swipe-tab">Admission</div>
                    </div>
                </div>
                <div class="main-container">
                    <div class="swipe-tabs-container ">
                        <div class="swipe-tab-content">
                            <div id="box7" align="right">
                                <div id="heading">
                                    <div id="font" align="center">Answer Key</div>
                                </div>
                                <div id="post" align="left">
                                    <div id="post4">
                                         <?php 
                                            $query = "SELECT * FROM answerkey ORDER BY id DESC LIMIT 10";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                    
                                                    
                                                    echo <<<EOT
                                                    <ul><li style="text-indent: -18.285714px;">
                                                    <i class="fa fa-dot-circle-o fa-lg" aria-hidden="true"></i> &nbsp&nbsp<a onclick="pop('answerkey',{$row['id']}, 'answerkey{$row['id']}')" id="answerkey{$row['id']}">{$row['post_name']}</a></li></ul>
                                                    
EOT;
                                                                                                  $id = $row['id'];

                                                }

                                                                        
                                                                                                ?>
                                    </div>
                                    <div id="view4">
                                        <div class="view" onclick="<?php echo "moreTiles('answerkey',{$id}, 'post4')"; ?>" value="result">
                                            <span style="color: white;">
                                                <i class="fa fa-refresh fa-spin fa-fw"></i>
                                                View More
                                    
                                    
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swipe-tab-content">
                            <div id="box7" align="right">
                                <div id="heading">
                                    <div id="font" align="center">Syllabus</div>
                                </div>
                                <div id="post" align="left">
                                    <div id="post5">
                                         <?php 
                                            $query = "SELECT * FROM syllabus ORDER BY id DESC LIMIT 10";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                    
                                                    
                                                   echo <<<EOT
                                                    <ul><li style="text-indent: -18.285714px;">
                                                    <i class="fa fa-dot-circle-o fa-lg" aria-hidden="true"></i> &nbsp&nbsp<a onclick="pop('syllabus',{$row['id']}, 'syllabus{$row['id']}')" id="syllabus{$row['id']}">{$row['post_name']}</a></li></ul>
                                                    
EOT;
                                                                                                $id = $row['id'];

                                                }

                                                                        ?>
                                    </div>
                                    <div id="view5">
                                        <div class="view" onclick="<?php echo "moreTiles('syllabus',{$id}, 'post5')"; ?>" value="result">
                                            <span style="color: white;">
                                                <i class="fa fa-refresh fa-spin fa-fw"></i>
                                                View More
                                    
                                    
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swipe-tab-content">
                            <div id="box7" align="right">
                                <div id="heading">
                                    <div id="font" align="center">Admission</div>
                                </div>
                                <div id="post" align="left">
                                    <div id="post6">
                                        <?php 
                                            $query = "SELECT * FROM admission ORDER BY id DESC LIMIT 10";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                    
                                                    
                                                     echo <<<EOT
                                                    <ul><li style="text-indent: -18.285714px;">
                                                    <i class="fa fa-dot-circle-o fa-lg" aria-hidden="true"></i> &nbsp&nbsp<a onclick="pop('admission',{$row['id']}, 'admission{$row['id']}')" id="admission{$row['id']}">{$row['post_name']}</a></li></ul>
                                                    
EOT;
                                                                                               $id = $row['id'];

                                                }

                                                                        ?>
                                    </div>
                                    <div id="view6">
                                        <div class="view" onclick="<?php echo "moreTiles('admission',{$id}, 'post6')"; ?>" value="result">
                                            <span style="color: white;">
                                                <i class="fa fa-refresh fa-spin fa-fw"></i>
                                                View More
                                    
                                    
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-header ">
                    <div class="swipe-tabs">
                        <div class="swipe-tab">Certificate </div>
                        <div class="swipe-tab">Important</div>
                    </div>
                </div>
                <div class="main-container">
                    <div class="swipe-tabs-container ">
                        <div class="swipe-tab-content">
                            <div id="box7" align="right">
                                <div id="heading">
                                    <div id="font" align="center">Certificate</div>
                                </div>
                                <div id="post" align="left">
                                    <div id="post7">
                                       <?php 
                                            $query = "SELECT * FROM certificate ORDER BY id DESC LIMIT 10";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                    
                                                    
                                                    echo <<<EOT
                                                    <ul><li style="text-indent: -18.285714px;">
                                                    <i class="fa fa-dot-circle-o fa-lg" aria-hidden="true"></i> &nbsp&nbsp<a onclick="pop('certificate',{$row['id']}, 'certificate{$row['id']}')" id="certificate{$row['id']}">{$row['post_name']}</a></li></ul>
                                                    
EOT;
                                                                                                  $id = $row['id'];

                                                }

                                                                        ?>
                                    </div>
                                    <div id="view7">
                                        <div class="view" onclick="<?php echo "moreTiles('certificate',{$id}, 'post7')"; ?>" value="result">
                                            <span style="color: white;">
                                                <i class="fa fa-refresh fa-spin fa-fw"></i>
                                                View More
                                    
                                    
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swipe-tab-content">
                            <div id="box7" align="right">
                                <div id="heading">
                                    <div id="font" align="center">Important</div>
                                </div>
                                <div id="post" align="left">
                                    <div id="post8">
                                        <?php 
                                            $query = "SELECT * FROM important ORDER BY id DESC LIMIT 10";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                    
                                                    
                                                   echo <<<EOT
                                                    <ul><li style="text-indent: -18.285714px;">
                                                    <i class="fa fa-dot-circle-o fa-lg" aria-hidden="true"></i> &nbsp&nbsp<a onclick="pop('important',{$row['id']}, 'important{$row['id']}')" id="important{$row['id']}">{$row['post_name']}</a></li></ul>
                                                    
EOT;
                                                                                                 $id = $row['id'];

                                                }

                                                                        ?>
                                    </div>
                                    <div id="view8">
                                        <div class="view" onclick="<?php echo "moreTiles('important',{$id}, 'post8')"; ?>" value="result">
                                            <span style="color: white;">
                                                <i class="fa fa-refresh fa-spin fa-fw"></i>
                                                View More
                                    
                                    
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>