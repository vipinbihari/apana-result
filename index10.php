<?php session_start();
$useragent = $_SERVER['HTTP_USER_AGENT'];

if (!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4)))
	{
	include "index.php";

	die();
	}
?>

<!-- ESTABLISHING THE CONNECTION TO APANARESULT DATABASE-->
<?php include 'mparts/connection.php'; ?>

<!-- IF TYPE AND ID ARE ALSO SUBMITED AS PARAMETER SHOW FACEBOOK RANDOM IMAGE AND INSERT IT TO THE DATABASE-->
<?php include 'mparts/facethumb.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- IF TYPE AND ID ARE ALSO SUBMITED AS PARAMETER SHOW FACEBOOK RANDOM IMAGE AND INSERT IT TO THE DATABASE-->
        <?php include 'mparts/analytics.php'; ?>
        
       <!-- INCLUDING AND DECIDING THE MOBILE META TAG FROM PHP WITH WHATSAPP THUMBNAIL SHARING-->
        
        <!-- INCLUDING ALL THE DEPENDENT FILE FOR THE MOBILE VERSION-->
       <?php include 'mparts/mdepend.php'; ?>
        


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=1681235428623012&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    </head>
    <body>
        <!-- INCLUDING WHATSAPP THUMBNAIL SHARING INSIDE BODY TAG-->
       <?php include 'mparts/facethumbody.php'; ?>
        
        <div class="is-ump">
            <div class="ump">
                <div class="ump-widget-container">
                    <div class="ump-widget ump-search-widget ump-hidden" id="ump-search-widget">
                        <form action="#" method="get">
                            <input class="ump-input" type="text" placeholder="enter keyword..." id="searchinput">
                            <select class="ump-button" onchange="search(this.value)">
                                  <option value="volvo">Search <i class="fa fa-angle-right"></i></option>
                                  <option value="result">Result</option>
                                  <option value="admitcard">Admit Card</option>
                                  <option value="latestjobs">Latest Jobs</option>
                                  <option value="admission">Admission</option>
                                  <option value="syllabus">Syllabus</option>
                                  <option value="answerkey">Answer Key</option>
                           </select>
                        </form>
                    </div>
                    <div class="ump-clear"></div>
                </div>
                <div class="ump-bar">
                    <div class="ump-clear">
                        <a href="https://apanaresult.com" class="ump-brand" title="UMP - Ultra Menu PRO - demo">AP<b>A</b>NA RESULT</a>
                        <div class="ump-icons">
                           <!-- <a href="#">
                                <i class="fa fa-phone"></i>
                            </a> -->
                            <a href="#" onclick="subscribe()">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <a href="#" class="ump-widget-toggle" data-target="#ump-search-widget">
                                <i class="fa fa-search"></i>
                            </a>
                            <div class="ump-clear"></div>
                        </div>
                    </div>
                    <div class="ump-overlay"></div>
                </div>
                <nav>
                    <div class="ump-nav-container">
                        <div class="ump-header">
                            <img src="https://u.imageresize.org/2c603446-a5ba-46af-baa1-7f3c7381c210.png" alt="" class="ump-header-background-image">
                           
                               <?php
                            
                            if(!isset($_COOKIE['userid'])){
                            error_reporting(E_ALL);
                            require_once __DIR__ . '/vendor/autoload.php';
                            $fb = new Facebook\Facebook([
                              'app_id' => '1681235428623012',
                              'app_secret' => '4260afe9bd29b44faa3d97f358993af0',
                              'default_graph_version' => 'v2.10',
                              ]);
                            $helper = $fb->getRedirectLoginHelper();
                            $permissions = ['user_birthday']; // Optional permissions
                            $loginUrl = $helper->getLoginUrl('https://apanaresult.com/fb-callback.php', $permissions);
                            //echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';


                            }
                            
                          ?>
        <!-- INCLUDING THE MENU HEADER -->
       <?php include 'mparts/menu.php'; ?>
        
        <!-- CLOSING THE MENU HEADER -->
        <div id="main-body">
        <!-- marquee  starts here -->
            
        <!-- INCLUDING THE MENU HEADER -->
        <?php include 'mparts/marquee.php'; ?>
        <!-- marquee ends here -->
            
        <!-- IMAGE BOXES STARTS HERE-->
        <?php include 'mparts/images.php'; ?>

        <!-- IMAGE BOXES ENDS HERE-->

            <!-- LOGIN WITH FACEBOOK BUTTON STARTS HERE-->

<?php 
                                     
                                     if(!isset($_COOKIE['userid'])){
                                         echo <<<EOT
                                         <a href="$loginUrl" class="fblogin"><img src="fb.png" style="padding-left: 25px;margin-bottom: -8px;"></a>
EOT;
                                     
                                     }
                                     ?>

            <!-- LOGIN WITH FACEBOOK BUTTON ENDS HERE-->

            <!--  INCLUDING MAIN TABLE STARTS HERE-->
            <?php include 'mparts/table.php'; ?>

            <!-- INCLUDING EMAIL SUBSCRIVE ICON -->
            <?php include 'mparts/emailsubs.php'; ?>

<div id="spinparent"><div id="spin"><i class="fa fa-spinner fa-spin" style="font-size:98px;color:red"></i></div></div>

           <!-- INCLUDING PUP UP HTML AND JAVASCRIPT FILE -->
            <?php include 'mparts/popup1.php'; ?>
            
        </div>
    </body>

            <!-- INCLUDING VIEW MORE  JAVASCRIPT FILE -->
            <?php include 'mparts/viewmore.php'; ?>
    
            <!-- INCLUDING FOR FORM DETAIL POPUP -->
            <?php include 'mparts/formdetails.php'; ?>

<script>
function newajax(type){

 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('main-table').innerHTML =
      this.responseText;
            extraCount =1;
                      document.getElementById('spinparent').style.display="none";


    }else{
        
                      document.getElementById('spinparent').style.display="block";

    }
  };
  xhttp.open("GET", "/test/newajax.php?type="+type, true);
  xhttp.send();


                
}

        </script>
                        
               <!-- SEARCH JAVASCRIPT CODE -->         
<script>
function search(type){
 var search= document.getElementById('searchinput').value;
    
 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('main-table').innerHTML =
      this.responseText;
            extraCount =1;
                      document.getElementById('spinparent').style.display="none";


    }else{
        
                      document.getElementById('spinparent').style.display="block";

    }
  };
  xhttp.open("GET", "/test/search.php?type="+type+"&search="+search, true);
  xhttp.send();


                
}

        </script>
                        
<script>
  if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('service-worker.js')
      .then(function(reg){
        console.log("Yes, it did.");
      }).catch(function(err) {
        console.log("No it didn't. This happened: ", err)
      });
  }
</script>
    <script src="scripts/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="scripts/ump.min.js" type="text/javascript"></script>
    <script src="scripts/epggea.js" type="text/javascript"></script>
    <script src="scripts/index.js" type="text/javascript"></script>



