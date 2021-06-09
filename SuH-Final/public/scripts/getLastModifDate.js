timestamp = document.getElementById("timestamp");
window.addEventListener("load", function() {
    timestamp.innerText += new Date(Date.now()).toUTCString();
})