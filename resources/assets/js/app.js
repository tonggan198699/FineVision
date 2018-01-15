
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


$(function() {

  $(".error_email").hide();
  $(".error_telephone").hide();
  $(".error_dob").hide();

  var error_email = false;
  var error_telephone = false;
  var error_dob = false;

  $("#email").focusout(function() {
    check_email();
  });

  $("#telephone").focusout(function() {
    check_telephone();
  });

  $("#dob").focusout(function() {
    check_dob();
  });

  function check_email() {

      // email validation for normal email format
      var email_pattern = new RegExp(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);

      if(email_pattern.test($("#email").val())) {
        $(".error_email").hide();
        $('#next1').prop('disabled', false);
      }else{
        $(".error_email").show();
        $('#next1').prop('disabled', true);
      }
  }

  function check_telephone() {

  /* phone number validation of 11 digits with numbers only,
  dot or space is allowed as seperator only for the 6th and the 10th digits
  i.e. 01234 512 132 or 01234.512.132 */
  var phone_pattern = new RegExp(/^\(?([0-9]{5})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/);

      if(phone_pattern.test($("#telephone").val())) {
        $(".error_telephone").hide();
      }else{
        $(".error_telephone").show();
      }
  }

  function check_dob() {

  //dob validation of format dd/yy/yyyy
  var dob_pattern = new RegExp(/^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/);

    if(dob_pattern.test($("#dob").val())) {
      $(".error_dob").hide();
    }else{
      $(".error_dob").show();
    }

  }

  $("#collapse2").focusout(function() {

  var phone_pattern = new RegExp(/^\(?([0-9]{5})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/);
  var dob_pattern = new RegExp(/^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/);

  if(phone_pattern.test($("#telephone").val()) && dob_pattern.test($("#dob").val())){
    $(".error_telephone").hide();
    $(".error_dob").hide();
    $('#next2').prop('disabled', false);
  }

});


});
