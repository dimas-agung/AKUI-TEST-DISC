function changeColor(color, additionalData) {
    document.getElementById('disc_css').href = 'css/w3-theme-' + color + '.css';

    var requestData = Object.assign({ 'color': color }, additionalData);

    $.post('js/change.color.php', requestData, function (result) {
        var r = Math.random() * 1000;
        $('#graph1').attr('src', 'img/graph.php?g=1&v=' + r);
        $('#graph2').attr('src', 'img/graph.php?g=2&v=' + r);
        $('#graph3').attr('src', 'img/graph.php?g=3&v=' + r);
    });
}

$(document).ready(function () {
    $('.color').click(function () {
        var color = $(this).attr('data-value');
        changeColor(color, {});
    });

    $('.color_graph').click(function () {
        var color = $(this).attr('data-value');
        var additionalData = {
            's1': $('#s1').val(),
            'i1': $('#i1').val(),
            'p1': $('#p1').val(),
            's2': $('#s2').val(),
            'i2': $('#i2').val(),
            'p2': $('#p2').val(),
            's3': $('#s3').val(),
            'i3': $('#i3').val(),
            'p3': $('#p3').val(),
        };
        changeColor(color, additionalData);
    });
});
