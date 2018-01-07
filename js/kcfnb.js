//angular app
var kcfnbApp = angular.module('kcfnbApp',['ngStorage','angular.filter']);
kcfnbApp.config(function($sceProvider) {
  // enable sce once API is implimented properly - Bob
  $sceProvider.enabled(false);
});
//app controller
kcfnbApp.controller('DateCtrl', function($scope){
	var controller = this;
  $scope.nextDateDowntown; //next friday
  $scope.nextDateNortheast; //next sunday
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
    phone: '',
    comments: ''
  };
  $scope.submitForm = function(){
    $scope.formEnabled = false;
    if(!$scope.formData.name ||
       !$scope.formData.email ||
       !$scope.formData.comments){
      $scope.formEnabled = true;
      return;
    }
    var thePost = {
      url : '', //set up a zap and put URL here
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
