window.onload=function(){
  addBorders();
  movieInfo();
}

function movieInfo() {
  let hrx = new XMLHttpRequest()
  var trivia;
  hrx.open("GET", "movies.php", true);
  hrx.send();

  hrx.onreadystatechange = function() {

    var list = document.getElementById("movies");
    alert(list.length);

  }
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
