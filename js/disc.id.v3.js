
$(document).ready(function () {
    $('input:radio').on('click', function () {
        var m = $(this).attr('id');
        // Check for ...
        if ($('#' + (m.slice(0, 1) == 'm' ? 'l' : 'm') + '_' + m.slice(2)).is(':checked')) {
            $('#msg').html('You cannot select both of `most` and `least` choice in the same term');
            $('#warning').show();
            $(this).prop('checked', false);
        }
    });
});
