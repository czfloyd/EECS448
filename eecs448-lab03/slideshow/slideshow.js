function previous() {
  let pictures = ["resources/hackku.jpg", "resources/kstate.jpeg", "resources/kc.jpg", "resources/alaska1.jpg", "resources/alaska2.jpg"]
  let location = document.getElementById("slideshow").src;
  location = location.substring(location.indexOf("resources"));
  let value = pictures.indexOf(location);
  value--;
  if (value == -1){
    value = 4;
  }
  document.getElementById("slideshow").src = pictures[value];
}

function next() {
  let pictures = ["resources/hackku.jpg", "resources/kstate.jpeg", "resources/kc.jpg", "resources/alaska1.jpg", "resources/alaska2.jpg"]
  let location = document.getElementById("slideshow").src;
  location = location.substring(location.indexOf("resources"));
  let value = pictures.indexOf(location);
  value++
  if (value == 5){
    value = 0;
  }
  document.getElementById("slideshow").src = pictures[value];
}
