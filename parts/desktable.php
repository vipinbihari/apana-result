<table width="75%" align="center">
                                <tr valign="top">
                                    <td align="left">
                                          <div id="heading">
                                                <div id="font" align="center">Result</div>                                            
                                            </div>
                                            
                                        <div id="box1" align="left">
                                          
                                            
                                            <div id="post1">
                                                
                                                <?php
$query = "SELECT * FROM result ORDER BY id DESC LIMIT 20";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    echo <<<EOT
    <ul><li style="padding-left:35.285714px; text-indent: -18.285714px;"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" onmouseover="tooltip.pop(this,'#n', {position:1, offsetX:-20, effect:'slide'});pop('result',{$row['id']}, 'result{$row['id']}')"></i>&nbsp&nbsp<a target="_blank" onclick="modal('{$row['generated_link']}');" id="result{$row['id']}" style="color:blue;cursor:pointer;">{$row['post_name']}</a></li></ul>
    

EOT;
             $id = $row['id'];

	}

?>
                                                </div>
                                            
                                            <div id="view1">
                                                    <div id="view" onclick="<?php echo "moreTiles('result',{$id}, 'post1')"; ?>" value="result">
                                                            <span style="color: white;" ><i class="fa fa-refresh fa-spin fa-fw"></i> View More</span>
                                                    </div>
                                                </div>
                                            
                                            <!-- this was post 1 of left box -->
                                            <!-- div post ends here-->
                                                            
                                        
                                                                </div>
                                        <!-- first div box1 ends here -->
<br/>
                                          <div id="heading">
                                                                        <div id="font" align="center">Answer Key</div>
                                                                    </div>
                                                                    
                                                                <div align="left" id="box2">   <!-- this is box2 of left side -->
                                                                  
                                                                    <div id="post2">  
                                                                        
                                                                        <?php
$query = "SELECT * FROM answerkey ORDER BY id DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    echo <<<EOT
    <ul><li style="padding-left:35.285714px; text-indent: -18.285714px;"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" onmouseover="tooltip.pop(this,'#n', {position:1, offsetX:-20, effect:'slide'});pop('answerkey',{$row['id']}, 'answerkey{$row['id']}')"></i>&nbsp&nbsp<a target="_blank" onclick="modal('{$row['generated_link']}');" id="answerkey{$row['id']}" style="color:blue;cursor:pointer;">{$row['post_name']}</a></li></ul>
    

EOT;
             $id = $row['id'];

	}

?>
                                                                    </div>
                                                                      <div id="view2">
                                                <div id="view" onclick="<?php echo "moreTiles('answerkey',{$id}, 'post2')"; ?>" value="result">
                                                    <span style="color: white;" ><i class="fa fa-refresh fa-spin fa-fw"></i> View More</span>
                                                 </div>
                                            </div>
                                                                    
                                        </div>
<br/>
                                        <div id="heading">
                                                                            <div id="font" align="center">Certificate Verification</div>
                                                                        </div>
                                                                    <div align="left" id="box3">
                                                                        
                                                                        
                                                                        <div id="post3">
                                                                               
                                                                        <?php
$query = "SELECT * FROM certificate ORDER BY id DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    echo <<<EOT
    <ul><li style="padding-left:35.285714px; text-indent: -18.285714px;"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" onmouseover="tooltip.pop(this,'#n', {position:1, offsetX:-20, effect:'slide'});pop('certificate',{$row['id']}, 'certificate{$row['id']}')"></i>&nbsp&nbsp<a target="_blank" onclick="modal('{$row['generated_link']}');" id="certificate{$row['id']}" style="color:blue;cursor:pointer;">{$row['post_name']}</a></li></ul>
    

EOT;
             $id = $row['id'];

	}


?>
                                                       </div>
                                                                        <div id="view3">
                                                <div id="view" onclick="<?php echo "moreTiles('certificate',{$id}, 'post3')"; ?>" value="result">
                                                    <span style="color: white;" ><i class="fa fa-refresh fa-spin fa-fw"></i> View More</span>
                                                 </div>
                                            </div>   
                                                            </div>
                                                     <!-- div id box2 ends here -->
                                            </td>
                                                <!-- first td ends here -->
    
    
    
                                <td align="center"> <!-- second td starts -->
                                    <div id="heading">
                                            <div align="center">Admit Card</div>
                                        </div>
                                        
                                    <div id="box4" align="center">
                                        
                                        <div id="post4" align="left">
                                                     
                                                                        <?php
$query = "SELECT * FROM admitcard ORDER BY id DESC LIMIT 20";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    echo <<<EOT
    <ul><li style="padding-left:35.285714px; text-indent: -18.285714px;"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" onmouseover="tooltip.pop(this,'#n', {position:1, offsetX:-20, effect:'slide'});pop('admitcard',{$row['id']}, 'admitcard{$row['id']}')"></i>&nbsp&nbsp<a target="_blank" onclick="modal('{$row['generated_link']}');" id="admitcard{$row['id']}" style="color:blue;cursor:pointer;">{$row['post_name']}</a></li></ul>
    

EOT;
             $id = $row['id'];

	}


?>                                            
                                        </div>
                                        
                                          <div id="view4">
                                                <div id="view" onclick="<?php echo "moreTiles('admitcard',{$id}, 'post4')"; ?>" value="result">
                                                    <span style="color: white;" ><i class="fa fa-refresh fa-spin fa-fw"></i> View More</span>
                                                 </div>
                                            </div>

                                    </div> <!-- box2 ends here -->
                                            <br />
                                       <div id="heading">
                                            <div align="center">Syllabus</div>
                                        </div>
                                    <div id="box5" align="center">
                                     
                                        
                                        <div id="post5" align="left">
                                            
                                            
                                                     
                                                                        <?php
$query = "SELECT * FROM syllabus ORDER BY id DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    echo <<<EOT
    <ul><li style="padding-left:35.285714px; text-indent: -18.285714px;"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" onmouseover="tooltip.pop(this,'#n', {position:1, offsetX:-20, effect:'slide'});pop('syllabus',{$row['id']}, 'syllabus{$row['id']}')"></i>&nbsp&nbsp<a target="_blank" onclick="modal('{$row['generated_link']}');" id="syllabus{$row['id']}" style="color:blue;cursor:pointer;">{$row['post_name']}</a></li></ul>
    

EOT;
             $id = $row['id'];

	}

?>
                                      
                                        </div>
                                         <div id="view5">
                                                <div id="view" onclick="<?php echo "moreTiles('syllabus',{$id}, 'post5')"; ?>" value="result">
                                                    <span style="color: white;" ><i class="fa fa-refresh fa-spin fa-fw"></i> View More</span>
                                                 </div>
                                            </div>
                                    </div>
                                        
                                        
<br />
                                      
                                            <div id="heading">
                                                <div align="center">Important</div>
                                            </div>
                                    <div align="center" id="box6" >
                                          
                                            <div id="post6" align="left">
                                               
                                                         
                                                                        <?php
$query = "SELECT * FROM important ORDER BY id DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    echo <<<EOT
    <ul><li style="padding-left:35.285714px; text-indent: -18.285714px;"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" onmouseover="tooltip.pop(this,'#n', {position:1, offsetX:-20, effect:'slide'});pop('important',{$row['id']}, 'important{$row['id']}')"></i>&nbsp&nbsp<a target="_blank" onclick="modal('{$row['generated_link']}');" id="important{$row['id']}" style="color:blue;cursor:pointer;">{$row['post_name']}</a></li></ul>
    

EOT;
             $id = $row['id'];

	}


?>
                                                
                                  </div>
                                        
                                         <div id="view6">
                                                <div id="view" onclick="<?php echo "moreTiles('important',{$id}, 'post6')"; ?>" value="result">
                                                    <span style="color: white;" ><i class="fa fa-refresh fa-spin fa-fw"></i> View More</span>
                                                 </div>
                                            </div>   
                                    </div>
                                
                            </td> <!-- second td ends here -->
                            
                            <td align="right">
                                 <div id="heading">
                                        <div id="font" align="center">Latest Jobs</div>
                                    </div>
                                <div id="box7" align="right">
                                   
                                    <div id="post7" align="left">
                                       
                                        
                                                 
                                                                        <?php
$query = "SELECT * FROM latestjobs ORDER BY id DESC LIMIT 18";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    echo <<<EOT
    <ul><li style="padding-left:35.285714px; text-indent: -18.285714px;"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" onmouseover="tooltip.pop(this,'#n', {position:1, offsetX:-20, effect:'slide'});pop('latestjobs',{$row['id']}, 'latestjobs{$row['id']}')"></i>&nbsp&nbsp<a target="_blank" onclick="modal('{$row['generated_link']}');" id="latestjobs{$row['id']}" style="color:blue;cursor:pointer;">{$row['post_name']}</a></li></ul>
    

EOT;
             $id = $row['id'];

	}

?>
                                    </div>
                                     <div id="view7">
                                                <div id="view" onclick="<?php echo "moreTiles('latestjobs',{$id}, 'post7')"; ?>" value="result">
                                                    <span style="color: white;" ><i class="fa fa-refresh fa-spin fa-fw"></i> View More</span>
                                                 </div>
                                            </div>
                                    
                                </div>

<br/>
                                 <div id="heading">
                                        <div align="center">Admission</div>
                                    </div>
                                <div align="center" id="box8">
                                   
                                    <div id="post8" align="left">
                                       
                                                 
                                                                        <?php
$query = "SELECT * FROM admission ORDER BY id DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    echo <<<EOT
    <ul><li style="padding-left:35.285714px; text-indent: -18.285714px;"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" onmouseover="tooltip.pop(this,'#n', {position:1, offsetX:-20, effect:'slide'});pop('admission',{$row['id']}, 'admission{$row['id']}')"></i>&nbsp&nbsp<a target="_blank" onclick="modal('{$row['generated_link']}');" id="admission{$row['id']}" style="color:blue;cursor:pointer;">{$row['post_name']}</a></li></ul>
    

EOT;
             $id = $row['id'];

	}

?>
                                        
                             

                                    </div>
                                      <div id="view8">
                                                <div id="view" onclick="<?php echo "moreTiles('admission',{$id}, 'post8')"; ?>" value="result">
                                                    <span style="color: white;" ><i class="fa fa-refresh fa-spin fa-fw"></i> View More</span>
                                                 </div>
                                            </div>
                                </div>
                                <br /><div id="heading">
                                        <div align="center">Admission</div>
                                    </div>
                                <div align="center" id="box9">
                                    
                                    <div id="post9" align="left">
                                       
                                                 
                                                                        <?php
$query = "SELECT * FROM admission ORDER BY id DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    echo <<<EOT
    <ul><li style="padding-left:35.285714px; text-indent: -18.285714px;"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" onmouseover="tooltip.pop(this,'#n', {position:1, offsetX:-20, effect:'slide'});pop('admission',{$row['id']}, 'admission{$row['id']}')"></i>&nbsp&nbsp<a target="_blank" onclick="modal('{$row['generated_link']}');" id="admission{$row['id']}" style="color:blue;cursor:pointer;">{$row['post_name']}</a></li></ul>
    

EOT;
             $id = $row['id'];

	}


?>
                                    </div>
                                     <div id="view9">
                                                <div id="view" onclick="<?php echo "moreTiles('admission',{$id}, 'post9')"; ?>" value="result">
                                                    <span style="color: white;" ><i class="fa fa-refresh fa-spin fa-fw"></i> View More</span>
                                                 </div>
                                            </div>
                                </div>
                        </td>

                                </tr>
                                    </table>
<!-- table ends here -->
    

<br /><br />
    

