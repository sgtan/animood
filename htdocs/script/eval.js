$(document).ready(init);


function init(){
  $('.emotion>li').click(clickImage);
  $('#submit').click(doAjax);
}


function clickImage(event){
    var element = $(this).parent().children();
    for(i=0; i<$(this).parent().children().size(); i++){
      var string1 = "http://localhost/image/";
      var string2 = string1.concat(i);
      var string3 = string2.concat(".png");
      $('img', element[i]).attr('src', string3);
      
    }
    string1 = "http://localhost/image/";
    string2 = string1.concat($(this).index());
    string3 = string2.concat("_on.png");
    $('img', this).attr('src', string3);
    
}

function doAjax(){
  var mood;
  var data = {'optionCheckbox' : []};
  $(":checked").each(function(){
    data['optionCheckbox'].push($(this).val());
  });
  $.ajax({
    data:{


    },
    type: 'post',
    success: ajaxSuccess,
    error: ajaxError,
    url: 'http://localhost/index.php/content.php'
  });

  function ajaxSuccess(data, textStatus){
    $('#div').html('hi');
  }

  function ajaxError(data, textStatus){
    $('#answer').html('error');
  }

}
