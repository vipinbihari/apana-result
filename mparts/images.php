  <div class="images">
                <!-- IMAGES FIRST BOX STARTS HERE -->
                <div class="scroll1">
                    <table>
                        <tbody>
                            <tr>
                                <?php 
                                                $ct=1;
                                                $query = "SELECT * FROM trending ORDER BY id DESC LIMIT 8";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                   
                                                if($ct<=4){
                                                    echo <<<EOT
                                                   <td><div id="image{$ct}"><a onclick="pop('trending',{$row['id']}, 'trending{$row['id']}')" id="trending{$row['id']}">{$row['post_name']}</a></div></td>
                                                  
EOT;
                                                    $ct++;
                                                    if($ct==5){
                                                        
                                                        continue;
                                                    }
                                                }
                                                    
                                             if($ct==5)      { echo <<<EOT
                                                    </tr>
                        </tbody>
                    </table>
                </div>
                <!-- IMAGES FIRST BOX ENDS HERE -->
                <!-- IMAGES SECOND BOX STARTS HERE -->
                <div class="scroll1">
                    <table>
                        <tbody>
                            <tr>
                                                    
                                                    
EOT;
                                                             }
                             if($ct>4){
                                                    echo <<<EOT
                                                   <td><div id="image{$ct}"><a onclick="pop('trending',{$row['id']}, 'trending{$row['id']}')" id="trending{$row['id']}">{$row['post_name']}</a></div></td>
                                                  
EOT;
                                                    $ct++;
                                                }                        
                                                    
                                                    
                                                } ?>
                                
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- IMAGES SECOND BOX ENDS HERE -->
            </div>