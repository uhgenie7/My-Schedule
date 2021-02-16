<?php
// database project latest date
  $db_date_sql="select * from sch_txt where sch_txt_cate='DBProject' order by sch_txt_num desc limit 1";
  $db_date_result=mysqli_query($dbConn, $db_date_sql);
  $db_date_row=mysqli_fetch_array($db_date_result);
  $db_date=$db_date_row['sch_txt_reg'];
  // apibase project latest date
  $api_date_sql="select * from sch_txt where sch_txt_cate='ApiProject' order by sch_txt_num desc limit 1";
  $api_date_result=mysqli_query($dbConn, $api_date_sql);
  $api_date_row=mysqli_fetch_array($api_date_result);
  $api_date=$api_date_row['sch_txt_reg'];
  // renuwal project latest date
  $ren_date_sql="select * from sch_txt where sch_txt_cate='RenewalProject' order by sch_txt_num desc limit 1";
  $ren_date_result=mysqli_query($dbConn, $ren_date_sql);
  $ren_date_row=mysqli_fetch_array($ren_date_result);
  $ren_date=$ren_date_row['sch_txt_reg'];
  // web planning project latest date
  $web_date_sql="select * from sch_txt where sch_txt_cate='WebProject' order by sch_txt_num desc limit 1";
  $web_date_result=mysqli_query($dbConn, $web_date_sql);
  $web_date_row=mysqli_fetch_array($web_date_result);
  $web_date=$web_date_row['sch_txt_reg'];  
?>