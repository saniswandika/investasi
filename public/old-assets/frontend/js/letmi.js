var carousel = $("#amarthacarousel").flipster({
    style: 'carousel',
    spacing: -0.3,
    nav: false,
    buttons:  true,
    loop: true,
    autoplay: 3000,
    pauseOnHover: true,
    scrollwheel: false,
});

$(document).ready(function(){
    $(document).on('click','.kbli-item', function(){
        var id = $(this).attr('id');
        $.ajax({
            type: 'post',
            url: 'sectorproses',
            data: {'lsid':id},
            success: function(data) {
                $('.sector-profile-area').html(data);
            }
        });
    });
});