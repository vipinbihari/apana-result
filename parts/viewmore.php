  <script>
           
// Get the modal
          
// x is type of deta we want to seee
            // y is the id of the data last list data
        var countp1 = 1;
        var countp2 = 1;
        var countp3 = 1;
        var countp4 = 1;
        var countp5 = 1;
        var countp6 = 1;
        var countp7 = 1;
        var countp8 = 1;
        var countp9 = 1;
            var id=0;
    function moreTiles(x,y,z) {
        if(z=='post1'){
           y = y - countp1*5;
            id = y;
            console.log(countp1++);
           }
        
           if(z=='post2'){
                y = y - countp2*5;
            id = y;
            console.log(countp2++);
                         
           }
           
        if(z=='post3'){
             y = y - countp3*5;
            id = y;
            console.log(countp3++);
          
           }
           
           
        if(z=='post4'){
             y = y - countp4*5;
            id = y;
            console.log(countp4++);
           
           }
        if(z=='post5'){
           
             y = y - countp5*5;
            id = y;
            console.log(countp5++);
           }
        if(z=='post6'){
             y = y - countp6*5;
            id = y;
            console.log(countp6++);
           
           }
        if(z=='post7'){
           
             y = y - countp7*5;
            id = y;
            console.log(countp7++);
           }
          if(z=='post8'){
           
             y = y - countp8*5;
            id = y;
            console.log(countp8++);
           }
          if(z=='post9'){
           
             y = y - countp9*5;
            id = y;
            console.log(countp9++);
           }
       
     var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(z).innerHTML +=
      this.responseText;
    }
  };
  xhttp.open("GET", "/test/bs6.php?type="+x+"&id="+id+"&submit=Submit", true);
  xhttp.send();

        
    }
    
        </script>

