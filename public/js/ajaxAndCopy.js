$('#post-form').on('submit', function (e) {      //задаем действие при отправке данных формы аякс запросом
    e.preventDefault();
    $.ajax({
        url: '/ajax',
        type: 'POST',
        dataType: 'JSON',
        data: $('#post-form').serialize(),
        success: function (data) {
            if (data.msg==true){                //при успехе показываем кнопку Копировать кастомную ссылку
                $(".copyCust").show();          //скрываем кнопку кастомизации и выводим сообщение
                $(".msg").css('color', '#227dc7');
                $(".msg").text('Your link confirmed and saved!!!');
                $("#customUrl").attr('disabled', true);
                $(".btnCustomize").hide();
                $(".newUrl").hide();

            }
            else                                //при ошибке валидации выводим сообщение
            {
                $(".msg").css('color', '#e9605c');
                $(".msg").text('You enter wrong link, try again!!!');

            }
        },
        error: function () {                    //при ошибке отправки выводим сообщение
             $('.msg').text('Error, try again!!!')
        }
    });
});


function copyToClipboard(id) {                              //функция для копирования ссылки из поля формы в буфер обмена
    const str = document.getElementById(id).value;          //создаем за границами видимости текстовое поле, копируем в него значение
    const el = document.createElement('textarea');  //формы, из него копируем в буфер и удаляем текстовое поле
    el.value = str;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
}
