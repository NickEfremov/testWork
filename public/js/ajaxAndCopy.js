$('#post-form').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
        url: '/ajax',
        type: 'POST',
        dataType: 'JSON',
        data: $('#post-form').serialize(),
        success: function (data) {
            if (data.msg==true){
                $(".copyCust").show();
                $(".msg").css('color', '#227dc7');
                $(".msg").text('Your link confirmed and saved!!!');
                $("#customUrl").attr('disabled', true);
                $(".btnCustomize").hide();
                $(".newUrl").hide();

            }else {
               //$('#msg').textContent('You enter wrong link, try again!!!');
                $(".msg").css('color', '#e9605c');
                $(".msg").text('You enter wrong link, try again!!!');

            }

        },
        error: function () {
            //$('#msg').val('Error, try again!!!')
        }
    });
});




function copyToClipboard(id) {
    const str = document.getElementById(id).value;
    const el = document.createElement('textarea');
    el.value = str;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
}
