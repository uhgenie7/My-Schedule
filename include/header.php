<?php
  session_start();
  if(isset($_SESSION['usercode'])){
    $usercode=$_SESSION['usercode'];
    // setcookie('PHPSESSID', '4u1op30l7cjeeimbq84lgf2qff', time() + 600, '/');
  } else {
    echo "
    <script>
      location.href='/myschedule/pages/auth_form.php';
    </script>
    ";
  }
?>

<header>
  <div class="center headerWrap">
    <a href="/myschedule/php/sign_out.php"><i class="fa fa-sign-out"></i></a>
    <h1><a href="/myschedule/index.php" id="title">Schedule Dashboard</a></h1>
    <div class="mIcon">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="hiddenHeader">
      <ul class="depth-1">
        <li><a href="/myschedule/index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="/myschedule/pages/input_form.php"><i class="fa fa-pencil"></i></a></li>
        <li>
          <a href="/myschedule/pages/sch_view.php?key=view_all"><i class="fa fa-search"></i></a>
          <ul class="depth-2">
            <li><a href="#">ALL</a></li>
            <li><a href="#">Database</a></li>
            <li><a href="#">API</a></li>
            <li><a href="#">Renewal</a></li>
            <li><a href="#">WEB Planning</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</header>
