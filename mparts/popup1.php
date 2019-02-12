<div id="myModal" class="modal">
    <div id="amazon">
<!-- mobile adds -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1135685717282401"
     data-ad-slot="1513060368"
     data-ad-format="auto"></ins>
    </div>
      <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2>
                            <div id="ptitle">Modal Header</div>
                        </h2>
                    </div>
                    <div class="modal-body" id='fill'>
                       <a href="#"></a><i class="fa fa-external-link" style="color:red"></i><br>
                        </div>

                    <div class="modal-footer">
                    <div id="whtsicon">
                        <i class="fa fa-3x fa-whatsapp" style="color:green;"></i>
                    </div>
                    <div id="fbicon">
                        <i class="fa fa-3x fa-facebook"></i>
                    </div>
                        <div id='open'>
                            <h3>
                                <span onclick="openNav()">&#9776;Form Details</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                // Get the modal

                function pop(x, y, val) {

                    var modal = document.getElementById('myModal');

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal
                    modal.style.display = "block";
                    document.getElementById("ptitle").innerHTML = document.getElementById(val).innerHTML;
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                          var l="";
                          var myObj = JSON.parse(this.responseText);
                          for(link in myObj.links){

                          name = myObj.links[link].name;
                          if('link_name' in myObj.links[link]) {
                              name += '( ' +myObj.links[link].link_name + ' )';

                          }
                          href = myObj.links[link].link;


                                l += '<a href="' + href + '" target="_blank">' + name + '</a> <i class="fa fa-external-link" style="color:red"></i><br>';
                            }
                            document.getElementById("fill").innerHTML = l;
                            document.getElementById("open").innerHTML = '<h3><span style="cursor:pointer" onclick=openNav("' + myObj.link + '")>&#9776; Form Details</span></h3>';
                            (adsbygoogle = window.adsbygoogle || []).push({});


                        } else {
                            document.getElementById("whtsicon").innerHTML = '<a href="whatsapp://send?text=http://apanaresult.com/index5.php?type=' + x + '%26id=' + y + '" data-action="share/whatsapp/share"><i class="fa fa-3x fa-whatsapp" style="color:green;"></i>';
                            document.getElementById("fill").innerHTML = '<i class="fa fa-refresh fa-spin fa-fw"></i>';
                            // facebook like button must go down
                            document.getElementById("amazon").innerHTML ='<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1135685717282401" data-ad-slot="1513060368" data-ad-format="auto"></ins>';
                        }
                    }
                    ;
                    xhttp.open("GET", "/test/get_links.php?type=" + x + "&id=" + y + "&submit=Submit", true);
                    xhttp.send();

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
                }
            <?php if(isset($_GET['type']) && isset($_GET['id'])){

    echo <<<EOT

    pop('$type', {$_GET['id']}, '{$_GET['type']}{$_GET['id']}');
EOT;

} ?>
</script>


<style>
        #amazon{

             width: 100%;
    position: fixed;
    top: 8%;
        }

    </style>
