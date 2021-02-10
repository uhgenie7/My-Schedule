<header>
  <div class="center headerWrap">
    <a href="/myschedule/index.php"><i class="fa fa-home"></i></a>
    <h1 id="title">Schedule Dashboard</h1>
    <div class="mIcon">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>


<script>
  const pathname = window.location.pathname;
  const changeTit = document.querySelector('#title');

  if(pathname.includes('input_form')){
    changeTit.innerText="Input Schedule";
  } 
</script>