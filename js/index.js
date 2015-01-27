// $(function(){
  
//     $('#movies li').click(function(){
//       connect();
//     });
    
//     function connect(){
//       $.ajax({
//         url: 'screen01.html',
//         get: 'post',
//         success: function(data){
//           $('#seatLoading').html(data);
//           $('rect').hover(
//             function(){
//               var id = $(this).attr('id');
              
//               var x = $(this).attr('x');
//                   x -= 13;
//                   txtx = x+10;
                  
//               var y = $(this).attr('y');
//                   y -= 40;
//                   txty = y+20;
              
//                 $(this).before($('<svg id="c"><rect x="'+ x +'" y="'+ y +'" width="50" height="30" fill="#333" /><text x="'+ txtx +'" y="'+ txty +'" fill="#ffffff">'+ id +'</text></svg>'));
//             },
//             function(){
//               $('#c').remove();
//             }
//           );
//         }
//       });
//     }
    
//     $('.moviesList li').hover(
//       function(){
//         $(this).find('.moviesCap').stop().animate({
//           left: 0,
//           opacity: 1
//         }, 300);
//       },
//       function(){
//         $(this).find('.moviesCap').stop().animate({
//           left: '240px',
//           opacity: 0
//         }, 300);
//       }
//     );
    

//     $('#movies li').click(function(){
//         cinemaSelect($(this));
//     });

//     $('#moviesToggle').click(function(){
//         $('#moviesSub').slideToggle(300);
//         $('#moviesSub li').click(function(){
//             $(this).parent().parent().slideUp(300);
//             cinemaSelect($(this));
//         });
//     });

//     function cinemaSelect(get){

//         var eigaPic = get.find('img').attr('src'),
//             eigaTitle = get.find('img').attr('data-title');

//         $.ajax({
//           url: 'cinemaChoose.php',
//           type:'GET',
//           data: {aj_title : eigaTitle
//                 },
//           success: function(data) {
//                         $('#timeLine').html(data);
//                         $('#timeLine li').click(function(){
//                             var eigaDate = $(this).text();
//                             console.log(eigaDate);
//                             $('#nowDate').text(eigaDate);
//                         });
//                    },
//           error: function(XMLHttpRequest, textStatus, errorThrown) {
//                       console.log("ng");
//                       console.log(textStatus);
//                  }
//         });

//         $('#seatsBackground').css('background-image','url('+eigaPic+')');
//         $('#reserveNowDate').text('.');
//         $('#reserveNowTitle').text(eigaTitle);
//     }//cinemaSelect()

// });

$(function(){
  
    // $('#movies li').click(function(){
    //   connect();
    // });
    
    function connect01(){
      $.ajax({
        url: 'screen01.html',
        get: 'post',
        success: function(data){
          $('#seatLoading').html(data);
          var rect = document.getElementsByTagName("rect");
          $(rect).click(function(){
            seatId = $(this).attr("id");
            //alert(seatId);
            $("#reserveNowSeatID").append("<p>"+seatId+"</p><input type='radio' name='cate' value='0' class='cate'>大人<input type='radio' name='cate' value='1' class='cate'>高校生以下<input type='radio' name='cate' value='2' class='cate'>60歳以上");
            $(".cate").click(function(){
              cate = $(this).attr("value");
            });
          });
          // // Socket.IOサーバーに接続する
          // var socket = io.connect("http://localhost:8081");
          // //送る
          // $(rect).click(function(){
          //   var seatId = $(this).attr("id");
          //   alert(seatId);
          //   socket.emit("seats",seatId);
          // });
          // // サーバーからメッセージを受け取ったとき seats
          // //-----------------------------------
          // socket.on("seats",function(data){
          //   //メッセージを表示
          //   $("#"+data).css({"background":"#000"});
          // });
          // // $(function(){
          // //   $("rect").click(function(){
          // //     var id = $(this).attr("id");
          // //     console.log(id);
          // //     socket.emit("seats",id);
          // //   });
          // // });
          $("#submit").click(function(){
            $.ajax({
              url:"yoyaku.php",
              data:{
                movieId:movieId,
                timeId:timeId,
                seatId:seatId,
                cate:cate
              },
              success:yoyakuS,
              error:yoyakuE
            });
          });
        }
      });
    }  
    function yoyakuS(data){
      $("body").html(data);
        alert("予約完了");
    }
    function yoyakuE(){
      alert("失敗");
    }
    $('.moviesList li').hover(
      function(){
        $(this).find('.moviesCap').stop().animate({
          left: 0,
          opacity: 1
        }, 300);
      },
      function(){
        $(this).find('.moviesCap').stop().animate({
          left: '240px',
          opacity: 0
        }, 300);
      }
    );
    

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
        $('#reserveNowDate').text('.');
        $('#reserveNowTitle').text(eigaTitle);
    }//cinemaSelect()


  $(".moviesList li").click(function(){
     movieId = $(this).find("img").attr("data-id");
    $.ajax({
      url:"time.php",
      data:{
        movieId:movieId
      },
      success:suc,
      error:err
    });
  });
  function suc(data){
    $("#reserveTimetable").html(data);
    $("#reserveNowDate").html(selectDate);
    $("#reserveTimetable ul li").click(function(){
      timeId = $(this).attr("data-id");
      var theaterId = $(this).attr("data-sId");
      //席呼び出し
      if(theaterId =="T01"||theaterId=="T02"||theaterId=="T03"){
        connect01();
      }
    });
  }
  function err(){
    alert("失敗");
  }
});
