<meta charset="UTF-8" />
<?php
  $del_num=$_GET['num'];
  include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/db_conn.php";
  $sql="delete from sch_txt where sch_txt_num=$del_num";
  mysqli_query($dbConn, $sql);

  echo "
  <script>
    alert('삭제가 완료되었습니다');
    location.href='/myschedule/pages/sch_view.php?key=view_all';
  </script>
  ";
?>