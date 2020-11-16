// function sleep (time) {
//     return new Promise((resolve) => setInterval(resolve, time));
//   }
  
//   sleep(1).then(() => {
    
//         source.onmessage = function(event) {
            
//           document.getElementById("result").innerHTML += event.data + "<br>";
//         };
    
//         window.addEventListener("beforeunload", () => source.close());
     
//   });

const fetchReloadData = async () => {
    const res = await fetch(`/reload.php`);
    const json = await res.json();
    toggle(json);
};
setInterval(fetchReloadData, 2500);