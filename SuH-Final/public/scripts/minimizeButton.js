function minimizeFunction() {
    var x = document.getElementById("myHead");
    var y = document.getElementById("myTopnav");
    if (x.className === "header-bar" && y.className === "header-nav") {
        x.className += " responsive";
        y.className += " responsive";
    } else {
        x.className = "header-bar";
        y.className = "header-nav";
    }
}