// Wait for the DOM to be ready
$(function () {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      "option[]": "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      }
    },
    // Specify validation error messages
    messages: {
      "option[]": "Select at least one option",
      email: "Please enter a valid email address"
    },
    errorPlacement: function (label, element) {
      if (element.attr("name") === "option[]") {
        element.parent().parent().append(label); // this would append the label after all your checkboxes/labels (so the error-label will be the last element in <div class="controls"> )
      } else {
        label.insertAfter(element); // standard behaviour
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid

  });
});
$(function () {
  if (document.location.href.indexOf('#success') > -1) {
    $("#success").show();
  }

  if (document.location.href.indexOf('#unsubscribesuccess') > -1) {
    $("#unsubscribesuccess").show();
  }

});