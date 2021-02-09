$(function () {
  // $(".pfBar").stop().animate({ width: '70%' }, 1200);

  for (let i = 0; i < $(".subPfBar").length; i++){
    let rateNum = $(".subPfBar").eq(i).find(".rateNum").val();
    $(".subPfBar").eq(i).find(".pfBar").animate({ width: rateNum + "%" }, 1200);

    // $(".pfBar").stop().animate({ width: rateNum }, 1200);
  }
  
});