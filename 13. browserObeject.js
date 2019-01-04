function naviVers() {
    var ver = "Version info: " + navigator.appVersion;
    document.getElementById("demo").innerHTML = ver;
}

function naviName() {
    var nm = "Browser Name: " + navigator.appName;
    document.getElementById("demo1").innerHTML = nm;
}