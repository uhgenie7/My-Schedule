$(function () {
  // sub projects bar animation
  for (let i = 0; i < $(".subPfBar").length; i++) {
    let rateNum = $(".subPfBar").eq(i).find(".rateNum").val();
    $(".subPfBar").eq(i).find(".pfBar").animate({ width: rateNum + "%" }, 1200);
  }

 //header icon control
  // jquery 방식

  // $(".mIcon").click(function (e) {
  //   e.stopPropagation();
  //   $(this).toggleClass("on");

  //   if($(this).hasClass("on")){
  //     $(".depth-1").slideDown('fast');
  //   } else {
  //     $(".depth-1").slideUp('fast');
  //   }
  // });

  // $(document).click(function () {
  //   $(".mIcon").toggleClass("on");
  //   $(".depth-1").hide();
  // })

  // hidden input show and hide
  $(".updateConBtn").click(function () {
    $(this).toggleClass("on");
    if ($(this).hasClass("on")) {
      $(this).text("수정 취소");
      $(".hiddenTit, .hiddenCon, .subBtn").show();
      $(".boTit em, .boCon em").hide();
      } else {
        $(this).text("수정");
      $(".hiddenTit, .hiddenCon, .subBtn").hide();
      $(".boTit em, .boCon em").show();
    }
  })
});

let mIcon = document.querySelector(".mIcon");
let depth_1 = document.querySelector(".depth-1")

function navi(e) {
  e.stopPropagation();
  let hasClass = mIcon.classList.contains("on");
  mIcon.classList.toggle("on");
  if (!hasClass) {
    depth_1.style.display = "block";
  } else {
    depth_1.style.display = "none";
  }
}

mIcon.addEventListener("click", navi);
document.addEventListener("click", function () {
  mIcon.classList.remove("on");
  depth_1.style.display = "none";
});