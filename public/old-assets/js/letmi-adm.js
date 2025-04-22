$(document).ready(function () {
    $('.loading-ref').hide();
    $(document).on('click','#btn-artikel-proses', function(){
        var selurl = $('#urlsearch').val();
        if (selurl == '') {
            $('.modal-konten').text('Url harus diisi');
            $('#modal-notif').modal('show');
        } else {
            $('.loading-ref').show();
            $('.prev-overlay').show();
            $('.preview-area').html();
            $.ajax({
                type: 'post',
                url: 'artikelproses',
                data: {'selurl':selurl, 'act':'preview'},
                success: function(data) {
                    $('.loading-ref').hide();
                    $('.prev-overlay').hide();
                    $('.preview-area').html(data);

                }
            });
        }
    });


$(document).on('click','.cus-pane-a', function(){
    var id = $(this).attr('href');
    $('.cus-pane').hide();
    $(id).show();
});    


$(document).on('click','#btn-simpan-artikel',function(){
    var selurl = $('#urlsearch').val();
    if (selurl == '') {
        $('.modal-konten').text('Url harus diisi');
        $('#modal-notif').modal('show');
    } else {
        $('.loading-ref').show();
        $('.prev-overlay').show();
        $.ajax({

            type: 'post',
            url: 'artikelsimpan',
            data: {'selurl':selurl, 'act':'simpandb'},
            success: function(data) {
                $('.loading-ref').hide();
                $('.prev-overlay').hide();
                window.location.href = data;
                // alert(selurl);

            }
        });
    }
});

$(document).on('click','#btn-action-hapus1', function(){
    var id = $(this).attr('adid');
    var act = $(this).attr('act');
    $.ajax({
        type: "post",
        url: "artikelhapus",
        data: {'id':id,'act':act},
        success: function(data) {
                $('.body-content').html(data);
                $('#idartikel').val(id);
                $('#modalConfim').modal('show');
        }
    });
});

$(document).on('click','#btn-deldb',function(){
    var id = $('#idartikel').val();
    $.ajax({
        type: "post",
        url: "artikeldeldeb",
        data: {'id':id},
        success: function(data) {
            window.location.href = data;
        }
    })
});

$(document).on('click','#simpan-filter1', function(){
    var keyword = $('#keyword-include').val();
    var active = '';
    var act = 'simpanfilter1';
    // var act = act0=='' ? act0: 'simpanfilter1';

    if ($('#filter-active').prop('checked') == true) {
        active = '1';
    } else {
        active = '0';
    }
    $.ajax({
        type: 'post',
        url: 'artikelfilterproses',
        data: {'keyword':keyword, 'active':active, 'act':act},
        success: function(data) {
            window.location.href = data;
        }
    });
});

$(document).on('click','#btn-filter1-edit',function(){
    var aid = $(this).attr('aid');
    var keyword = $('.key-'+aid).text();
    var active = $(this).attr('acti');
    $('#aid').val(aid);
    if (active == '1') {
        $('#filter-active-e').prop('checked',true)
    } else {
        $('#filter-active-e').prop('checked',false)
    }
    $('#keyword-include-e').val(keyword);
});

$(document).on('click','#simpan-Edit1', function(){
    var keyword = $('#keyword-include-e').val();
    var active = '';
    var act = 'editfilter1';
    var aid= $('#aid').val();
    if ($('#filter-active-e').prop('checked') == true) {
        active = '1';
    } else {
        active = '0';
    }
    $.ajax({
        type: 'post',
        url: 'artikelfilteredit',
        data: {'keyword':keyword, 'active':active, 'act':act, 'aid':aid},
        success: function(data) {
            window.location.href = data;
        }
    });
});


$(document).on('click','#btn-filter1-hapus', function(){
    var aid = $(this).attr('aid');
    $.ajax({
        type:'post',
        url: 'artikelfilterdel1',
        data: {'aid':aid},
        success: function(data) {
            window.location.href = data;
        }
    })
});


$(document).on('click','#simpan-filter2', function(){
    var keyword = $('#keyword-exclude').val();
    var active = '';
    var act = 'simpanfilter2';
    // var act = act0=='' ? act0: 'simpanfilter1';

    if ($('#filter-activeex').prop('checked') == true) {
        active = '1';
    } else {
        active = '0';
    }
    $.ajax({
        type: 'post',
        url: 'artikelfilterprosesEx',
        data: {'keyword':keyword, 'active':active, 'act':act},
        success: function(data) {
            window.location.href = data;
        }
    });
});


$(document).on('click','#btn-filter2-hapus', function(){
    var aid = $(this).attr('aid');
    $.ajax({
        type:'post',
        url: 'artikelfilterdel2',
        data: {'aid':aid},
        success: function(data) {
            window.location.href = data;
        }
    })
});


    //eof
});