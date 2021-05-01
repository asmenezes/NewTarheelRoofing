function menuSwap(){
  var xlist = document.getElementsByClassName("navlist");
  for(x in xlist){
  if (xlist[x].className === "navlist") {
    xlist[x].className += " res";
      } else {
    xlist[x].className = "navlist";
  }
}

}
let win = window
    let docEl = document.documentElement
let navbar = document.getElementById('topnav');

win.onscroll = function(){
  navbar = document.getElementById('topnav');
   var sTop = (this.pageYOffset || docEl.scrollTop)  - (docEl.clientTop || 0);
   navbar.style.backgroundColor =  sTop > 100 ? "var(--accent-color)":"transparent" ;
};
