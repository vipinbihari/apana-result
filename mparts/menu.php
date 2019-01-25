 

                            <a href="
                                     <?php 
                                     
                                     if(!isset($_COOKIE['userid'])){
                                     echo $loginUrl; 
                                     
                                     }
                                     ?>"
                               
                               title="UMP - Ultra Menu Pro">
                                
                                        <?php 
                                     
                                     if(isset($_COOKIE['profilepic'])){
echo "{$_COOKIE['profilepic']}";
                                     
                                     }else{
                                         
                                       echo "<img src=apna.png>";
                                             
                                     }
                                        
                                ?>
                            </a>
                        </div>
                        <div class="ump-nav">
                            <ul class="ump-default">
                                <li>
                                    <a href="https://apanaresult.com">Home</a>
                                </li>
                                <li>
                                    <a href="#" onclick="newajax('result')" class="newtoggle">Result</a>
                                </li>
                                <li>
                                            <!--     <li class="ump-submenu">
                                            LI MUST HAVE THIS CLASS TO WORK SUB MENU

          -->                          <a href="#" onclick="newajax('latestjobs')" class="newtoggle">Latest Jobs</a>
                                  <!--  <ul class="ump-default">
                                        <li>
                                            <a href="#">service #1</a>
                                        </li>
                                        <li>
                                            <a href="#">service #2</a>
                                        </li>
                                        <li>
                                            <a href="#">service #3</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li>
                                    <a href="#" onclick="newajax('admitcard')" class="newtoggle">Admit Card</a>
                                </li>
                                <li>

                                            <!--     <li class="ump-submenu">
                                            LI MUST HAVE THIS CLASS TO WORK SUB MENU--> 
                                    <a href="#" onclick="newajax('admission')" class="newtoggle">Admission</a>
                                    <!--<ul class="ump-default">
                                        <li>
                                            <a href="#">management</a>
                                        </li>
                                        <li class="ump-submenu">
                                            <a href="#">marketing</a>
                                            <ul class="ump-default">
                                                <li>
                                                    <a href="#">europe</a>
                                                </li>
                                                <li>
                                                    <a href="#">america</a>
                                                </li>
                                                <li>
                                                    <a href="#">asia</a>
                                                </li>
                                                <li>
                                                    <a href="#">africa</a>
                                                </li>
                                                <li>
                                                    <a href="#">australia</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">sales</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li>
                                    <a href="#" onclick="newajax('syllabus')" class="newtoggle">Syllabus</a>
                                </li>
                                <li>
                                    <a href="#" onclick="newajax('answerkey')" class="newtoggle">Answer Key</a>
                                </li>
                                <li>
                                    <a href="#" onclick="newajax('certificate')" class="newtoggle">Certificate Verification</a>
                                </li>
                                <li>
                                    <a href="#" onclick="newajax('important')" class="newtoggle">Important</a>
                                </li>
                            </ul>
                            <ul class="ump-social"> <li>
                                    <a href="#" class="ump-facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="ump-google-plus">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="ump-twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="ump-pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="ump-youtube">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>

                                
                            </ul>
                        </div>
                    </div>
                    <a class="ump-toggle">
                        <i class="fa fa-times ump-close"></i>
                        <i class="fa fa-bars ump-open"></i>
                    </a>
                </nav>
            </div>
        </div>
