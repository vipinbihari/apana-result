        <div align="center">
                                   
                                    <div id="marquee1" align="center">
                                            <marquee behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();">

                                        <?php
$query = "SELECT * FROM result ORDER BY id DESC LIMIT 3";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
	echo '<i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" 
                                                        onmouseover="tooltip.pop(this, ' . "'#n". "', {position:1, offsetX:-20, effect:'slide'})" . ';pop('."'result'".', '.$row['id'].", 'result"."{$row['id']}'".')"></i>
                                                    &nbsp&nbsp<a target="_blank" onclick="modal('."'".$row['generated_link']."'".');" id="result'.$row['id'].'" style="color:blue;cursor: pointer;"><b><font size="3">' . $row['post_name'] . '</font></b></a> &nbsp&nbsp &nbsp&nbsp';
	}

?>
                                                        </marquee>

                                    </div>
                            
                                    <div id="marquee1" align="center">
                                            <marquee behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();">

                                        <?php
$query = "SELECT * FROM latestjobs ORDER BY id DESC LIMIT 3";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
	echo '<i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" 
                                                        onmouseover="tooltip.pop(this, ' . "'#n". "', {position:1, offsetX:-20, effect:'slide'})" . ';pop('."'latestjobs'".', '.$row['id'].", 'latestjobs"."{$row['id']}'".')"></i>
                                                    &nbsp&nbsp<a target="_blank" onclick="modal('."'".$row['generated_link']."'".');" id="latestjobs'.$row['id'].'" style="color:blue;cursor: pointer;"><b><font size="3">' . $row['post_name'] . '</font></b></a> &nbsp&nbsp &nbsp&nbsp';
	}

?>
                                                        </marquee>

                                    </div>
                            
                                    <div id="marquee1" align="center">
                                            <marquee behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();">

                                        <?php
$query = "SELECT * FROM admitcard ORDER BY id DESC LIMIT 3";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
	echo '<i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" 
                                                        onmouseover="tooltip.pop(this, ' . "'#n". "', {position:1, offsetX:-20, effect:'slide'})" . ';pop('."'admitcard'".', '.$row['id'].", 'admitcard"."{$row['id']}'".')"></i>
                                                    &nbsp&nbsp<a target="_blank" onclick="modal('."'".$row['generated_link']."'".');" id="admitcard'.$row['id'].'" style="color:blue;cursor: pointer;"><b><font size="3">' . $row['post_name'] . '</font></b></a> &nbsp&nbsp &nbsp&nbsp';
	}

?>
                                                        </marquee>
                                    </div>
                        </div>

