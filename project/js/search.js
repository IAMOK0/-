function send() {
    request = new XMLHttpRequest();
    request.onreadystatechange = showResult;
    var keyword = document.getElementById("keyword").value;
    var url= "../php/searchhis.php?keyword=" + keyword;
    request.open("GET", url, true);
    request.send(null);
    request1 = new XMLHttpRequest();
    request1.onreadystatechange = showResult2;
    var keyword = document.getElementById("keyword2").value;
    var url1= "../php/searchuser.php?keyword=" + keyword;
    request1.open("GET", url1, true);
    request1.send(null);
    request2 = new XMLHttpRequest();
    request2.onreadystatechange = showResult31;
    var keyword = document.getElementById("keyword3").value;
    var url2= "../php/searchprod.php?keyword=" + keyword;
    request2.open("GET", url2, true);
    request2.send(null);
}
function send2() {
    request = new XMLHttpRequest();
    request.onreadystatechange = showResult2;
    var keyword = document.getElementById("keyword2").value;
    var url= "../php/searchuser.php?keyword=" + keyword;
    request.open("GET", url, true);
    request.send(null);
}
function send3() {
    request = new XMLHttpRequest();
    request.onreadystatechange = showResult3;
    var keyword = document.getElementById("keyword3").value;
    var url= "../php/searchprod.php?keyword=" + keyword;
    request.open("GET", url, true);
    request.send(null);
}
function send4() {
    request = new XMLHttpRequest();
    request.onreadystatechange = showResult4;
    var url= "../php/searchAllfood.php?";
    request.open("GET", url, true);
    request.send(null);
}
function send5() {
    request = new XMLHttpRequest();
    request.onreadystatechange = showResult4;
    var url= "../php/searchfood.php?";
    request.open("GET", url, true);
    request.send(null);
}
function send6() {
    request = new XMLHttpRequest();
    request.onreadystatechange = showResult4;
    var url= "../php/searchdrink.php?";
    request.open("GET", url, true);
    request.send(null);
}
function send7() {
    request = new XMLHttpRequest();
    request.onreadystatechange = showResult4;
    var url= "../php/searchdes.php?";
    request.open("GET", url, true);
    request.send(null);
}
function send8() {
    request1 = new XMLHttpRequest();
    request1.onreadystatechange = showResult2;
    var url1= "../php/searchhisuser.php?";
    request1.open("GET", url1, true);
    request1.send(null);
    var styledisplay = document.getElementById("result2");
    if(styledisplay.style.display == "block"){
        styledisplay.style.display = "none";
    }else{
        styledisplay.style.display = "block";
    }
}
function send9() {
    request = new XMLHttpRequest();
    request.onreadystatechange = showResult;
    var url= "../php/searchAllfood2.php?";
    request.open("GET", url, true);
    request.send(null);
}
function send10() {
    request = new XMLHttpRequest();
    request.onreadystatechange = showResult;
    var url= "../php/searchfood2.php?";
    request.open("GET", url, true);
    request.send(null);
}
function send11() {
    request = new XMLHttpRequest();
    request.onreadystatechange = showResult;
    var url= "../php/searchdrink2.php?";
    request.open("GET", url, true);
    request.send(null);
}
function send12() {
    request = new XMLHttpRequest();
    request.onreadystatechange = showResult;
    var url= "../php/searchdes2.php?";
    request.open("GET", url, true);
    request.send(null);
}
function send13() {
    request = new XMLHttpRequest();
    request.onreadystatechange = showResult3;
    request1 = new XMLHttpRequest();
    request1.onreadystatechange = showResult5;
    request2 = new XMLHttpRequest();
    request2.onreadystatechange = showResult6;
    var url= "../php/cart.php?";
    request.open("GET", url, true);
    request.send(null);
    var url1= "../php/total.php?";
    request1.open("GET", url1, true);
    request1.send(null);
    var url2= "../php/searchAllfood2.php?";
    request2.open("GET", url2, true);
    request2.send(null);
}
function showResult() {
    if (request.readyState == 4) {
        if (request.status == 200)
            document.getElementById("result").innerHTML = request.responseText;
        }
}
function showResult2() {
    if (request1.readyState == 4) {
        if (request1.status == 200)
            document.getElementById("result2").innerHTML = request1.responseText;
        }
}
function showResult31() {
    if (request2.readyState == 4) {
        if (request2.status == 200)
            document.getElementById("result3").innerHTML = request2.responseText;
        }
}
function showResult3() {
    if (request.readyState == 4) {
        if (request.status == 200)
            document.getElementById("result3").innerHTML = request.responseText;
        }
}
function showResult4() {
    if (request.readyState == 4) {
        if (request.status == 200)
            document.getElementById("result").innerHTML = request.responseText;
        }
}
function showResult5() {
    if (request1.readyState == 4) {
        if (request1.status == 200)
            document.getElementById("result4").innerHTML = request1.responseText;
        }
}
function showResult6() {
    if (request2.readyState == 4) {
        if (request2.status == 200)
            document.getElementById("result").innerHTML = request2.responseText;
        }
}