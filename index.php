<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-realidate">
    <!-- 로딩속도가 느려질 수 있음... -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="57x57" href="/myschedule/img/apple-icon-57x57.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/myschedule/img/favicon-16x16.png">
    <link rel="manifest" href="/myschedule/img/manifest.json">
    <title>Schedule Dashboard</title>
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
        <form action="/myschedule/php/update_rate.php" method="get" name="updateRate">
          <div class="container">
            <!-- total and each projects progress -->
              <?php
                include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/latest_date.php";
                include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/grid_up.php";
              ?>
              <!-- end of grid_up -->
              <div class="item btns">
                <button type="submit">진행률 수정</button>
                <button type="button" onclick="javascript:location.href='/myschedule/pages/input_form.php'">진행 상황 작성</button>
                <button type="button" onclick="javascript:location.href='/myschedule/pages/sch_view.php?key=view_all'">진행 상황 확인</button>
              </div>
              <!-- end of button -->
          </div>
          <!-- end of contatiner -->
        </form>
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
    <script src="/myschedule/js/total_avg.js" defer></script>
  </body>
</html>
