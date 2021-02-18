$(function () {
  $.ajax({
    url: '/myschedule/data/sch_rate.json',
    success: function (result) {
      let fwRate = Number(result[0].fw_rate);
      let csRate = Number(result[0].cs_rate);
      let plaRate = Number(result[0].pla_rate);
      let renRate = Number(result[0].ren_rate);

      let schAvg = (fwRate * 0.2) + (csRate * 0.4) + (plaRate * 0.3) + (renRate * 0.1)

      $(".circle-graph-container").append(`<div class="circle-graph easyPieChart" data-percent="${schAvg}">
        <p>${schAvg}%</p>
      </div>`)
    }
  });
});

  