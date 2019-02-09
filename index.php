<!-- DETECTING THE USER'S DEVICE-->
<?php include 'parts/mobiledetect.php'; ?>

<!-- ESTABLISHING THE CONNECTION TO APANARESULT DATABASE-->
<?php include 'parts/connection.php'; ?>

<!-- IF TYPE AND ID ARE ALSO SUBMITED AS PARAMETER SHOW FACEBOOK RANDOM IMAGE AND INSERT IT TO THE DATABASE-->
<?php include 'mparts/facethumb.php'; ?>

<!DOCTYPE html>
<html>
<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!-- INCLUDING AND DECIDING THE MOBILE META TAG FROM PHP WITH WHATSAPP THUMBNAIL SHARING-->
<?php include 'mparts/mobmeta.php'; ?>
<!-- INCLUDING ALL THE META SEARCH INFORMATION IN THE WEBSITE-->
<?php include 'parts/deskmeta.php'; ?>

<!-- LOADING ALL THE DEPENDENT CSS AND JAVASCRIPT FILES-->
<?php include 'parts/deskdepend.php'; ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115813186-1"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}
gtag('js',new Date());gtag('config','UA-115813186-1');</script>

<!-- GETTIGN THE PAGE IN CSS -->
<?php include 'parts/deskcss.php'; ?>
<div id="fb-root"></div>
    <!--face book sharing button -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>
<!-- INCLUDING WHATSAPP THUMBNAIL SHARING INSIDE BODY TAG-->
<?php include 'mparts/facethumbody.php'; ?>

<!-- GETTING THE FRONT THE THE WEBSITE INCLUDING HEADER-->
<?php include 'parts/desknav.php'; ?>

<!-- desktop add -->
<center>
  <ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-1135685717282401"
     data-ad-slot="6034027443"></ins>
</center>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- GETTING THE THREE ROWS OF MOVING MARQUEE IN DATABASE-->
<?php include 'parts/marquee.php'; ?>

<!-- GETTIGN THE PLATES DATA TO THE PAGE-->
<?php include 'parts/plates.php'; ?>

<!-- GETTING THE WHOLE TABLE FOR THE DESKTOP VIEW-->
<?php include 'parts/desktable.php'; ?>


<!-- desktop add -->
<center><ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-1135685717282401"
     data-ad-slot="6034027443"></ins></center>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
  <div style="display:none;">
        <div id="n" style="width:350px; margin-left:-4px;">
            <ul id="hometip">
          <div id="postname"><li>Delhi FCI Watchman Result 2018 </li></div>

                    <div id="footer"></div>

                <div id="date"><div id="sub">
                <input type="text" name="feedback" placeholder="Do You Have Any Question?" id="detail" autofocus="on">
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="feedsub" id="feedsub" onclick="submit();" return false>
                <input type="text" style="display:none" name="subtype" id="typein">
                <input type="text" style="display:none" name="subid" id="idin">
                    </div>
                 </div>

            </ul>
        </div>
    </div>




<script>
function submit() {
    var fid = document.getElementById('idin').value;
    var ftype = document.getElementById('typein').value;
    var fdetail = document.getElementById('detail').value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("sub").innerHTML = 'Thanks For FeedBack.';
    }
  };
  xhttp.open("POST", "test/feed.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("fid="+fid+"&ftype="+ftype+"&fdetail="+fdetail);
}
</script>



    <script>
// Get the modal

    function pop(x,y,val) {
      document.getElementById("postname").innerHTML = document.getElementById(val).innerHTML;
     var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var l="";
        var myObj = JSON.parse(this.responseText);
        for(i in myObj.sort_info){
 l+= '<li><a href="'+ i + '" target="_blank"><b>'+ myObj.sort_info[i] +'</b></a> <i class="fa fa-external-link" style="font-size:13px;color:red"></i></li>';

}
document.getElementById("footer").innerHTML = l;
        /*
document.getElementById("detail").innerHTML = '<span style="font-size:30px;"> Share On:</span><i class="fa fa-facebook-f" style="font-size:40px;color:blue"></i><i class="fa fa-twitter-f" style="font-size:40px;color:blue"></i>';
        */

    }else{
                var url="http://apanaresult.com/index5.php?type="+x+"&id="+y;
        var share = encodeURIComponent(url)
              document.getElementById("footer").innerHTML =  '<i class="fa fa-refresh fa-spin fa-fw" style="position:relative; top:30px; left:150px;font-size:55px;"></i>';
        document.getElementById("sub").innerHTML = '<input type="text" name="feedback" placeholder="Do You Have Any Question?" id="detail" autofocus="on">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="feedsub" id="feedsub" onclick="submit();" return false><input type="test" style="display:none" name="subtype" id="typein"><input type="test" style="display:none" name="subid" id="idin"><div class="fb-share-button" data-href="'+url+'" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='+share+'&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share ON : <i class="fa fa-facebook" style="font-size:36px;color:blue;padding-left:5px;"></i></a></div>';
        document.getElementById("typein").value =x;
        document.getElementById("idin").value =y;

    }
  };
  xhttp.open("GET", "/test/bs10.php?type="+x+"&id="+y+"&submit=Submit", true);
  xhttp.send();

    }


    </script>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
<div id="content">    <p>Some text in the Modal..</p>
</div>
  </div>

</div>


<script>
// When the user clicks the button, open the modal
 function modal(q) {
     var modal = document.getElementById('myModal');


    modal.style.display = "block";


// Get the modal


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



     var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML =
      this.responseText;
        (adsbygoogle=window.adsbygoogle||[]).push({});
    }else{document.getElementById("content").innerHTML ='<div style="position:relative; top:1px;left:50%;"><i class="fa fa-spinner fa-spin" style="font-size:98px;color:red"></i></div>';
    }
  };
  xhttp.open("GET", "/test/bs7.php?q="+q, true);
  xhttp.send();




}

</script>

   <?php include "parts/viewmore.php" ?>


</body>
</html>
