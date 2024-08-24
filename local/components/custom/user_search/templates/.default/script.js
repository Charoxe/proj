$(document).ready(function() {
    $('.card-user-mini').on('click', function() {
        var userId = $(this).data('id'); // Получаем ID пользователя из data-атрибута

        $.ajax({
            url: '../ajax/modals.php', // Укажите путь к вашему файлу modals.php
            type: 'POST',
            data: { user_id: userId },
            success: function(response) {
                var data = JSON.parse(response);
                $('.card-employee__avatar img').attr('src', data.PHOTO);
                $('.card-employee__name').text(data.FIO);
                $('.card-employee__status').text(data.PROFESSION);
                $('.card-employee__info-cell.email a').text(data.EMAIL);
                $('.card-employee__info-cell.email a').attr('href', data.EMAIL);
                $('.card-employee__info-cell.phone a').attr('href', data.PHONE);
                $('.card-employee__info-cell.phone a').text(data.PHONE);
                $('.card-employee__info-cell.birthday').text(data.BIRTHDAY);
                // $('.card-employee__info-cell_vacation').text(data.BIRTHDAY);
                window.Modal.open('modal-card-employee');
                // Здесь вы можете обработать ответ от сервера

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Ошибка выполнения запроса:', textStatus, errorThrown);
            }
        });
    });
});