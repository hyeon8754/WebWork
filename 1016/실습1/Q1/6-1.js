document.addEventListener("DOMContentLoaded", function() {
    var targetDiv = document.getElementById("target");

    targetDiv.onmouseover = function() {
        targetDiv.style.background = 'yellow';
    };

    targetDiv.onmouseout = function() {
        targetDiv.style.background = 'white';
    };
});
