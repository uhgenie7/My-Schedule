<meta charset="UTF-8" />
<?php
  $sch_num=1;
  $sch_cs=$_REQUEST['sch_cs_rate'];
  $sch_fw=$_REQUEST['sch_fw_rate'];
  $sch_ren=$_REQUEST['sch_ren_rate'];
  $sch_pla=$_REQUEST['sch_pla_rate'];

  include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/db_conn.php";
  $sql="update schedule_progress set sch_cs=$sch_cs, sch_fw=$sch_fw, sch_ren=$sch_ren, sch_pla=$sch_pla where sch_num=$sch_num";
  mysqli_query($dbConn, $sql);

  $sql="select * from schedule_progress where sch_num=$sch_num";

  $sch_result=mysqli_query($dbConn, $sql);

  $arr=array();
  while($sch_row=mysqli_fetch_array($sch_result)){
    array_push($arr, array(
      'cs_rate' => $sch_row['sch_cs'],
      'fw_rate' => $sch_row['sch_fw'],
      'ren_rate' => $sch_row['sch_ren'],
      'pla_rate' => $sch_row['sch_pla']
    ));
  };

  file_put_contents($_SERVER["DOCUMENT_ROOT"]."/myschedule/data/sch_rate.json", json_encode($arr, JSON_PRETTY_PRINT));

  echo "
    <script>
      alert('수정이 완료되었습니다');
      location.href='/myschedule/index.php';
    </script>
  "
?>