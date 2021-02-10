$(function () {
  $(window).ajaxComplete(function () {
    let pieSize = 250;
    let liWidth = $(window).width();
    let clear;

    if (liWidth > 401) {
      pieSize = 250;
    } else {
      pieSize = 180;
    }

    $('.circle-graph').easyPieChart({
      scaleColor: false,
      lineWidth: 40,
      lineCap: 'butt',
      barColor: '#003A79',
      trackColor: '#3b5999' ,
      size: pieSize,
      animate: 800
    });

    $(window).resize(function () {
      let liWidth = $(window).width();
      if (liWidth > 400) {
        pieSize = 250;
      } else {
        pieSize = 180;
      }
      clear = setTimeout(function () {
          $('.circle-graph').removeData('easyPieChart').find('canvas').remove();
          $('.circle-graph').easyPieChart({
          scaleColor: false,
          lineWidth: 40,
          lineCap: 'butt',
          barColor: '#003A79',
          trackColor: '#3b5999' ,
          size: pieSize,
          animate: 1
          });
      }, 150);
    });
  });
});