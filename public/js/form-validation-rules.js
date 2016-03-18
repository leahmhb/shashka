$(document).ready(function () {


  function myOnComplete() {
    $('#success').show();
    return true;
  };//end myOnComplete

  var addAncestoryRules = [
  "required,horse_id,Please select horse's call name.",
  "required,sire_id,Please select sire's call name.",
  "required,dam_id,Please select dam's call name."
  ];

  var addRaceRules = [
  "required,name,Please enter race name.",
  "required,surface,Please choose surface.",
  "required,distance,Please enter distance.",
  "required,ran_dt,Please enter ran date.",
  "required,grade,Please enter grade.",
  "required,url,Please enter url."
  ];

  var addRaceEntrantRules = [
  "required,horse_id,Please select horse's call name.",
  "required,race_id,Please select race.",
  "required,placing,Please enter placing."
  ];

  var addPersonRules = [
  "required,username,Please enter username.",
  "if:username!=Haubing,required,stable_name,Stable name required.",
  "if:username!=Haubing,required,stable_prefix,Stable prefix required."
  ];

  var addHorseRules = [
  "required,call_name,Please enter call name.",
  "required,sex,Please enter sex.",
  "required,owner,Please enter owner.",

/*  "digits_only,distance_max,The max distance field may only contain digits.",
"digits_only,distance_min,The min distance field may only contain digits.",*/

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

/*"range>=50,speed,Please enter a number >= 50 for speed.",
"range>=50,staying,Please enter a number >= 50 for staying.",
"range>=50,stamina,Please enter a number >= 50 for stamina.",
"range>=50,breaking,Please enter a number >= 50 for breaking.",
"range>=50,power,Please enter a number >= 50 for power.",
"range>=50,feel,Please enter a number >= 50 for feel.",
"range>=50,fierce,Please enter a number >= 50 for fierce.",
"range>=50,tenacity,Please enter a number >= 50 for tenacity.",
"range>=50,courage,Please enter a number >= 50 for courage.",
"range>=50,response,Please enter a number >= 50 for response.",*/

"if:owner!=Haubing,required,stall_path,Stall URL required for horses not owned by Haubing.",
"if:owner=Haubing,required,registered_name,Registered name required for horses owned by Haubing."
];//end addHorseRules

$("#add-horse, #update-horse").RSV({ 
  onCompleteHandler: myOnComplete,
  errorFieldClass: "errorFieldDemo5",
  displayType: "display-html",
  errorHTMLItemBullet: "&#8212; ",
  rules: addHorseRules
});//end rsv

$("#add-person, #update-person").RSV({ 
  onCompleteHandler: myOnComplete,
  errorFieldClass: "errorFieldDemo5",
  displayType: "display-html",
  errorHTMLItemBullet: "&#8212; ",
  rules: addPersonRules
});//end rsv

$("#add-race, #update-race").RSV({ 
  onCompleteHandler: myOnComplete,
  errorFieldClass: "errorFieldDemo5",
  displayType: "display-html",
  errorHTMLItemBullet: "&#8212; ",
  rules: addRaceRules
});//end rsv

$("#add-race-entrant").RSV({ 
  onCompleteHandler: myOnComplete,
  errorFieldClass: "errorFieldDemo5",
  displayType: "display-html",
  errorHTMLItemBullet: "&#8212; ",
  rules: addRaceEntrantRules
});//end rsv

$("#add-race-and-entry").RSV({ 
  onCompleteHandler: myOnComplete,
  errorFieldClass: "errorFieldDemo5",
  displayType: "display-html",
  errorHTMLItemBullet: "&#8212; ",
  rules: addRaceEntrantRules.concat(addRaceRules)
});//end rsv

$("#add-ancestory").RSV({
  onCompleteHandler: myOnComplete,
  errorFieldClass: "errorFieldDemo5",
  displayType: "display-html",
  errorHTMLItemBullet: "&#8212; ",
  rules: addAncestoryRules
});//end rsv




});//end ready
