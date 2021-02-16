<footer>
  <p>Designed by MyDesign : my design@n-site.com</p>
</footer>

<script>
  const pathname = window.location.pathname;
  const changeTit = document.querySelector('#title');
  const rateNum =document.querySelectorAll('.rateNum');

  if(pathname.includes('input_form')){
    changeTit.innerText="Schedule Input";
      for(let i=0; i<rateNum.length; i++){
      rateNum[i].readOnly=true;
    }
  } else if(pathname.includes('sch_view')){
    changeTit.innerText="Schedule Board";
  }
</script>