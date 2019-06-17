export default {

    showError(element_id) {
        $(element_id).addClass('text-input--error');
        $(element_id + '_error').css('display', 'block');
        $(element_id + '_error_icon').css('display', 'block');
    },

    hideAllErrors() {
        $('.text-input__error').css('display', 'none');
        $('.text-input__icon').css('display', 'none');
        $('.text-input').removeClass('text-input--error');
    },

    watchForErrors(element_id) {
      element_id = '#' + element_id;
      var self = this;

      $(element_id).on('keyup', function() {
        self.hideAllErrors();

        if(!self.validate(element_id)) {
          self.showError(element_id);
        }
      });
    },

    validate(element_id) {
        let pattern = $(element_id).attr('data-regex');
        pattern = new RegExp(pattern);

        let this_value = $(element_id).val();
        var result = true;

        if(this_value != '') {
          result = pattern.test(this_value);
        }

        return result;
    }

}
