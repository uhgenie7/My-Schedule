<meta charset="UTF-8" />
<?php
  $projectCate = $_POST['projectCate'];
  $projectTit = nl2br($_POST['projectTit']);
  $projectCon = nl2br($_POST['projectCon']);
  $projectTit = addslashes($projectTit);
  $projectCon = addslashes($projectCon);
  $regDate = date("Y-m-d");
// $_POST['name'] 은 input_form.php에서 name값을 적어준 것이다.
// input_form.php 에서 form 을 method=post로 받아주지 않으면 에러가 뜬다

echo $projectCate, $projectTit, $projectCon, $regDate;

include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/db_conn.php";

    $sql="insert into sch_txt(
    sch_txt_cate, 
    sch_txt_tit, 
    sch_txt_con, 
    sch_txt_reg) values(
      '$projectCate',
      '$projectTit',
      '$projectCon',
      '$regDate')";

  mysqli_query($dbConn, $sql);


  echo "
    <script>
      alert('진행 상황이 추가되었습니다');
      location.href='/myschedule/pages/sch_view.php?key=view_all';
    </script>
    ";

?>