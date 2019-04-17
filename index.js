window.onload=function(){
  addBorders();
}

function addBorders() {

  var area = document.getElementById("logos");

  var footer = area.getElementsByTagName('div');
  for( var i = 0; i < 4; i++ ) {

    footer[i].onmouseover = function() {
      if(true) {
        this.classList.add("hover");
      }
    };

    footer[i].onmouseout = function() {
      if(true) {
        this.classList.remove("hover");
      }
    };
  }
}
