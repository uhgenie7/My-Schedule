<?php
  // cs project latest date
  $cs_date_sql="select * from sch_txt where sch_txt_cate='CSProject' order by sch_txt_num desc limit 1";
  $cs_date_result=mysqli_query($dbConn, $cs_date_sql);
  $cs_date_row=mysqli_fetch_array($cs_date_result);
  if(!$cs_date_row){
    $cs_date='NO DATA';
  } else {
    $cs_date=$cs_date_row['sch_txt_reg'];  
  }  
  // framework base project latest date
  $fw_date_sql="select * from sch_txt where sch_txt_cate='FwProject' order by sch_txt_num desc limit 1";
  $fw_date_result=mysqli_query($dbConn, $fw_date_sql);
  $fw_date_row=mysqli_fetch_array($fw_date_result);
  if(!$fw_date_row){
    $fw_date='NO DATA';
  } else {
    $fw_date=$fw_date_row['sch_txt_reg'];  
  }  
  // renuwal project latest date
  $ren_date_sql="select * from sch_txt where sch_txt_cate='RenewalProject' order by sch_txt_num desc limit 1";
  $ren_date_result=mysqli_query($dbConn, $ren_date_sql);
  $ren_date_row=mysqli_fetch_array($ren_date_result);
  if(!$ren_date_row){
    $ren_date='NO DATA';
  } else {
    $ren_date=$ren_date_row['sch_txt_reg'];  
  }  
  // web planning project latest date
  $web_date_sql="select * from sch_txt where sch_txt_cate='WebProject' order by sch_txt_num desc limit 1";
  $web_date_result=mysqli_query($dbConn, $web_date_sql);
  $web_date_row=mysqli_fetch_array($web_date_result);
  if(!$web_date_row){
    $web_date='NO DATA';
  } else {
    $web_date=$web_date_row['sch_txt_reg'];
  }
?>