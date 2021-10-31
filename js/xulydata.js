function loadXMLDoc() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("gt1").innerHTML =
    this.response;
    }
};
xhttp.open("GET", "Ufeedback1.php", true);
xhttp.send();
}
setInterval(function(){
    loadXMLDoc();
}, 500);
window.onload = loadXMLDoc;




  
  function loadXMLDoc1() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("gt2").innerHTML =
        this.response;
      }
    };
    xhttp.open("GET", "Ufeedback2.php", true);
    xhttp.send();
}
setInterval(function(){
        loadXMLDoc1();
}, 500);
window.onload = loadXMLDoc1;

function loadXMLDoc2() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("bt1").innerHTML =
        this.response;
    }
    };
    xhttp.open("GET", "getTemp.php", true);
    xhttp.send();
}
setInterval(function(){
        loadXMLDoc2();
}, 5000);
window.onload = loadXMLDoc2;

function loadXMLDoc3() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("bt2").innerHTML =
        this.response;
    }
    };
    xhttp.open("GET", "getHum.php", true);
    xhttp.send();
}
setInterval(function(){
        loadXMLDoc3();
}, 5000);
window.onload = loadXMLDoc3;

function loadXMLDoc4() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("bt3").innerHTML =
        this.response;
    }
    };
    xhttp.open("GET", "getPress.php", true);
    xhttp.send();
}
setInterval(function(){
        loadXMLDoc4();
}, 5000);
window.onload = loadXMLDoc4;

function loadXMLDoc5() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("k1").innerHTML =
        this.response;
    }
    };
    xhttp.open("GET", "reloadIMG1.php", true);
    xhttp.send();
}
setInterval(function(){
        loadXMLDoc5();
    }, 500);
    window.onload = loadXMLDoc5;
/////////////////////

function loadXMLDoc6() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("k2").innerHTML =
        this.response;
    }
    };
    xhttp.open("GET", "reloadIMG2.php", true);
    xhttp.send();
}
setInterval(function(){
        loadXMLDoc6();
}, 500);
window.onload = loadXMLDoc6;

///////////////////////

/////////////////////

function loadXMLDoc7() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("k3").innerHTML =
        this.response;
    }
    };
    xhttp.open("GET", "reloadIMG3.php", true);
    xhttp.send();
}
setInterval(function(){
        loadXMLDoc7();
}, 500);
window.onload = loadXMLDoc7;

///////////////////////

/////////////////////

function loadXMLDoc8() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("k4").innerHTML =
        this.response;
    }
    };
    xhttp.open("GET", "reloadIMG4.php", true);
    xhttp.send();
}
setInterval(function(){
        loadXMLDoc8();
}, 500);
window.onload = loadXMLDoc8;

///////////////////////

/////////////////////

function loadXMLDoc9() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("k5").innerHTML =
        this.response;
    }
    };
    xhttp.open("GET", "reloadIMG5.php", true);
    xhttp.send();
}
setInterval(function(){
        loadXMLDoc9();
}, 500);
window.onload = loadXMLDoc9;

///////////////////////

/////////////////////

function loadXMLDoc10() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("k6").innerHTML =
        this.response;
    }
    };
    xhttp.open("GET", "reloadIMG6.php", true);
    xhttp.send();
}
setInterval(function(){
        loadXMLDoc10();
}, 500);
window.onload = loadXMLDoc10;

///////////////////////

$(document).ready(function(){
    $('.btn1').click(function(){
        var bt1 = $(this).val(); 

        $.ajax({
        url: "control1.php",
        type : "POST",
        data : {bt1: bt1},
        success: function(data){
            $("#result").html(data);
            }
        });
    });
    });

    $(document).ready(function(){
    $('.btn2').click(function(){
        var bt2 = $(this).val(); 

        $.ajax({
        url: "control2.php",
        type : "POST",
        data : {bt2: bt2},
        success: function(data){
            $("#result").html(data);
            }
        });
    });
    });

    $(document).ready(function(){
    $('.btn3').click(function(){
        var bt3 = $(this).val(); 

        $.ajax({
        url: "control3.php",
        type : "POST",
        data : {bt3: bt3},
        success: function(data){
            $("#result").html(data);
            }
        });
    });
    });

    $(document).ready(function(){
    $('.btn4').click(function(){
        var bt4 = $(this).val(); 

        $.ajax({
        url: "control4.php",
        type : "POST",
        data : {bt4: bt4},
        success: function(data){
            $("#result").html(data);
            }
        });
    });
    });

    $(document).ready(function(){
    $('.btn5').click(function(){
        var bt5 = $(this).val(); 

        $.ajax({
        url: "control5.php",
        type : "POST",
        data : {bt5: bt5},
        success: function(data){
            $("#result").html(data);
            }
        });
    });
    });

    $(document).ready(function(){
    $('.btn6').click(function(){
        var bt6 = $(this).val(); 

        $.ajax({
        url: "control6.php",
        type : "POST",
        data : {bt6: bt6},
        success: function(data){
            $("#result").html(data);
            }
        });
    });
    });
 