// progressbar.js@1.0.0 version is used
// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

var hokkaidoPro = new ProgressBar.Circle(hokkaidoProgressbar, {
  strokeWidth: 10,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var tohokuPro = new ProgressBar.Circle(tohokuProgressbar, {
  strokeWidth: 10,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var kantoPro = new ProgressBar.Circle(kantoProgressbar, {
  strokeWidth: 10,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var chubuPro = new ProgressBar.Circle(chubuProgressbar, {
  strokeWidth: 10,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var kinkiPro = new ProgressBar.Circle(kinkiProgressbar, {
  strokeWidth: 10,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var chugokuPro = new ProgressBar.Circle(chugokuProgressbar, {
  strokeWidth: 10,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var shikokuPro = new ProgressBar.Circle(shikokuProgressbar, {
  strokeWidth: 10,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var kyushuPro = new ProgressBar.Circle(kyushuProgressbar, {
  strokeWidth: 10,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});

hokkaidoPro.animate(1.0); // Number from 0.0 to 1.0
tohokuPro.animate(0.9);
kantoPro.animate(0.8);
chubuPro.animate(0.7);
kinkiPro.animate(0.6);
chugokuPro.animate(0.5);
shikokuPro.animate(0.4);
kyushuPro.animate(0.3);

const modalBg = document.getElementsByClassName("modal-bg")[0];
const hokkaidoModalCon = document.getElementsByClassName(
  "hokkaido-modal-container"
)[0];
const hokkaidoBtn = document.getElementById("hokkaidoProgressbar");
hokkaidoBtn.addEventListener("click", () => {
  modalBg.style.display = "block";
  hokkaidoModalCon.style.display = "block";
});

const modalOff = () => {
  modalBg.style.display = "none";
  hokkaidoModalCon.style.display = "none";
};

modalBg.addEventListener("click", modalOff);
