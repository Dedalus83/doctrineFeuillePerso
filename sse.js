if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("reload.php");
    source.onmessage = function(event) {
        try{
            const data = JSON.parse(event.data);
            toggle(data);
           
        }catch(err){

        }
        
      document.getElementById("result").innerHTML += event.data + "<br>";
    };

    window.addEventListener("beforeunload", () => source.close());
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
  }