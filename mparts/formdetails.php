
        <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <!-- the form details would go inside this div -->
  <div class="overlay-content" id="content">
<div>
<i class="fa fa-spinner fa-spin" style="font-size:48px;color:red"></i>
</div>  

</div>
</div>

<script>
function openNav(q) {
    document.getElementById("myNav").style.display = "block";
    
    
     var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML =
      this.responseText;
    }else{document.getElementById("content").innerHTML ='<div style="position:fixed;top: 50%;left: 35%;"><i class="fa fa-spinner fa-spin" style="font-size:98px;color:red"></i></div>';
    }
  };
  xhttp.open("GET", "/test/bs7.php?q="+q, true);
  xhttp.send();

    
}

function closeNav() {
    document.getElementById("myNav").style.display = "none";
}
</script>
   