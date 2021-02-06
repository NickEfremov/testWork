$('#post-form').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
        url: '/ajax',
        type: 'POST',
        dataType: 'JSON',
        data: $('#post-form').serialize(),
        success: function (data) {
            if (data.msg==true){
               alert(1);// $('#msg').innerHTML='Your link confirmed and saved!!!';
            }else {
               // $('#msg').val('You enter wrong link, try again!!!');
            }

        },
        error: function () {
            //$('#msg').val('Error, try again!!!')
        }
    });
});
