<?php
session_start();
if (!isset($_SESSION['Admin-name'])) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang= vi>
<head>
    <title>Bảng Điều Khiển</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="icons/atte1.jpg">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>  



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    

    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="js/push.min.js"></script>
    <script src="js/serviceWorker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css1/Dashboard2.css">
    
    <script>
      $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
    }).resize() ;
    </script>
    <script src="https://canvas-gauges.com/download/latest/all/gauge.min.js">
    </script>
    <script src="https://canvas-gauges.com/download/latest/all/gauge.min.js"></script>
    <Script src="./js/xulydata.js"></Script>
    
</head>
<body>
<?php include'header.php'; ?> 
<main>
  
    <div class="row">
      <div class="leftcolumn">
        <div class="card">
          <div class="tss" tyle="height:310px;">

            <div class="in_line">
              <h2 id="div-left">Thông Số Môi Trường  (update 5s)</h2>
              <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="div-right" type="button" class="btn btn-info">
                <span class="glyphicon glyphicon-cog"></span> Setting
              </button>
            </div>

            <div id="id01" class="modal1">
  
              <form class="modal1-content animate">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close1" title="Close Modal">&times;</span>
                  <h3>Cài đặt thông số</h3>
                </div>
                <hr>

                <div class="container">
                  <div class="container2">
                    <div class="ofset1">
                      <label><b>Nhiệt độ</b></label>
                        <div class="col1"><h4>Min</h4></div>
                        <div class=""><input id="ip11" type="text" value="00.00"></div>
                        <div class="col1"><h4>Max</h4></div>
                        <div class=""><input id="ip12" type="text" value="00.00"></div>
                        <div class=""><button id="s1" type="button">SET</button></div>
                        <h5 id="stt1">Đang tắt</h5>
                      </div>

                      <div class="ofset1">
                      <label><b>Độ ẩm</b></label>
                        <div class="col1"><h4>Min</h4></div>
                        <div class=""><input id="ip21" type="text" value="00.00"></div>
                        <div class="col1"><h4>Max</h4></div>
                        <div class=""><input id="ip22" type="text" value="00.00"></div>
                        <div class=""><button id="s2" type="button">SET</button></div>
                        <h5 id="stt2">Đang tắt</h5>
                      </div>

                      <div class="ofset1">
                      <label><b>Áp suất</b></label>
                        <div class="col1"><h4>Min</h4></div>
                        <div class=""><input id="ip31" type="text" value="00.00"></div>
                        <div class="col1"><h4>Max</h4></div>
                        <div class=""><input id="ip32" type="text" value="00.00"></div>
                      <div class=""><button id="s3" type="button">SET</button></div>
                      <h5 id="stt3">Đang tắt</h5>
                    </div>
                  </div>
                </div>
              </form>
            </div>



            <div id="bt1" class="cl2" style="height:300px;">
              <canvas id="canvas1" class="gaugegs" data-type="radial-gauge"
                data-value="0"
                data-width="250"
                data-height="250"
                data-units="°C"
                data-title="Temperature"
                data-min-value="0"
                data-max-value="50"
                data-major-ticks="[0, 5,10,15,20,25,30,35,40,45,50]"
                data-minor-ticks="2"
                data-stroke-ticks="true"
                data-highlights='[ {"from": 0, "to": 30, "color": "rgba(0,0, 255, .3)"},
                    {"from": 30, "to": 50, "color": "rgba(255, 0, 0, .3)"} ]'
                data-ticks-angle="225"
                data-start-angle="67.5"
                data-color-major-ticks="#ddd"
                data-color-minor-ticks="#ddd"
                data-color-title="#eee"
                data-color-units="#ccc"
                data-color-numbers="#eee"
                data-color-plate="#2196F3"
                data-border-shadow-width="0"
                data-borders="true"
                data-needle-type="arrow"
                data-needle-width="2"
                data-needle-circle-size="7"
                data-needle-circle-outer="true"
                data-needle-circle-inner="false"
                data-animation-duration="1500"
                data-animation-rule="linear"
                data-color-border-outer="#555"
                data-color-border-outer-end="#555"
                data-color-border-middle="#555"
                data-color-border-middle-end="#555"
                data-color-border-inner="#555"
                data-color-border-inner-end="#555"
                data-color-needle-shadow-down="#333"
                data-color-needle-circle-outer="#555"
                data-color-needle-circle-outer-end="#555"
                data-color-needle-circle-inner="#555"
                data-color-needle-circle-inner-end="#555"
                data-value-box-border-radius="0"
                data-color-value-box-rect="#555"
                data-color-value-box-rect-end="#333"
            ></canvas>
            </div>

        
            <div id="bt2" class="cl2" style="height:300px;">
              <canvas id="canvas2" class="gaugegs" data-type="radial-gauge"
                data-width="250"
                data-height="250"
                data-units="%"
                data-title="Humidity"
                data-min-value="0"
                data-max-value="100"
                data-major-ticks="[0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100]"
                data-minor-ticks="2"
                data-stroke-ticks="true"
                data-highlights='[ {"from": 0, "to": 60, "color": "rgba(66, 221, 245, .3)"},{"from": 60, "to": 90, "color": "rgba(0,0, 255, .3)"},
                    {"from": 90, "to": 100, "color": "rgba(255, 0, 0, .3)"} ]'
                data-ticks-angle="225"
                data-start-angle="67.5"
                data-color-major-ticks="#ddd"
                data-color-minor-ticks="#ddd"
                data-color-title="#eee"
                data-color-units="#ccc"
                data-color-numbers="#eee"
                data-color-plate="#2196F3"
                data-border-shadow-width="0"
                data-borders="true"
                data-needle-type="arrow"
                data-needle-width="2"
                data-needle-circle-size="7"
                data-needle-circle-outer="true"
                data-needle-circle-inner="false"
                data-animation-duration="1500"
                data-animation-rule="linear"
                data-color-border-outer="#555"
                data-color-border-outer-end="#555"
                data-color-border-middle="#555"
                data-color-border-middle-end="#555"
                data-color-border-inner="#555"
                data-color-border-inner-end="#555"
                data-color-needle-shadow-down="#333"
                data-color-needle-circle-outer="#555"
                data-color-needle-circle-outer-end="#555"
                data-color-needle-circle-inner="#555"
                data-color-needle-circle-inner-end="#555"
                data-value-box-border-radius="0"
                data-color-value-box-rect="#555"
                data-color-value-box-rect-end="#333"
              ></canvas>
          </div>

          <div id="bt3" class="cl2" style="height:300px;">
              <canvas id="canvas3" class="gaugegs" data-type="radial-gauge"
                data-width="250"
                data-height="250"
                data-units="hPa"
                data-title="Pressure"
                data-min-value="300"
                data-max-value="1100"
                data-major-ticks="[300, 400, 500, 600, 700, 800, 900, 1000, 1100]"
                data-minor-ticks="2"
                data-stroke-ticks="true"
                data-highlights='[ {"from": 300, "to": 1100, "color": "rgba(0,0, 255, .3)"}]'
                data-ticks-angle="225"
                data-start-angle="67.5"
                data-color-major-ticks="#ddd"
                data-color-minor-ticks="#ddd"
                data-color-title="#eee"
                data-color-units="#ccc"
                data-color-numbers="#eee"
                data-color-plate="#2196F3"
                data-border-shadow-width="0"
                data-borders="true"
                data-needle-type="arrow"
                data-needle-width="2"
                data-needle-circle-size="7"
                data-needle-circle-outer="true"
                data-needle-circle-inner="false"
                data-animation-duration="1500"
                data-animation-rule="linear"
                data-color-border-outer="#555"
                data-color-border-outer-end="#555"
                data-color-border-middle="#555"
                data-color-border-middle-end="#555"
                data-color-border-inner="#555"
                data-color-border-inner-end="#555"
                data-color-needle-shadow-down="#333"
                data-color-needle-circle-outer="#555"
                data-color-needle-circle-outer-end="#555"
                data-color-needle-circle-inner="#555"
                data-color-needle-circle-inner-end="#555"
                data-value-box-border-radius="0"
                data-color-value-box-rect="#555"
                data-color-value-box-rect-end="#333"
              ></canvas>
          </div>

          </div>
        </div>


        <div class="card">
          <h2>Điều Khiển Thiết Bị</h2>
          <div class="fakeimg" style="height:700px;">
            <table id = "tbControl">
              <tr>
                <th id="area1">
                  <table  class="c_area1">
                    <tr>
                      <th>Area 1</th>
                      <th id="k1" class="th1" rowspan="2"><img class="imgstyle" src="icons/icons8-light-off-64.png" alt="bóng đèn"></th>
                    </tr>
                      
                      
                    <tr>
                    <td>
                      <button id="buttonON1" class="btn1" name="bt1" value="1">ON</button>
                      <button id="buttonOFF1" class="btn1" name="bt1" value="0">OFF</button>
                    </tr>
                  </table>
                </th>

                <th id="area1">
                  <table  class="c_area1">
                    <tr>
                      <th>Area 2</th>
                        <th id="k2" class="th1" rowspan="2"><img class="imgstyle" src="icons/icons8-light-off-64.png" alt="bóng đèn"></th>                  
                    </tr>
                      
                      
                    <tr>
                    <td>
                      <button id="buttonON2" class="btn2" name="bt2" value="1">ON</button>
                      <button id="buttonOFF2" class="btn2" name="bt2" value="0">OFF</button>
                    </td>
                    </tr>
                  </table>
                </th>


                <th id="area1">
                  <table  class="c_area1">
                    <tbody>
                      <tr>
                        <th>Area 3</th>
                        <th id="k3" class="th1" rowspan="2"><img class="imgstyle" src="icons/icons8-light-off-64.png" alt="bóng đèn"></th>
                      </tr>
                        
                        
                      <tr>
                      <td>
                        <button id="buttonON3" class="btn3" name="bt3" value="1">ON</button>
                        <button id="buttonOFF3" class="btn3" name="bt3" value="0">OFF</button>
                      </td>
                      </tr>
                    </tbody>
                  </table>
                </th>

              </tr>

              <tr>
                <th id="area1">
                  <table  class="c_area1">
                      <tr>
                        <th>Area 4</th>
                        <th id="k4" class="th1" rowspan="2"><img class="imgstyle" src="icons/air-turn-off.png" alt="bóng đèn"></th>
                      </tr>
                        
                        
                      <tr>
                      <td>
                        <button id="buttonON4" class="btn4" name="bt4" value="1">ON</button>
                        <button id="buttonOFF4" class="btn4" name="bt4" value="0">OFF</button> 
                      </td>
                      </tr>
                  </table>
                </th>

                <th id="area1">
                  <table  class="c_area1">
                    <tr>
                      <th>Area 5</th>
                      <th id="k5" class="th1" rowspan="2"><img class="imgstyle" src="icons/air-turn-off.png" alt="bóng đèn"></th>
                    </tr>
                      
                      
                    <tr>
                    <td>
                      <button id="buttonON5" class="btn5" name="bt5" value="1">ON</button>
                      <button id="buttonOFF5" class="btn5" name="bt5" value="0">OFF</button>
                    </td>
                    </tr>
                  </table>
                </th>

                <th id="area1">
                  <table  class="c_area1">
                    <tr>
                      <th>Area 6</th>
                      <th id="k6" class="th1" rowspan="2"><img class="imgstyle" src="icons/air-turn-off.png" alt="bóng đèn"></th>
                    </tr>
                      
                      
                    <tr>
                    <td>
                      <button id="buttonON6" class="btn6" name="bt6" value="1">ON</button>
                      <button id="buttonOFF6" class="btn6" name="bt6" value="0">OFF</button> 
                    </td>
                    </tr>
                  </table>
                </th>

              </tr>
            </table>
          </div>
        </div>



      </div>
      <div class="rightcolumn">
        <div class="card">
          <div class="in_line">
            <h2 id="div-left1">Năng Lượng (update 2s)</h2>
            <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" id="div-right1" type="button" class="btn btn-info">
                <span class="glyphicon glyphicon-cog"></span> Setting
            </button>

            <div id="id02" class="modal1">  
  
                <form class="modal1-content animate">
                  <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close1" title="Close Modal">&times;</span>
                    <h3>Cài đặt thông số</h3>                    
                  </div>
                  <hr>
                  <div class="container">
                    <div class="container2">
                      <div class="ofset1">
                        <label><b>Điện áp</b></label>
                          <div class="col1"><h4>Min</h4></div>
                          <div class=""><input id="ip41" type="text" value="00.00"></div>
                          <div class="col1"><h4>Max</h4></div>
                          <div class=""><input id="ip42" type="text" value="00.00"></div>
                          <div class=""><button id="s4" type="button">SET</button></div>
                          <h5 id="stt4">Đang tắt</h5>
                        </div>

                        <div class="ofset1">
                        <label><b>Dòng điện</b></label>
                          <div class="col1"><h4>Min</h4></div>
                          <div class=""><input id="ip51" type="text" value="00.00"></div>
                          <div class="col1"><h4>Max</h4></div>
                          <div class=""><input id="ip52" type="text" value="00.00"></div>
                          <div class=""><button id="s5" type="button">SET</button></div>
                          <h5 id="stt5">Đang tắt</h5>
                        </div>

                        <div class="ofset1">
                        <label><b>Công suất</b></label>
                          <div class="col1"><h4>Min</h4></div>
                          <div class=""><input id="ip61" type="text" value="00.00"></div>
                          <div class="col1"><h4>Max</h4></div>
                          <div class=""><input id="ip62" type="text" value="00.00"></div>
                        <div class=""><button id="s6" type="button">SET</button></div>
                        <h5 id="stt6">Đang tắt</h5>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
          
          
          
          </div>
            <table id="tablelayout" width="800" height="200">
              <tr class="trtable">
                <th class="trtable">
                  <h2>ĐIỆN ÁP</h2>
                </th>
                <th class="trtable">
                  <h2>DÒNG ĐIỆN</h2>
                </th>
                <th class="trtable">
                  <h2>CÔNG SUẤT</h2>
                </th>
              </tr>

              <tr class="trtable" id="gt1">
                <td class="trtable">
                  <h3><label id="dienap">000.00</label> V</h3>
                </td>
                <td class="trtable">
                  <h3><label id="dongdien">000.00</label> A</h3>
                </td>
                <td class="trtable">
                  <h3><label id="congsuat">000.00</label> W</h3>
                </td>
              </tr>

              <tr class="trtable">
                <th class="trtable">
                  <h2>ĐIỆN NĂNG</h2>
                </th>
                <th class="trtable"> 
                  <h2>TẦN SỐ</h2>
                </th>
                <th class="trtable">
                  <h2>HỆ SỐ CS</h2>
                </th>
              </tr>

              <tr class="trtable" id="gt2">
                <td class="trtable">
                  <h3><label id="diennang">000.00</label> kWh</h3>
                </td class="trtable">
                <td>
                  <h3><label id="tanso">00.00</label> Hz</h3>
                </td>
                <td class="trtable">
                  <h3><label id="hscongsuat">00.00</label></h3>
                </td>
              </tr>

            </table>
        </div>

        <div class="card">
          <h2>Camera</h2>
          <div class="fakeimg" style="height:700px;">
            <iframe style="width:100%; height: 100%;" src="http://192.168.0.125" frameborder="1"></iframe>
          </div> 
        </div>
      </div>
    </div>
  
</main>


<footer>
  <div class="footer">©2021 IOT Văn Phòng</div>
</footer>
<script src="./js/Dashboard2.js"></script>
</body>
</html>