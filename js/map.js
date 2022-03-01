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
const myMapContainer = document.getElementById("map-container");
// 地方をクリックしたとき
$(function () {
  $(".prefecture-map").on("click", (e) => {
    // クリックした都道府県のid
    const clickedPrefId = e.target.getAttribute("id").replace("pref-", "");
    $(`#pref-${clickedPrefId}`).on("click", handleClickRegion(e));
    // 地方をクリックしたときの関数
    function handleClickRegion(e) {
      // クリックされた地方
      const clickedRegionId = e.target.getAttribute("data-region");
      console.log(clickedRegionId);
      // スマホとパソコンで表示処理を切り替え
      if (screen.width < 480) {
        // スマホサイズのとき
        myMapContainer.style.height = "780px";
        myMapContainer.style.width = "200%";

        // 選択した地方が画面の中央になるように位置を変更
        function locateRegionCenter(clickedRegionId) {
          if (clickedRegionId == 1) {
            // myMapContainer.css({ top: "10%", right: "20%" });
            myMapContainer.style.top = "10%";
            myMapContainer.style.right = "20%";
          } else if (clickedRegionId == 2) {
            myMapContainer.style.top = "-40%";
            myMapContainer.style.right = "18%";
          } else if (clickedRegionId == 3) {
            myMapContainer.style.bottom = "-20%";
            myMapContainer.style.right = "12%";
          } else if (clickedRegionId == 4) {
            myMapContainer.style.bottom = "-30%";
            myMapContainer.style.right = "-15%";
          } else if (clickedRegionId == 5) {
            myMapContainer.style.bottom = "-20%";
            myMapContainer.style.right = "-50%";
          } else if (clickedRegionId == 6) {
            myMapContainer.style.bottom = "-30%";
            myMapContainer.style.left = "-20%";
          } else if (clickedRegionId == 7) {
            myMapContainer.style.bottom = "0%";
            myMapContainer.style.left = "-20%";
          } else if (clickedRegionId == 8) {
            myMapContainer.style.bottom = "-8%";
            myMapContainer.style.left = "18%";
          } else {
            // パソコンサイズの表示処理
          }
        }
        locateRegionCenter(clickedRegionId);
      }
      // 選択した都道府県が地方に含まれているか
      function isClickedRegion(i) {
        return (
          i >= prefsArr[clickedRegionId - 1][0] &&
          i <=
            prefsArr[clickedRegionId - 1][
              prefsArr[clickedRegionId - 1].length - 1
            ]
        );
      }
      // 選択した都道府県が含まれた地方以外の地方を非表示にする処理
      for (let i = 1; i <= 48; i++) {
        if (isClickedRegion(i)) {
          // 押していない都道府県に関数を付与
          // if (clickedPrefId != i) {
          // $(`#pref-${i}`).on("click", clickRegionFunc(e));
          // continue;
          // console.log(1);
          // }
          continue;
        }
        $(`#pref-${i}`).attr("display", "none");
      }

      $(`#pref-${clickedPrefId}`).off("click", handleClickRegion);
      // 地方の処理が終わったので都道府県の処理を記述する

      for (i = 0; i < prefsArr[clickedRegionId - 1].length; i++) {
        $(`#pref-${parseInt(clickedPrefId) + i}`).on("click", clickPrefFunc);
      }
      // $(`#pref-${clickedPrefId + 1}`).one("click", clickPrefFunc);

      // 都道府県を拡大
      function clickPrefFunc() {
        for (let i = 1; i <= 48; i++) {
          if (i == clickedPrefId) {
            // console.log(clickedPrefId);
            continue;
          }
          $(`#pref-${i}`).attr("display", "none");
        }
      }
      // console.log(e.target.getAttribute("id").replace("pref-", ""));
    }
  });
});
