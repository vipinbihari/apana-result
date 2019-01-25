
<div id="plates">
<div id="plate">
    
    <div>
        <div class="funnyNewsTicker fnt-radius fnt-shadow fnt-easing" id="funnyNewsTicker1">
                <ul>
                   <?php
$query = "SELECT * FROM result ORDER BY id DESC LIMIT 10";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
	echo '<li>
                        <div class="fnt-content"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" 
                                                        onmouseover="tooltip.pop(this, ' . "'#n". "', {position:1, offsetX:-20, effect:'slide'})" . ';pop('."'result'".', '.$row['id'].", 'result"."{$row['id']}'".')"></i>
                                                    &nbsp&nbsp<a onclick="modal('."'".$row['generated_link']."'".');" 
                                                    style="text-decoration:none;cursor: pointer;" id="result'.$row['id'].'"><span style="color:white;"><b>' . $row['post_name'] . '</b></span></a></div>
                    </li>';
	}

?>
                    
                    
                </ul>
            </div>
        </div>
    </div>

<div id="plate2">
    
        <div>
        
            <div class="funnyNewsTicker fnt-radius fnt-shadow fnt-easing" id="funnyNewsTicker2">
                <ul>
                    
                    
                    
                     <?php
$query = "SELECT * FROM latestjobs ORDER BY id DESC LIMIT 10";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
	echo '<li>
                        <div class="fnt-content"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" 
                                                        onmouseover="tooltip.pop(this, ' . "'#n". "', {position:1, offsetX:-20, effect:'slide'})" . ';pop('."'latestjobs'".', '.$row['id'].", 'latestjobs"."{$row['id']}'".')"></i>
                                                    &nbsp&nbsp<a onclick="modal('."'".$row['generated_link']."'".');" 
                                                    style="text-decoration:none;cursor: pointer;" id="latestjobs'.$row['id'].'"><span style="color:white;"><b>' . $row['post_name'] . '</b></span></a></div>
                    </li>';
	}

?>
                    
                    
                    
                </ul>
            </div>
        </div>
      
    </div>



<div id="plate3">
    
        <div>
        
            <div class="funnyNewsTicker fnt-radius fnt-shadow fnt-easing" id="funnyNewsTicker3">
                <ul>
                    
                     <?php
$query = "SELECT * FROM admitcard ORDER BY id DESC LIMIT 10";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
	echo '<li>
                        <div class="fnt-content"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" 
                                                        onmouseover="tooltip.pop(this, ' . "'#n". "', {position:1, offsetX:-20, effect:'slide'})" . ';pop('."'admitcard'".', '.$row['id'].", 'admitcard"."{$row['id']}'".')"></i>
                                                    &nbsp&nbsp<a onclick="modal('."'".$row['generated_link']."'".');" 
                                                    style="text-decoration:none;cursor: pointer;" id="admitcard'.$row['id'].'"><span style="color:white;"><b>' . $row['post_name'] . '</b></span></a></div>
                    </li>';
	}

?>
                    
                    
                    
                </ul>
            </div>
        </div>
      
    </div>

</div>
<script>
        $(document).ready(function(){
                $("#funnyNewsTicker1").funnyNewsTicker({width:"auto",timer:1000,titlecolor:"#FFF",itembgcolor:"#1faf6d",infobgcolor:"#1a935c",buttonstyle:"white",bordercolor:"#1a935c"});
        });
</script>

<script>
        $(document).ready(function(){
                $("#funnyNewsTicker2").funnyNewsTicker({width:"auto",timer:1000,titlecolor:"#FFF",itembgcolor:"#1faf6d",infobgcolor:"#1a935c",buttonstyle:"white",bordercolor:"#1a935c"});
        });
</script>
<script>
        $(document).ready(function(){
                $("#funnyNewsTicker3").funnyNewsTicker({width:"auto",timer:1000,titlecolor:"#FFF",itembgcolor:"#1faf6d",infobgcolor:"#1a935c",buttonstyle:"white",bordercolor:"#1a935c"});
        });
</script><br /><br />

