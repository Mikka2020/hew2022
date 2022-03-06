// progressbar.js@1.0.0 version is used
// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

var hokkaido = new ProgressBar.Circle(hokkaidoProgressbar, {
  strokeWidth: 6,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var tohoku = new ProgressBar.Circle(tohokuProgressbar, {
  strokeWidth: 6,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var kanto = new ProgressBar.Circle(kantoProgressbar, {
  strokeWidth: 6,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var chubu = new ProgressBar.Circle(chubuProgressbar, {
  strokeWidth: 6,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var kinki = new ProgressBar.Circle(kinkiProgressbar, {
  strokeWidth: 6,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var chugoku = new ProgressBar.Circle(chugokuProgressbar, {
  strokeWidth: 6,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var shikoku = new ProgressBar.Circle(shikokuProgressbar, {
  strokeWidth: 6,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});
var kyushu = new ProgressBar.Circle(kyushuProgressbar, {
  strokeWidth: 6,
  easing: "easeInOut",
  duration: 1400,
  color: "#F5C421",
  trailColor: "#ddd",
  trailWidth: 1,
  svgStyle: null,
});

hokkaido.animate(1.0); // Number from 0.0 to 1.0
tohoku.animate(0.9);
kanto.animate(0.8);
chubu.animate(0.7);
kinki.animate(0.6);
chugoku.animate(0.5);
shikoku.animate(0.4);
kyushu.animate(0.3);
