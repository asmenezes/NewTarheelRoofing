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
/*
//on document ready
//get position of all the "links"
//if scroll position is "under" a certain link take all highlights away then give its menu item a highlight
//on document resize re check position of the "links"
#about
#expectations
#services
#contact
#careers

*/

/*
let linksArr = [];
let posArr = [];
let sectionArr = [];
let currentIndex = 0;
document.onload = getLinks();
document.onload = getPositions();
window.onresize = getPositions();

function getPositions(){
for (var i = 0; i < sectionArr.length; i++) {
  posArr[i] = sectionArr[i].getBoundingClientRect();
  console.log(posArr[i]);
}
}
function doSomething(pos){
  let cont = true;

  for (var i = 0; i < posArr.length; i++) {
      linksArr[i].classList.remove("high");

  }
for (var i = 0; i < posArr.length && cont; i++) {
  if(posArr[i].top <= pos){
    cont = false;
    linksArr[i].classList.add("high");
    console.log(linksArr[i].classList)
  }
}
}
function getLinks(){
linksArr[0] = document.getElementById('navcareers');
linksArr[1] = document.getElementById('navcontact');
linksArr[2] = document.getElementById('navservices');
linksArr[3] = document.getElementById('navexpectations');
linksArr[4] = document.getElementById('navabout');


sectionArr[0] = document.getElementById('careers');
sectionArr[1] = document.getElementById('contact');
sectionArr[2] = document.getElementById('services');
sectionArr[3] = document.getElementById('expectations');
sectionArr[4] = document.getElementById('about');
console.log(linksArr)
console.log(sectionArr)

}



document.addEventListener('scroll', function(e) {
  lastKnownScrollPosition = window.scrollY;


  setTimeout(function() {
      doSomething(lastKnownScrollPosition);




  },500);
});
*/
/*
Gutter Guard Slides
*/
let gutterImage = document.getElementById('gg');
gg.style.backgroundColor = "darkgray"
let currentGGIndex = 0;
nextImg();
// "background-image" → "url(\"./assets/Third.jpg\")" }
win.setInterval(nextImg,2000);
function nextImg(){
  currentGGIndex++;
  currentGGIndex %= 6;
gutterImage.style.backgroundImage =  "url(\"./assets/GG" + currentGGIndex + "LRR.jpg\")";
//console.log(gutterImage.style.backgroundImage);
}
