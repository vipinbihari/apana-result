 <div class="marquee">
                
                 <marquee behavior="alternate" scrollamount="4" onmouseout="this.start();" onmouseover="this.stop();">
                <?php 
                                                $query = "SELECT * FROM latestjobs ORDER BY id DESC LIMIT 3";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                   
                                                    echo <<<EOT
                                                    <img src="https://sarkariresults.info/wp-content/uploads/2015/07/newicon.gif" alt="newicon">&nbsp;<font size="+1">
                                                    <a onclick="pop('latestjobs',{$row['id']}, 'latestjobs{$row['id']}')" id="latestjobs{$row['id']}">{$row['post_name']}</a>
                                                  
EOT;
                                                    
                                                }                    
                    ?>
                       </font>
                    </font>
                </marquee>
                  <marquee behavior="alternate" scrollamount="4" onmouseout="this.start();" onmouseover="this.stop();">
                <?php 
                                                $query = "SELECT * FROM result ORDER BY id DESC LIMIT 3";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                   
                                                    echo <<<EOT
                                                    <img src="https://sarkariresults.info/wp-content/uploads/2015/07/newicon.gif" alt="newicon">&nbsp;<font size="+1">
                                                    <a onclick="pop('result',{$row['id']}, 'result{$row['id']}')" id="result{$row['id']}">{$row['post_name']}</a>
                                                  
EOT;
                                                    
                                                }                    
                    ?>
                       </font>
                    </font>
                </marquee>
                  <marquee behavior="alternate" scrollamount="4" onmouseout="this.start();" onmouseover="this.stop();">
                <?php 
                                                $query = "SELECT * FROM admitcard ORDER BY id DESC LIMIT 3";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                   
                                                    echo <<<EOT
                                                    <img src="https://sarkariresults.info/wp-content/uploads/2015/07/newicon.gif" alt="newicon">&nbsp;<font size="+1">
                                                    <a onclick="pop('admitcard',{$row['id']}, 'admitcard{$row['id']}')" id="admitcard{$row['id']}">{$row['post_name']}</a>
                                                  
EOT;
                                                    
                                                }                    
                    ?>
                       </font>
                    </font>
                </marquee>
                
               
            </div>