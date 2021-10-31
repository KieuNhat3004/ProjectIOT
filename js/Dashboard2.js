var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
let btn1 = document.querySelector('#s1');
let btn2 = document.querySelector('#s2');
let btn3 = document.querySelector('#s3');
let btn4 = document.querySelector('#s4');
let btn5 = document.querySelector('#s5');
let btn6 = document.querySelector('#s6');

var count1 = 0, count2 = 0, count3 = 0, count4 = 0, count5 = 0, count6 = 0;
var ass1 = 0 , ass2 = 0, ass3 = 0, ass4 = 0, ass5 = 0, ass6 = 0;
var str = "", str1 = "", str2 = "", str3 = "", str4 = "", str5 = "", str6 = "";

setInterval(myTimer1, 8000);
$("document").ready(function(){
    btn1.addEventListener('click',()=>{
        if(count1 == 0) 
        {
            count1 = 1;
            document.getElementById("stt1").textContent = "Đang bật";
        }
        else 
        {
            count1 = 0;
            document.getElementById("stt1").textContent = "Đang tắt";
            ass1 = 0;
            str1 = "";
        }
    }); 

    btn2.addEventListener('click',()=>{
        if(count2 == 0) 
        {
            count2 = 1;
            document.getElementById("stt2").textContent = "Đang bật";
        }
        else 
        {
            count2 = 0;
            document.getElementById("stt2").textContent = "Đang tắt";
            ass2 = 0;
            str2 = "";
        }
    });

    btn3.addEventListener('click',()=>{
        if(count3 == 0) 
        {
            count3 = 1;
            document.getElementById("stt3").textContent = "Đang bật";
        }
        else 
        {
            count3 = 0;
            document.getElementById("stt3").textContent = "Đang tắt";
            ass3 = 0;
            str3 = "";
        }
    });

    btn4.addEventListener('click',()=>{
        if(count4 == 0) 
        {
            count4 = 1;
            document.getElementById("stt4").textContent = "Đang bật";
        }
        else 
        {
            count4 = 0;
            document.getElementById("stt4").textContent = "Đang tắt";
            ass4 = 0;
            str4 = "";
        }
    });

    btn5.addEventListener('click',()=>{
        if(count5 == 0) 
        {
            count5 = 1;
            document.getElementById("stt5").textContent = "Đang bật";
        }
        else 
        {
            count5 = 0;
            document.getElementById("stt5").textContent = "Đang tắt";
            ass5 = 0;
            str5 = "";
        }
    });

    
    btn6.addEventListener('click',()=>{
        if(count6 == 0) 
        {
            count6 = 1;
            document.getElementById("stt6").textContent = "Đang bật";
        }
        else 
        {
            count6 = 0;
            document.getElementById("stt6").textContent = "Đang tắt";
            ass6 = 0;
            str6 = "";
        }
    });
   
});
function myTimer1() {
    var innhietdo_Mi = parseInt(document.getElementById("ip11").value);
    var innhietdo_Ma = parseInt(document.getElementById("ip12").value);
    var indoam_Mi = parseInt(document.getElementById("ip21").value);
    var indoam_Ma = parseInt(document.getElementById("ip22").value);
    var inapsuat_Mi = parseInt(document.getElementById("ip31").value);
    var inapsuat_Ma = parseInt(document.getElementById("ip32").value);
    var indiendap_Mi = parseInt(document.getElementById("ip41").value);
    var indiendap_Ma = parseInt(document.getElementById("ip42").value);
    var indongdien_Mi = parseInt(document.getElementById("ip51").value);
    var indongdien_Ma = parseInt(document.getElementById("ip52").value);
    var incongsuat_Mi = parseInt(document.getElementById("ip61").value);
    var incongsuat_Ma = parseInt(document.getElementById("ip62").value);

    var element = document.querySelector('#canvas1');
    var vl1 = parseInt(element.getAttribute('data-value'));
    var element1 = document.querySelector('#canvas2');
    var vl2 = parseInt(element1.getAttribute('data-value'));
    var element2 = document.querySelector('#canvas3');
    var vl3 = parseInt(element2.getAttribute('data-value'));

    var odienap = document.getElementById("dienap").textContent;
    var odongdien = document.getElementById("dongdien").textContent;
    var ocongsuat= document.getElementById("congsuat").textContent;

    
    if(count1 ==1)
    {
        
        if((innhietdo_Mi < vl1) && (vl1 < innhietdo_Ma))
        {
            ass1 = 0;
            str1 = "";
        } 
        else 
        {
            ass1 = 1;
            str1 = "Ngưỡng nhiệt độ bất thường!";
        }
    }

    if(count2 == 1)
    {
        if((indoam_Mi < vl2) && (vl2 < indoam_Ma))
        {
            ass2 = 0;
            str2 = "";
            console.log("dung");
        }
        else
        {
            ass2 = 1;
            str2 = "Ngưỡng độ ẩm bất thường!";
            console.log("SAi");
        }

    }

    if(count3 ==1)
    {
        
        if((inapsuat_Mi < vl3) && (vl3 < inapsuat_Ma)) 
        {
            ass3 = 0;
            str3 = "";
        }
        else 
        {
            ass3 = 1;
            str3 = "Ngưỡng áp suất bất thường!";
        }

    }

    if(count4 ==1)
    {
        
        if((indiendap_Mi < odienap) && (odienap < indiendap_Ma))
        {
            ass4 = 0;
            str4 = "";
        } 
        else 
        {
            ass4 = 1;
            str4 = "Ngưỡng điện áp bất thường!";
        }

    }

    if(count5 ==1)
    {
        
        if((indongdien_Mi < odongdien) && (odongdien < indongdien_Ma))
        {
            ass5 = 0;
            str5 = "";
        } 
        else 
        {
            ass5 = 1;
            str5 = "Ngưỡng dòng điện bất thường";

        }

    }

    if(count6 ==1)
    {
        if((incongsuat_Mi < ocongsuat) && (ocongsuat < incongsuat_Ma)) 
        {
            ass6 = 0;
            str6 = "";
        }
        else 
        {
            ass6 = 1;
            str6 = "Ngưỡng công suất bất thường!";
        }

   }


    str = str1 + "      " + str2  + "      " + str3 + "      " + str4 + "      " + str5 + "      " + str6;




    if(ass1 == 1 || ass2 == 1 || ass3 == 1 || ass4 == 1 || ass5 == 1 || ass6 == 1)
    {
        Push.create("Cảnh báo!", {
            body: str,
            icon: 'icons/Warningcb.jpg',
            timeout: 4000,
            onClick: function () {
                window.focus();
                this.close();
            }
        });
    }
    console.log(str2);
    
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }

    if (event.target == modal1) {
        modal.style.display = "none";
    }
}
