/**
 * Created by leonid on 11/6/15.
 */
$(function () {
    $('.switch').on('click', function (e) {
        e.preventDefault();
        var hidden = $('input[type="hidden"]');
        var repeatPass = $('input[name="repeat_password"]');
        hidden.attr({
            'value': 'register',
            'name' : 'register'
        });
        repeatPass
            .attr({'required':'required'})
            .parent().removeClass('hidden');
    });
});