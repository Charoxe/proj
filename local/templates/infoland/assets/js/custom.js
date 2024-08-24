
$( document ).ready(function() {


    $( ".reaction" ).on( "click", function() {

        let newsId = $(this).attr('data-id');

        console.log(newsId);

        $.ajax({
            url: '/ajax/like_handler.php',
            method: 'post',
            dataType: 'json',
            data: {
                id: newsId
            },
            success: function(data){
                //location.reload()
            }
        });

    } );

});



