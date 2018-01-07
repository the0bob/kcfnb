//angular app
var kcfnbApp = angular.module('kcfnbApp',['ngStorage','angular.filter']);
kcfnbApp.config(function($sceProvider) {
  // enable sce once API is implimented properly - Bob
  $sceProvider.enabled(false);
});
//app controller
kcfnbApp.controller('HeaderCtrl', function($scope){
	var controller = this;
  var td = new Date();
  var nextFriday = new Date(td.getFullYear(),td.getMonth(),td.getDate()+(5-td.getDay()));
  var nextSunday = new Date(td.getFullYear(),td.getMonth(),td.getDate()+(7-td.getDay()));
  var months = ["Jan", "Feb", "Mar",
    "Apr", "May", "Jun", "Jul",
    "Aug", "Sep", "Oct",
    "Nov", "Dec"];
  $scope.nextDateDowntown = months[nextFriday.getMonth()] + ' ' +  nextFriday.getDate() + ' ' + nextFriday.getFullYear();
  $scope.nextDateNortheast = months[nextSunday.getMonth()] + ' ' + nextSunday.getDate() + ' ' + nextSunday.getFullYear();;
  $scope.isInit = true;
  // old php code
  // $nextDate = date('M d, Y',strtotime( "next sunday" )); //yes, it's really that easy
  // $nextDateDowntown = date('M d, Y',strtotime( "next friday" ));
});
kcfnbApp.controller('ZineCtrl', function($scope){
	var controller = this;
  $scope.zines = [
'Activists guide to basic first aid.pdf',
'AHalfDecadeSouthSideARA (1).pdf',
'an_herbal_medicine_making_primer.pdf',
'anarchism in black africa.pdf',
'anarchist_surival_guide.pdf',
'anarchy_and_alcohol_imposed.pdf',
'anarchycantfightalone.pdf',
'ask_first.pdf',
'BLA (1).pdf',
'black-anarchism-final (1).pdf',
'building.pdf',
'Capitalism Plus Dope Equals Genocide (1).pdf',
'CARNE_ES_ASESINATO_ALF_MEXICO.pdf',
'celling black bodies.pdf',
'chasing_after_ghosts.pdf',
'chickweed_1.pdf',
'colonizationzine.pdf',
'Combined cards Food Not Bombs.pdf',
'diy-guide-prevent-sexual-assault.pdf',
'edible_medicinal_utilitarian_plants.pdf',
'edible_wild_west_michigan_v1.pdf',
'FoodNotBombsZinePrintWM.pdf',
'Gender Anarky.pdf',
'gjblackrevolutionary (1).pdf',
'harriet_tubman_underground (1).pdf',
'History of abc.pdf',
'how_to_put_together_consent_workshop.pdf',
'how-to-promote-events-print.pdf',
'Iwillnotcrawl (1).pdf',
'KuwasiBalagoon.pdf',
'learning_good_consent.pdf',
'lets_talk_feminist_communication.pdf',
'MOVE.pdf',
'Non-Western Anarchisms_Rethinking the Global Context.pdf',
'PantherSistersWomensLiberation (1).pdf',
'PantherSistersWomensLiberation (2).pdf',
'Piece Now Peace Later.pdf',
'political prisoner  combo flyer.jpg',
'primitive_toothcare.pdf',
'prologue_history_of_capitalism.pdf',
'smashingorderly-imposed.pdf',
'Some Notes on Insurrectionary Anarchism original version (1).pdf',
'squatters_handbook.pdf',
'straightouttakc_impo.pdf',
'TheDrugEpidemicANewFormOfBlackGenocide (1).pdf',
'TheRealResistance (2).pdf',
'TheRealResistance (3).pdf',
'TheRealResistance.pdf',
'what_to_do.pdf',
'whats_the_non profit industrial complex.pdf'
];
  $scope.isInit = true;
});
kcfnbApp.controller('ContactCtrl', function($http, $scope){
  var controller = this;
  //init form fields
  $scope.formEnabled = true;
  $scope.formSubmitted = false
  $scope.formData = {
    name: '',
    email: '',
    location: 'Any',
    message: ''
  };
  $scope.submitForm = function(){
    $scope.formEnabled = false;
    if(!$scope.formData.name ||
       !$scope.formData.email ||
       !$scope.formData.message){
      $scope.formEnabled = true;
      return;
    }
    var thePost = {
      url : 'https://hooks.zapier.com/hooks/catch/2516557/8r7att/', //set up a zap and put URL here
      method: 'POST',
      data: $scope.formData,
      headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    };
    $http(thePost).success(function(response){
      $scope.response = response;
      console.log('Success! ',$scope.response);
      $scope.formSubmitted = true;
    }).error(function(response){
      $scope.response = response;
      console.log('Error... ',$scope.response);
      $scope.formEnabled = true;
    });
  }
});

$(document).ready(function(){
  //fix menu after reaching a certain point
  var nav = $("#main-nav");
  var pos = nav.offset().top;
  $(window).scroll(function(){
    var fix = ($(this).scrollTop() > pos) ? true : false;
    nav.toggleClass("main-nav-fix", fix);
    $('body').toggleClass("body-fix", fix);
  });
      //$("#main-nav").removeClass("main-nav-fix");
});
