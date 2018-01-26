$(document).ready(function() {
    var time = document.getElementById("time") * 100;
    console.log(time);
    var width = parseInt($('.timer')[0].style.width); // Get the number from paragraph
    // Called the function in each second
    var interval = setInterval(function() {
        $(".timer").css("width", width++ + '%');
        if (width > 100) {
            clearInterval(interval); // If exceeded 100, clear interval
        }
    }, 100); // Run for each second
});
