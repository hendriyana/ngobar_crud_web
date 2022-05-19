function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
return "";
}

function setBackground() {
    var namabg = getCookie("bg");
    if (namabg == "") {
        document.getElementById("bodymain").style.backgroundImage = "url(https://mocah.org/thumbs/583318-minimalism-4k.jpg)";
    }else{
        document.getElementById("bodymain").style.backgroundImage = "url("+namabg+")";
    }
}

function setFont() {
    var namafont = getCookie("font");
    if (namafont == "") {
        document.getElementById("bodymain").style.fontFamily  = "Arial";
    }else{
        document.getElementById("pb").style.fontFamily  = namafont;
        document.getElementById("pf").style.fontFamily  = namafont;
        document.getElementById("pc").style.fontFamily  = namafont;
        document.getElementById("ps").style.fontFamily  = namafont;
        document.getElementById("title").style.fontFamily  = namafont;
        document.getElementById("sub_title").style.fontFamily  = namafont;
    }
}

function InitBody() {
    setBackground();
    setFont();
}