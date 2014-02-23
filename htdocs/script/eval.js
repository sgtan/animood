$(document).ready(init);

var checkbox = [];

function init(){
  $('.emotion>li').click(clickImage);
  clickSubmit();
  $(':checkbox').click(updateCB);
}

function updateCB(event){
  checkbox = [];
  var fields = $(':checked').each(function(){
    checkbox.push($(this).attr('value'));
  });
}

function clickImage(event){
    var element = $(this).parent().children();
    for(i=0; i<$(this).parent().children().size(); i++){
      var string1 = "http://localhost/image/";
      var string2 = string1.concat(i+1);
      var string3 = string2.concat(".png");
      $('img', element[i]).attr('src', string3);
      
    }
    string1 = "http://localhost/image/";
    string2 = string1.concat($(this).index()+1);
    string3 = string2.concat("_on.png");
    $('img', this).attr('src', string3);
    
}

function getQuestions(){
  question = [];
  for(i=1; i<=$('h2.question').length; i++){
    var string1 = "#question";
    var string2 = string1.concat(i);
    question[i-1] = $(string2).attr('questionid');
  }
  return question;
}

function getAnswer(){
  answer = [];
  for(i=0; i<$('h2.question').length; i++){
    var string1 = "#emotion";
    var string2 = string1.concat(i+1);
    var element = $(string2).children();
    answer[i] = -1;

    for(j=0; j<element.size(); j++){
      var s = $('img', element[j]).attr('src');
      if(s.indexOf("on")>-1){
        answer[i]= j+1;
      }
    }
  }
  return answer;
}

function getDateTime() {
    var now     = new Date(); 
    var year    = now.getFullYear();
    var month   = now.getMonth()+1; 
    var day     = now.getDate();
    var hour    = now.getHours();
    var minute  = now.getMinutes();
    var second  = now.getSeconds(); 

    if(month.toString().length == 1) {
        var month = '0'+month;
    }
    if(day.toString().length == 1) {
        var day = '0'+day;
    }   
    if(hour.toString().length == 1) {
        var hour = '0'+hour;
    }
    if(minute.toString().length == 1) {
        var minute = '0'+minute;
    }
    if(second.toString().length == 1) {
        var second = '0'+second;
    }   
    var dateTime = year+'/'+month+'/'+day+' '+hour+':'+minute+':'+second; 
    return dateTime;

}

function clickSubmit(){
  $('#submit').click(function(){
    if($('h1#eval-label').attr('type')==1)
      courseAjax();
    else if($('h1#eval-label').attr('type')==2)
      orgAjax();
    else if($('h1#eval-label').attr('type')==3)
      eventAjax();
    else if($('h1#eval-label').attr('type')==4)
      officeAjax();
  });  
}

function courseAjax(){
  question = getQuestions();
  answer = getAnswer();
  var comment = $('textarea#comment').val();
  var courseCode = $('h1#eval-label').attr('courseCode');
  var section = $('h1#eval-label').attr('section');
  var type = 1;
  var timestamp = getDateTime();

  $.ajax({
    data:{
      'courseCode' : courseCode,
      'section' : section,
      'question' : question,
      'answer' : answer,
      'checkbox' : checkbox,
      'comment' : comment,
      'timestamp' : timestamp,
      'type' : type
    },
    type: 'post',
    success: ajaxSuccess,
    error: ajaxError,
    url: 'http://localhost/index.php/content/eval_summary'
  });

}

function orgAjax(){
  question = getQuestions();
  answer = getAnswer();
  var comment = $('textarea#comment').val();
  var orgCode = $('h1#eval-label').attr('orgCode');
  var type = 2;
  var timestamp = getDateTime();

  $.ajax({
    data:{
      'orgCode' : orgCode,
      'question' : question,
      'answer' : answer,
      'checkbox' :checkbox,
      'comment' : comment,
      'timestamp' : timestamp,
      'type' : type
    },
    type: 'post',
    success: ajaxSuccess,
    error: ajaxError,
    url: 'http://localhost/index.php/content/eval_summary'
  })
}

function eventAjax(){
  question = getQuestions();
  answer = getAnswer();
  var comment = $('textarea#comment').val();
  var eventid = $('h1#eval-label').attr('eventid');
  var type = 3;
  var timestamp = getDateTime();

  $.ajax({
    data:{
      'eventid' : eventid,
      'question' : question,
      'answer' : answer,
      'checkbox' : checkbox,
      'comment' : comment,
      'timestamp' : timestamp,
      'type' : type
    },
    type: 'post',
    success: ajaxSuccess,
    error: ajaxError,
    url: 'http://localhost/index.php/content/eval_summary'
  });

}

function officeAjax(){
  question = getQuestions();
  answer = getAnswer();
  var comment = $('textarea#comment').val();
  var officeid = $('h1#eval-label').attr('officeid');
  var type = 4;
  var timestamp = getDateTime();

  $.ajax({
    data:{
      'officeid' : officeid,
      'question' : question,
      'answer' : answer,
      'checkbox' : checkbox,
      'comment' : comment,
      'timestamp' : timestamp,
      'type' : type
    },
    type: 'post',
    success: ajaxSuccess,
    error: ajaxError,
    url: 'http://localhost/index.php/content/eval_summary'
  });
}

function ajaxSuccess(data, textStatus){
    $('#main-content').html(data);
}

function ajaxError(data, textStatus){
    $('#main-content').html('error');
}
