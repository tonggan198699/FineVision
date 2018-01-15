
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


$(function() {

  $(".error_email").hide();

  var error_email = false;

  $("#email").focusout(function() {
    check_email();
  });

  function check_firstname() {

      var firstname_length = $("#firstname").val().length;

      if(!(firstname_length > 0)) {
        $(".error_firstname").show();
        error_firstname = true;
      }else {
        $(".error_firstname").hide();
      }
  }

  function check_email() {

      var email_pattern = new RegExp(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);

      if(email_pattern.test($("#email").val())) {
        $(".error_email").hide();
        $('#next1').prop('disabled', false);
      }else{
        $(".error_email").show();
        $('#next1').prop('disabled', true);
        error_email = true;
      }
  }

});
