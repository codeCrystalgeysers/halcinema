$(function(){

  $('#seat3').html('<ul>');
  for(var i =0; i<100; i++){
    $('#seat3 ul').append('<li>A'+i);
  }
  $('#seat3').append('</ul>');


  var checkpoint = Array[0,3,33,35,63];//折り返しポイントだが，使ってない
  var l = 0;
  //2
  $('#seat2').html('<ul>');
  for(var i=0; i<198; i++){
    $('#seat2 ul').append('<li><p>&ensp;</p>');
    if(i<=3){
      $('#seat2 li:last-child').addClass('en1');
    }
  }
  $('#seat2').append('</ul>');
    
    
    $('#seat1').html('<ul>');
    for(var i=0; i<100; i++){
        $('#seat1 ul').append('<li><p>'+i+'</p>');
        if( i>4 && i<14 )
        $('#seat1 li:nth-child('+i+')').addClass('pair');
    }
    $('#seat1').append('</ul>');

});