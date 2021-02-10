$(function () {
  $.ajax({
    url: '/myschedule/data/sch_rate.json',
    success: function (result) {
      let apiRate = Number(result[0].api_rate);
      let dbRate = Number(result[0].db_rate);
      let plaRate = Number(result[0].pla_rate);
      let renRate = Number(result[0].ren_rate);

      let schAvg = (apiRate * 0.2) + (dbRate * 0.4) + (plaRate * 0.3) + (renRate * 0.1)

      $(".circle-graph-container").append(`<div class="circle-graph easyPieChart" data-percent="${schAvg}">
        <p>${schAvg}%</p>
      </div>`)
    }
  });
});

  