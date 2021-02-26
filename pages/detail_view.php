<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Board</title>
    <!-- awesome font -->
    <script src="https://kit.fontawesome.com/4d645dbcdc.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/myschedule/css/reset.css" />
    <link rel="stylesheet" href="/myschedule/css/style.css" />
    <link rel="stylesheet" href="/myschedule/css/media.css" />
  </head>
  <body>
    <!-- all contents are wrapped inside wrap -->
    <div class="wrap">
      <?php
        include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/header.php"
      ?>
      <!-- end of header -->
      <!-- php line start-->
      <?php
        $detail_num=$_GET['num'];
        include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/db_conn.php";
        $sql = "select * from schedule_progress";

        $sch_result=mysqli_query($dbConn, $sql);
        $sch_row=mysqli_fetch_array($sch_result);

        $sch_cs=$sch_row['sch_cs'];
        $sch_fw=$sch_row['sch_fw'];
        $sch_ren=$sch_row['sch_ren'];
        $sch_pla=$sch_row['sch_pla'];
      ?>
      <!-- php line end-->
      <div class="center gridWrap">
          <div class="inputContainer">
              <?php
                include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/latest_date.php";
                include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/grid_up.php";
              ?>
              <div class="item viewBox">
                 <?php
                      include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/db_conn.php";
                      $sql = "select * from sch_txt where sch_txt_num= $detail_num";
                      $board_result=mysqli_query($dbConn, $sql);
                      while($board_row=mysqli_fetch_array($board_result)){
                        $bo_num=$board_row['sch_txt_num'];
                        $bo_cate=$board_row['sch_txt_cate'];
                        $bo_tit=$board_row['sch_txt_tit'];
                        $bo_reg=$board_row['sch_txt_reg'];
                        $bo_con=$board_row['sch_txt_con'];
                  ?>
                <div class="detailTit">
                  <form action="/myschedule/php/detail_update.php?num=<?=$bo_num?>" method="post">
                  <!-- get방식으로 보내면 textarea가 길어지면 주소창이 더러워짐 -->
                    <div class="detailBox">
                      <h2><?=$bo_cate?></h2>
                    </div>
                      <ul class="viewTable">
                        <li class="viewTitle">
                          <span class="boNum">번호</span>
                          <span class="boTit">제목</span>
                          <span class="boCon">내용</span>
                          <span class="boReg">작성일</span>
                        </li>
                        <li class="viewList">
                          <span class="boNum"><?=$bo_num?></span>
                          <span class="boTit">
                            <input type="text" value="<?=$bo_tit?>" class="hiddenTit" name="updateTit">
                            <em><?=$bo_tit?></em>
                          </span>
                          <span class="boCon">
                            <em><?=$bo_con?></em>
                            <textarea class="hiddenCon" name="updateCon"><?=$bo_con?></textarea>
                          </span>
                          <span class="boReg"><?=$bo_reg?></span>
                        </li>
                        <?php
                          }
                        ?>
                      </ul>
                      <div class="subBtn">
                        <button type="submit">수정 사항 입력</button>
                      </div>
                  </form>
                    </div>
                  <!-- end of grid_up -->
                  <div class="item btns">
                    <button class="updateConBtn">수정</button>
                    <button onclick="confirmDel()">삭제</button>
                    <button type="button" class="submitBtn" onclick="javascript:location.href='/myschedule/pages/sch_view.php?key=view_all'">진행 상황 확인</button>
                  </div>
                  <!-- end of button -->  
                </div>
                <!-- end of detailTit -->
          </div>
          <!-- end of contatiner -->
      </div>
      <!-- end of center -->
      <?php
        include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/footer.php"
      ?>
      <!-- end of footer -->
    </div>
    <!-- end of wrap -->

    <!-- script files load -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
    <script src="/myschedule/js/piechart.js"></script>
    <script src="/myschedule/js/custom.js"></script>
    <script src="/myschedule/js/total_avg.js"></script>
    <script>
      function confirmDel(){
        let isCheck = confirm('정말로 삭제하시겠습니까?');
        if(isCheck==false){
          console.log("안삭제")
          return false;
        }else{
          console.log("삭제")
          location.href='/myschedule/php/detail_delete.php?num=<?=$bo_num?>'
        }
      }
    </script>
  </body>
</html>
