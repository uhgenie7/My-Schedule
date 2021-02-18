$(function () {
  $.ajax({
    url: '/myschedule/pages/read_json.php',
    success: function (result) {
      let obj = JSON.parse(result);
      console.log(obj);
      let fwRate = Number(obj[0].fw_rate);
      let csRate = Number(obj[0].cs_rate);
      let plaRate = Number(obj[0].pla_rate);
      let renRate = Number(obj[0].ren_rate);

      let schAvg = (fwRate * 0.2) + (csRate * 0.4) + (plaRate * 0.3) + (renRate * 0.1)

      $(".circle-graph-container").append(`<div class="circle-graph easyPieChart" data-percent="${schAvg}">
        <p>${schAvg}%</p>
      </div>`)
    }
  });
});

  