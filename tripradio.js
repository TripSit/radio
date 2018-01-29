function update() {
    $("#info").append("<p><img class='loader' src='ajax.gif' /></p>");
    $.get("ajax.php", function(data) {
        $("#info").html(data);
        window.setTimeout(update, 7000);
    });
}
window.setTimeout('$("#info").empty(); update();', 4500);