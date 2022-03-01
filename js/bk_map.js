document.addEventListener(
  "DOMContentLoaded",
  function () {
    svgJapan({
      element: "#my-map-container",
      // type: "full",
      type: "deform",
      // activeColor: "",
      withTips: "",
      regionality: "true",
      width: "100%",
    });
    document.getElementById("strokes").style.display = "none";
  },
  false
);

// 地方をクリックしたときの関数
// function clickRegionFunc() {}
document.addEventListener(
  "svgmap.click",
  function clickRegionFunc(e) {
    const clickedRegion = e.target.getAttribute("data-region");
    console.log(clickedRegion);
    console.log(screen.width);
    const clickedPrefsArr = [
      [1],
      [2, 3, 4, 5, 6, 7],
      [8, 9, 10, 11, 12, 13, 14],
      [15, 16, 17, 18, 19, 20, 21, 22, 23],
      [24, 25, 26, 27, 28, 29, 30],
      [31, 32, 33, 34, 35],
      [36, 37, 38, 39],
      [40, 41, 42, 43, 44, 45, 46, 47],
    ];
    console.log(document.getElementById("my-map-container"));
    // スマホサイズのとき
    if (screen.width < 480) {
      // 拡大
      // document.getElementById("container").style.height = "600px";
      document.getElementById("my-map-container").style.height = "780px";
      document.getElementById("my-map-container").style.width = "200%";

      // 選択した地方が画面の中央になるように位置を変更
      if (clickedRegion == 1) {
        document.getElementById("my-map-container").style.top = "10%";
        document.getElementById("my-map-container").style.right = "20%";
      } else if (clickedRegion == 2) {
        document.getElementById("my-map-container").style.top = "-40%";
        document.getElementById("my-map-container").style.right = "18%";
      } else if (clickedRegion == 3) {
        document.getElementById("my-map-container").style.bottom = "-20%";
        document.getElementById("my-map-container").style.right = "12%";
      } else if (clickedRegion == 4) {
        document.getElementById("my-map-container").style.bottom = "-30%";
        document.getElementById("my-map-container").style.right = "-15%";
      } else if (clickedRegion == 5) {
        document.getElementById("my-map-container").style.bottom = "-20%";
        document.getElementById("my-map-container").style.right = "-50%";
      } else if (clickedRegion == 6) {
        document.getElementById("my-map-container").style.bottom = "-30%";
        document.getElementById("my-map-container").style.left = "-20%";
      } else if (clickedRegion == 7) {
        document.getElementById("my-map-container").style.bottom = "0%";
        document.getElementById("my-map-container").style.left = "-20%";
      } else if (clickedRegion == 8) {
        document.getElementById("my-map-container").style.bottom = "-8%";
        document.getElementById("my-map-container").style.left = "18%";
      }

      //
      document.removeEventListener("svgmap.click", clickRegionFunc);

      // 都道府県をクリックしたときの関数
    }

    // 選択した都道府県が含まれた地方以外の地方を非表示にする
    (() => {
      for (let i = 1; i <= 48; i++) {
        if (
          i >= clickedPrefsArr[clickedRegion - 1][0] &&
          i <=
            clickedPrefsArr[clickedRegion - 1][
              clickedPrefsArr[clickedRegion - 1].length - 1
            ]
        ) {
          continue;
        }
        document.getElementById("pref-" + i).style.display = "none";
      }
    })();

    //
    // (() => {})();
  },
  false
);
