// Form Contact
$("#newsletterform").validate({
    ignore: [],
    errorClass: "invalid-feedback",
    errorElement: "div",
    errorPlacement: function(e, a) {
        $(a).parents(".form-outline").append(e)
    },
    highlight: function(e) {
        $(e).closest(".form-outline").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        $(e).closest(".form-outline").removeClass("is-invalid"), $(e).remove()
    },
    rules: {
        "newsletterformemail": {
            required: !0,
            email: !0,
            emailfull: !0
        }
    },
    messages: {
        "newsletterformemail": {
            required: " ",
            email: "Invalid email",
            emailfull: "Invalid email"
        }
    }
});


$('body').on('submit', '#newsletterform', function(e) {
    e.preventDefault();
    var form_data = new FormData(this);
    for (var pair of form_data.entries()) {}
    $.ajax({
        type: "POST",
        url: 'newsletter-form.php',
        data: form_data,
        cache: false,
        contentType: false,
        processData: false
    }).done(function(data) {
        swal("Thank You", "Your email sent and we will contact you shortly", "success");
        document.getElementById('newsletterform').reset();
    })
});


// Full Email
jQuery.validator.addMethod("emailfull", function(value, element) {
    return this.optional(element) || /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i.test(value);
}, " ");