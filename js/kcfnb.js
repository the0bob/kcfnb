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
