function update() {
    $.get("ajax.php", function(data) {
        $("#info").html(data);
        window.setTimeout(update, 7000);
    });
}
window.setTimeout('$("#info").empty(); update();', 4500);
