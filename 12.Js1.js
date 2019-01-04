function windFunction() {
    var myWind = window.open("", "Happy Window", "width=300,height = 200 ");
    myWind.document.write("<p>This window's name is: " + myWind.name + "</p>");
}