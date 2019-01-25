
<div class="mail" id="subscribe">
<form>
  <div class="container" id="subs">
  <p>Subscribe to our NewsLetter to get Updates Daily.</p>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Name" name="name" required id="sname">
    <input type="text" placeholder="Email address" name="mail" required id="semail">
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
    </label>
  </div>

  <div class="container" onclick="submit()">
    <input type="submit" value="Subscribe" onclick="return false">
  </div>
</form>
</div>
<script>
    function subscribe(){
        
        var subs = document.getElementById('subscribe');
        if(subs.style.display == 'block'){
            subs.style.display = 'none';
        }else{
            subs.style.display = 'block';
        }
    }
    
</script>

<script>
    function submit(){
        
        var sname=document.getElementById('sname').value;
                      var semail=document.getElementById('semail').value;
                      var xhttp=new XMLHttpRequest();
                      xhttp.onreadystatechange=function(){if(this.readyState==4&&this.status==200){document.getElementById("subs").innerHTML='Thanks For Subscribing.';}};
                      xhttp.open("POST","/test/subscribe.php",true);
                      xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                      xhttp.send("sname="+sname+"&semail="+semail);
                     return false;
                     }
</script>
