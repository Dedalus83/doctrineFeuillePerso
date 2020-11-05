let draw =  {
    init:function(){
        self=this;
        this.clickX = new Array();
        this.clickY = new Array();
        this.clickDrag = new Array();
        this.paint;
        this.canvasDiv = document.getElementById('canvasDiv');
        this.canvas = document.createElement('canvas');
        this.canvas.setAttribute('width', "2100px");
        this.canvas.setAttribute('height', "945px");
        this.canvas.setAttribute('id', 'canvas');
        this.canvasDiv.appendChild(this.canvas);
        if(typeof G_vmlCanvasManager !== 'undefined') {
            this.canvas = G_vmlCanvasManager.initElement(this.canvas);
        }
        this.context = canvas.getContext("2d");

        $('#canvas').mousedown(function(e){
            var mouseX = e.pageX - this.offsetLeft;
            var mouseY = e.pageY - this.offsetTop;
              
            this.paint = true;
            draw.addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop);
            draw.redraw();
        });
      
        $('#canvas').mousemove(function(e){
            if(this.paint){
            draw.addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
            draw.redraw();
            }
        });     
      
        $('#canvas').mouseup(function(e){
            this.paint = false;
        });
      
        $('#canvas').mouseleave(function(e){
            this.paint = false;
        });
    },
    addClick:function(x, y, dragging){
        this.clickX.push(x);
        this.clickY.push(y);
        this.clickDrag.push(dragging);
    },
    redraw:function(){
            this.context.clearRect(0, 0, this.context.canvas.width, this.context.canvas.height); // Clears the canvas
      
            this.context.strokeStyle = "#333";
            this.context.lineJoin = "round";
            this.context.lineWidth = 5;
      
            for(var i=0; i < this.clickX.length; i++) {      
                this.context.beginPath();
                if(this.clickDrag[i] && i){
                        this.context.moveTo(this.clickX[i-1], this.clickY[i-1]);
                }else{
                        this.context.moveTo(this.clickX[i]-1, this.clickY[i]);
                }
                this.context.lineTo(this.clickX[i], this.clickY[i]);
                this.context.closePath();
                this.context.stroke();
                
            }
    },
            clear:function(){
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.clickX = new Array();
        this.clickY = new Array();
        this.clickDrag = new Array();
    }
    }

    document.addEventListener("DOMContentLoaded", () => {
    draw.init();


    $drawingCurrent = document.getElementsByTagName('canvas');
    $('#save-to-local-storage').click(function () {
        window.localStorage.setItem('canvas_save', JSON.stringify($drawingCurrent)); 
      });
    
      // check if localstorage has an array of strokes saved 
    // if(window.localStorage.getItem('canvas_save')) { 
    //     $drawingCurrent = JSON.parse(localStorage.getItem('canvas_save'));
    //     redraw();
    //  }
});