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

$(function () {
  function returnLoginUserId() {
    const cookies = document.cookie;
    const cookiesArray = cookies.split(";");
    for (let c of cookiesArray) {
      //一つ一つ取り出して
      let cArray = c.split("=");
      if (cArray[0] == "user_id") {
        const userId = cArray[1];
        return userId;
      }
    }
  }
  // InsectCnt はその地方に含まれる種の数
  // RegCnt は　ユーザが登録している種の数
  let hokkaidoInsectCnt = 0;
  let hokkaidoRegCnt = 0;
  let tohokuInsectCnt = 0;
  let tohokuRegCnt = 0;
  let kantoInsectCnt = 0;
  let kantoRegCnt = 0;
  let chubuInsectCnt = 0;
  let chubuRegCnt = 0;
  let kinkiInsectCnt = 0;
  let kinkiRegCnt = 0;
  let chugokuInsectCnt = 0;
  let chugokuRegCnt = 0;
  let shikokuInsectCnt = 0;
  let shikokuRegCnt = 0;
  let kyushuInsectCnt = 0;
  let kyushuRegCnt = 0;

  // 都道府県idを受け取って地方番号(1~8)で返す
  function findIncludePrefInRegion(prefId) {
    const prefsArr = [
      [1],
      [2, 3, 4, 5, 6, 7],
      [8, 9, 10, 11, 12, 13, 14],
      [15, 16, 17, 18, 19, 20, 21, 22, 23],
      [24, 25, 26, 27, 28, 29, 30],
      [31, 32, 33, 34, 35],
      [36, 37, 38, 39],
      [40, 41, 42, 43, 44, 45, 46, 47],
    ];
    for (let i = 0; i <= 7; i++) {
      if (prefsArr[i].includes(prefId)) {
        // if (i == 0) return i;
        return i + 1;
      }
    }
  }
  $.ajax({
    url: "./../model/map_read_db.php",
    type: "POST",
    data: { user_id: returnLoginUserId() },
    dataType: "json",
  })
    .done((data) => {
      $(data).each(function (i, j) {
        const prefId = j.pref_id;
        if (this.pref_id == 1) {
          hokkaidoInsectCnt++;
          if (this.id != null) {
            hokkaidoRegCnt++;
          }
        } else if (
          j.pref_id == 2 ||
          j.pref_id == 3 ||
          j.pref_id == 4 ||
          j.pref_id == 5 ||
          j.pref_id == 6 ||
          j.pref_id == 7
        ) {
          tohokuInsectCnt++;
          if (this.id != null) {
            tohokuRegCnt++;
          }
        } else if (
          j.pref_id == 8 ||
          j.pref_id == 9 ||
          j.pref_id == 10 ||
          j.pref_id == 11 ||
          j.pref_id == 12 ||
          j.pref_id == 13 ||
          j.pref_id == 14
        ) {
          kantoInsectCnt++;
          if (this.id != null) {
            kantoRegCnt++;
          }
        } else if (
          j.prefId == 15 ||
          j.prefId == 16 ||
          j.prefId == 17 ||
          j.prefId == 18 ||
          j.prefId == 19 ||
          j.prefId == 20 ||
          j.prefId == 21 ||
          j.prefId == 22 ||
          j.prefId == 23
        ) {
          chubuInsectCnt++;
          if (this.id != null) {
            chubuRegCnt++;
          }
        } else if (
          j.pref_id == 24 ||
          j.pref_id == 25 ||
          j.pref_id == 26 ||
          j.pref_id == 27 ||
          j.pref_id == 28 ||
          j.pref_id == 29 ||
          j.pref_id == 30
        ) {
          kinkiInsectCnt++;
          if (this.id != null) {
            kinkiRegCnt++;
          }
        } else if (
          j.pref_id == 31 ||
          j.pref_id == 32 ||
          j.pref_id == 33 ||
          j.pref_id == 34 ||
          j.pref_id == 35
        ) {
          chugokuInsectCnt++;
          if (this.id != null) {
            chugokuRegCnt++;
          }
        } else if (
          j.pref_id == 36 ||
          j.pref_id == 37 ||
          j.pref_id == 38 ||
          j.pref_id == 39
        ) {
          shikokuInsectCnt++;
          if (this.id != null) {
            shikokuRegCnt++;
          }
        } else if (
          j.pref_id == 40 ||
          j.pref_id == 41 ||
          j.pref_id == 42 ||
          j.pref_id == 43 ||
          j.pref_id == 44 ||
          j.pref_id == 45 ||
          j.pref_id == 46 ||
          j.pref_id == 47
        ) {
          kyushuInsectCnt++;
          if (this.id != null) {
            kyushuRegCnt++;
          }
        }
      });
      // console.log("通信成功");
    })
    .fail((error) => {
      console.log(error);
      console.log("通信失敗");
    })
    .always(() => {
      // プログレスバーを描画
      hokkaidoPro.animate(hokkaidoRegCnt / hokkaidoInsectCnt);
      tohokuPro.animate(tohokuRegCnt / tohokuInsectCnt);
      kantoPro.animate(kantoRegCnt / kantoInsectCnt);
      chubuPro.animate(chubuRegCnt / chubuInsectCnt);
      kinkiPro.animate(kinkiRegCnt / kinkiInsectCnt);
      chugokuPro.animate(chugokuRegCnt / chugokuInsectCnt);
      shikokuPro.animate(shikokuRegCnt / shikokuInsectCnt);
      kyushuPro.animate(kyushuRegCnt / kyushuInsectCnt);
    });
});

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
