<div class="item">
    <section class="graph-circle">
      <div class="circle-graph-container">
        <!-- <div class="circle-graph easyPieChart" data-percent="60">
          <p>60%</p>
        </div> -->
      </div>
      <p class="totalTit">Total Process Rates</p>
    </section>
  </div>           
  <div class="item subPfBar">
    <div class="pfImg">
      <i class="fa fa-database"></i>
    </div>
    <div class="pfContents">
      <h3>CS Project</h3>
      <p>
        Progress Rate : <input type="number" min="0" max="100" value="<?=$sch_cs?>" class="rateNum" name="sch_cs_rate">% || Last Update : <b><?=$cs_date?></b>
      </p>
      <div class="pfBarBox">
        <span class="pfBar"></span>
      </div>
    </div>
  </div>
  <div class="item subPfBar">
    <div class="pfImg">
      <i class="fa fa-cloud-sun"></i>
    </div>
    <div class="pfContents">
      <h3>FrameWork Project</h3>
      <p>
        Progress Rate : <input type="number" min="0" max="100" value="<?=$sch_fw?>" class="rateNum" name="sch_fw_rate">% || Last Update : <b><?=$fw_date?></b>
      </p>
      <div class="pfBarBox">
        <span class="pfBar"></span>
      </div>
    </div>
  </div>
  <div class="item subPfBar">
    <div class="pfImg">
      <i class="fa fa-clone"></i>
    </div>
    <div class="pfContents">
      <h3>Renewal Project</h3>
      <p>
        Progress Rate :<input type="number" min="0" max="100" value="<?=$sch_ren?>" class="rateNum" name="sch_ren_rate">% || Last Update : <b><?=$ren_date?></b>
      </p>
      <div class="pfBarBox">
        <span class="pfBar"></span>
      </div>
    </div>
  </div>
  <div class="item subPfBar">
    <div class="pfImg">
      <i class="fa fa-bar-chart-o"></i>
    </div>
    <div class="pfContents">
      <h3>Planning Project</h3>
      <p>
        Progress Rate : <input type="number" min="0" max="100" value="<?=$sch_pla?>" class="rateNum" name="sch_pla_rate">% || Last Update : <b><?=$web_date?></b>
      </p>
      <div class="pfBarBox">
        <span class="pfBar"></span>
      </div>
    </div>
  </div>

