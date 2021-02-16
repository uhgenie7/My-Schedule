<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Board</title>
    <!-- awesome font -->
    <!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    /> -->
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

        $sch_db=$sch_row['sch_db'];
        $sch_api=$sch_row['sch_api'];
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
              <div class="item inputBox">
                <form action="/myschedule/php/schedule_input.php" method="post" name="schInput">
                  <div class="projectBox">
                    <select name="projectCate" id="projectCate" class="projectCate">
                      <option value="DBProject">Database project</option>
                      <option value="APIProject">API Project</option>
                      <option value="RenewalProject">Renewal Project</option>
                      <option value="WebProject">Web Planning Project</option>
                    </select>
                    <input type="text" name="projectTit" id="projectTit" class="projectTit" placeholder="일정 요약을 입력해 주세요">
                  </div>
                  <textarea name="projectCon" id="projectCon" class="projectCon" placeholder="상세 일정을 작성해 주세요"></textarea>
                </form>
              </div>
              <!-- end of grid_up -->
              <div class="item btns">
                <button type="button" class="submitBtn">작성</button>
                <button type="button" onclick="javascript:location.href='/myschedule/pages/sch_view.php?key=view_all'">진행 상황 확인</button>
                <!-- sch_view의 $include_path=$_GET['key']; 작업-->
              </div>
              <!-- end of button -->
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
      let submitBtn = document.querySelector(".submitBtn");
      submitBtn.addEventListener('click', function(){
        if(!document.schInput.projectTit.value){
          alert('일정 요약을 입력해주세요')
          document.schInput.projectTit.focus();
          return;
        }
        if(!document.schInput.projectCon.value){
          alert('일정 내용을 입력해주세요')
          document.schInput.projectCon.focus();
          return;
        }
        document.schInput.submit();
      });
    </script>
  </body>
</html>
