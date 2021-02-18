  <div class="categoryTabs">
    <a href="/myschedule/pages/sch_view.php?key=view_all" class="active">All</a>
    <a href="/myschedule/pages/sch_view.php?key=view_cs">CS</a>
    <a href="/myschedule/pages/sch_view.php?key=view_fw">FrameWork</a>
    <a href="/myschedule/pages/sch_view.php?key=view_renewal">Renewal</a>
    <a href="/myschedule/pages/sch_view.php?key=view_web">Web Planning</a>
  </div>
  <ul class="boardTable">
    <li class="boardTitle">
      <span class="boNum">번호</span>
      <span class="boCate">종류</span>
      <span class="boTit">제목</span>
      <span class="boReg">작성일</span>
    </li>

  <?php
    include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/db_conn.php";
    $sql = "select * from sch_txt order by sch_txt_num desc";
    $board_result=mysqli_query($dbConn, $sql);

    // $num = mysqli_num_rows($board_result);
    // db게시판에 존재하는 글 갯수
    // $표시번호 = $총게시물수 - (($표시되는 페이지수 - 1) * $표시되는 게시물수)
    while($board_row=mysqli_fetch_array($board_result)){
      $bo_num=$board_row['sch_txt_num'];
      $bo_cate=$board_row['sch_txt_cate'];
      $bo_tit=$board_row['sch_txt_tit'];
      $bo_reg=$board_row['sch_txt_reg'];
  ?>
    <li class="boardList">
      <span class="boNum"><?=$bo_num?></span>
      <span class="boCate"><?=$bo_cate?></span>
      <span class="boTit"><a href="/myschedule/pages/detail_view.php?num=<?=$bo_num?>"><?=$bo_tit?></a></span>
      <span class="boReg"><?=$bo_reg?></span>
    </li>
  <?php
    }
  ?>
  </ul>
  <div class="loadMore">
    <button type="button">더보기</button>
  </div>