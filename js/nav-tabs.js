    class Tabs {
  
        constructor(cssSelector){
          this.$tab = document.querySelector(cssSelector);
          
          this.initButtons();
          
          this.initFirstTab();
        }
        
        initButtons(){
          const $tabs = this.$tab.querySelectorAll(".tab");
          const $btnContainer = this.$tab.querySelector(".nav-tabs");
          for(const $tab of $tabs){
            const $li = document.createElement("li");
            $li.classList.add("nav-item");
            const $a = document.createElement("a");
            $a.classList.add("nav-link");
            $a.href = "#";
            
            $li.appendChild($a);
            $btnContainer.appendChild($li);
            
            $a.textContent = $tab.getAttribute("data-title");
            
            $a.addEventListener("click", () => this.onTabClicked($tab));
          }
        }
        
        initFirstTab(){
          const $tab = this.$tab.querySelectorAll(".tab")[0];
          this.openTab($tab);
        }
        
        onTabClicked($tab){
          this.openTab($tab);
        }
        
        openTab($tab){
          this.$tab.querySelectorAll(".tab").forEach($tab => {
            $tab.classList.remove("active");
          });
          
          $tab.classList.add("active");
        }       
      };
      
      
      const tabs = new Tabs(".tabs");
      function openTabWithName(name){
        tabs.$tab.querySelectorAll('.tab').forEach($tab => {
            if($tab.getAttribute('data-title').toLowerCase() == name.toLowerCase()){
                tabs.openTab($tab);
            }
         })
        }
        
      var params = new URLSearchParams(location.search)
       const allButton = document.querySelectorAll("button");
        allButton.forEach($button => {
        $button.addEventListener('click', openTabWithName(params.get("tab")));
    })   