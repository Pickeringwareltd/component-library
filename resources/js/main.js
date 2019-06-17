import textInput from './components/js/text-input';

$(document).ready(function(){

  textInput.watchForErrors('mobile_number');
  textInput.watchForErrors('email_address');

});
