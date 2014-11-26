$(function(){

    $('#movies li').click(function(){
        cinemaSelect($(this));
    });

    $('#moviesToggle').click(function(){
        $('#moviesSub').slideToggle(300);
        $('#moviesSub li').click(function(){
            $(this).parent().parent().slideUp(300);
            cinemaSelect($(this));
        });
    });

    function cinemaSelect(get){

        var eigaPic = get.find('img').attr('src'),
            eigaTitle = get.find('img').attr('data-title');

        $.ajax({
          url: 'cinemaChoose.php',
          type:'GET',
          data: {aj_title : eigaTitle
                },
          success: function(data) {
                        $('#timeLine').html(data);
                        $('#timeLine li').click(function(){
                            var eigaDate = $(this).text();
                            console.log(eigaDate);
                            $('#nowDate').text(eigaDate);
                        });
                   },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
                      console.log("ng");
                      console.log(textStatus);
                 }
        });

        $('#seatsBackground').css('background-image','url('+eigaPic+')');
        $('#nowDate').text('.');
        $('#nowTitle').text(eigaTitle);
    }//cinemaSelect()



});
