$(document).ready(function () {
  $('.dropdown-toggle').click(function() {
    var location = $(this).attr('href');
    window.location.href = location;
    return false;
  });
  $.fn.datepicker.defaults.format = "yyyy/mm/dd";
  $.fn.datepicker.defaults.todayHighlight =

  $('#datepicker').datepicker();

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  function myOnComplete() {
    $('#success').show();
    return true;
  };//end myOnComplete

  var addHorseRules = [
      //required
      "required,call_name,Please enter call name.",
      "required,registered_name,Please enter registered name.",
      "required,sex,Please enter sex.",
      "required,owner,Please enter owner.",
      //distance
      "digits_only,distance_max,The max distance field may only contain digits.",
      "digits_only,distance_min,The min distance field may only contain digits.",
      //stats, digits only
      "digits_only,speed,The speed field may only contain digits.",
      "digits_only,staying,The staying field may only contain digits.",
      "digits_only,stamina,The stamina field may only contain digits.",
      "digits_only,breaking,The breaking field may only contain digits.",
      "digits_only,power,The power field may only contain digits.",
      "digits_only,feel,The feel field may only contain digits.",
      "digits_only,fierce,The fierce field may only contain digits.",
      "digits_only,tenacity,The tenacity field may only contain digits.",
      "digits_only,courage,The courage field may only contain digits.",
      "digits_only,response,The response field may only contain digits.",
      //stats, >= 50
      "range>=50,speed,Please enter a number >= 50 for speed.",
      "range>=50,staying,Please enter a number >= 50 for staying.",
      "range>=50,stamina,Please enter a number >= 50 for stamina.",
      "range>=50,breaking,Please enter a number >= 50 for breaking.",
      "range>=50,power,Please enter a number >= 50 for power.",
      "range>=50,feel,Please enter a number >= 50 for feel.",
      "range>=50,fierce,Please enter a number >= 50 for fierce.",
      "range>=50,tenacity,Please enter a number >= 50 for tenacity.",
      "range>=50,courage,Please enter a number >= 50 for courage.",
      "range>=50,response,Please enter a number >= 50 for response.",
      //stall url      
      "if:owner!=Haubing,required,stall_path,Stall URL required for horses not owned by Haubing.",
];//end addHorseRules

   $("#add-horse").RSV({ //add horse form validation
    onCompleteHandler: myOnComplete,
    errorFieldClass: "errorFieldDemo5",
    displayType: "display-html",
    errorHTMLItemBullet: "&#8212; ",
    rules: addHorseRules
});//end rsv


   $("#update-horse").RSV({ //update horse form validation
    onCompleteHandler: myOnComplete,
    errorFieldClass: "errorFieldDemo5",
    displayType: "display-html",
    errorHTMLItemBullet: "&#8212; ",
    rules: addHorseRules
});//end rsv

});//end ready
