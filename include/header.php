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
        </li>
      </ul>
    </div>
  </div>
</header>

<script>
  const pathname = window.location.pathname;
  const changeTit = document.querySelector('#title');
  const rateNum =document.querySelectorAll('.rateNum');

  if(pathname.includes('input_form')){
    changeTit.innerText="Schedule Input";
      for(let i=0; i<rateNum.length; i++){
      rateNum[i].readOnly=true;
      //input 안의 숫자 읽기만 가능
    }
  } else if(pathname.includes('sch_view')){
    changeTit.innerText="Schedule Board";
      for(let i=0; i<rateNum.length; i++){
      rateNum[i].readOnly=true;
    }
  } else if(pathname.includes('detail_view')){
    changeTit.innerText="Detail Schedule";
      for(let i=0; i<rateNum.length; i++){
      rateNum[i].readOnly=true;
    }
  }
</script>