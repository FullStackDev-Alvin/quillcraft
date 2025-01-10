const sidebarBtn = document.querySelector(".toggle-btn");
const sidebar = document.querySelector("aside");

sidebarBtn.addEventListener("click", () => {
  document.body.classList.toggle("active");
});

var title = document.querySelector(".title");
var middle = document.querySelector(".middle");
var bottom = document.querySelector(".bottom");
function post() {
  title.innerHTML = "<h1>Posts</h1>";
  middle.innerHTML =
    "<div class='blocks' style='width: 100%;'><h1>Hello world</h1></div > ";
  bottom.innerHTML = "<div class='post'><h1>Name</h1><p>Description</p></div>";
}
