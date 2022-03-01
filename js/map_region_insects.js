$(function () {
  $("#container").one("click", getDbRegionInsects);
  function getDbRegionInsects(e) {
    const clickedRegionId = e.target.getAttribute("data-region");
    $.ajax({
      url: "./module/read_db.php",
      // type: "POST",
      // data: { region_id: clickedRegionId, pref_id: clickedPrefId },
      dataType: "json",
    })
      .done((data) => {
        console.log("通信成功");
        $(data).each(function () {
          $("#text-container").append(
            `
            <h3>
              ${this.insect_name}
            </h3>
            `
          );
        });
        console.log(data);
        $("#container").off("click");
        $("#container").one("click", getDbPrefInsects);
      })
      .fail((data) => {
        console.log("通信失敗");
        // console.log(data);
      });
  }
  function getDbPrefInsects(e) {
    const clickedPrefId = e.target.getAttribute("id").replace("pref-", "");
    $.ajax({
      url: "./module/read_db.php",
      type: "POST",
      data: { pref_id: clickedPrefId },
      dataType: "json",
    })
      .done((data) => {
        console.log("通信成功");
        $(data).each(function () {
          $("#text-container").append(
            `
            <h3>
              ${this.insect_name}
            </h3>
            `
          );
        });
        console.log(data);
      })
      .fail((data) => {
        console.log("通信失敗");
        // console.log(data);
      });
  }
});
