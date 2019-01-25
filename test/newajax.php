<?php $conn = mysqli_connect('localhost', 'root', 'YES', 'apanaresult');

if (!$conn)
	{
	die("error connectig to the detabase" . mysqli_connect_error());
	}
?>

<div id="box7">
                                <div id="heading">
                                    <div id="font" align="center">
                                        <?php 
                                        
                                        $type = $_GET['type'];
                                        if($type=='answerkey'){
                                            
                                            echo 'Answer Key';
                                            
                                        }elseif($type=='result'){
                                            echo 'Result';
                                            
                                        }elseif($type=='admitcard'){
                                            echo 'Admit Card';
                                            
                                        }elseif($type=='syllabus'){
                                            echo 'Syllabus';
                                            
                                        }elseif($type=='important'){
                                            echo 'Important';
                                            
                                        }elseif($type=='latestjobs'){
                                            echo 'Latest Jobs';
                                            
                                        }elseif($type=='certificate'){
                                            echo 'Certificate Varification';
                                            
                                        }elseif($type=='admission'){
                                            echo 'Admission';
                                        }
                                        
                                        ?></div>
                                </div>
                                <div id="post">
                                    <div id="extra">
                                        <?php 
                                                $type = $_GET['type'];
                                                $query = "SELECT * FROM $type ORDER BY id DESC LIMIT 30";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                   
                                                    echo <<<EOT
                                                    <ul><li style="text-indent: -18.285714px;">
                                                    <i class="fa fa-dot-circle-o fa-lg" aria-hidden="true"></i> &nbsp&nbsp<a onclick="pop('{$type}',{$row['id']}, '{$type}{$row['id']}')" id="{$type}{$row['id']}">{$row['post_name']}</a></li></ul>

EOT;

                                                    $id = $row['id'];
                                                }

                                                ?>
                                    </div>
                                    <div id="view1">
                                        <div class="view" onclick="<?php echo "moreTiles('{$type}',{$id}, 'extra')"; ?>" value="result">
                                            <span style="color: white;">
                                                <i class="fa fa-refresh fa-spin fa-fw"></i>
                                                View More
                                    
                                    
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
