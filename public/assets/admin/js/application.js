$(function () {

// Animação home
        wwidth = $(window).width();
     //   alert(wwidth);
        if (wwidth > 992) {
          $('.home #sidebar').css('left', '-100px');
          $('.home #sidebar').css('opacity', '0');
          $('.home #main').css('top', '-10px');
          $('.home #main').css('opacity', '0');

          $( ".home #sidebar").animate({
            opacity: 1,
            left: "0"
            }, 800, function() {
            $( ".home #main").animate({opacity: 1, top: "0"}, 600);
            });
        }
// Animação home

    $('.fileupload').fileupload({
        dataType        : 'json',
        start: function (e) {
            targetContainer = $(this).data("target");
            if (!targetContainer) { targetContainer = 'file'; }
            progressContainer = $(this).data("progress");
            if (!progressContainer) { progressContainer = 'progress'; }
            listContainer = $(this).data("list");
            if (!listContainer) { listContainer = 'list'; }
            btntext = $("button.guardar").text();

            $("#"+progressContainer).removeClass('hide');
            $("#"+progressContainer).fadeIn('slow');
            $("button.guardar").attr('disabled', 'disabled');
            $("button.guardar").text('Aguarde...');
        },

        done: function (e, data) {
            $("button.guardar").removeAttr('disabled'); 
            $("button.guardar").text(btntext);           
            if ($.isPlainObject(data.result)) {
                $.each(data.result.files, function (index, file) {
                    val = $("#"+targetContainer).val() + file.name + ',';
                    $("#"+targetContainer).val(val);
                    $('<li class="list-group-item color-green" />').html('<span class="glyphicon glyphicon-ok pull-right"></span>Ficheiro enviado com sucesso - ' + file.name).appendTo("#"+listContainer);
                });
            } else {
                $('<li class="list-group-item color-red" />').html('<span class="glyphicon glyphicon-remove pull-right"></span>Ocorreu um erro ao enviar o ficheiro - ' + data.result).appendTo("#"+listContainer);
            } 
            $("#"+listContainer).removeClass('hide');
            $("#"+listContainer).fadeIn('slow');
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $("#"+progressContainer+' .progress-bar').css(
                'width',
                progress + '%'
            );
        },
        fail: function (e, data) {
            $("#"+progressContainer).fadeOut('slow');
            $("button.guardar").removeAttr('disabled');
            $("button.guardar").text(btntext);
            $('<li class="list-group-item color-red"/>').html('<span class="glyphicon glyphicon-remove pull-right"></span> Ocorreu um erro ao enviar o ficheiro - ' + file.error).appendTo("#"+listContainer);
            $("#"+listContainer).removeClass('hide');
            $("#"+listContainer).fadeIn('slow');
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});

$(window).load(function() {



    gutter = parseInt($('.item').css('marginBottom'));
    $('.galeria').masonry({
        gutter: gutter,
        itemSelector: '.item',
        columnWidth: '.item'
    });

});
