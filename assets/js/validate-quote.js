// Form Quote
$("#quoteform").validate({
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
        "quoteformname": {
            required: !0,
            minlength: 3
        },
        "quoteformemail": {
            required: !0,
            email: !0,
            emailfull: !0
        },
        "quoteformphone": {
            required: !0
        },
        "quoteformcountry": {
            required: !0
        },
        "quoteformdescription": {
            required: !0,
            minlength: 10
        },
        "quoteformwork[]": {
            required: !0
        },
        "quoteformbudget": {
            required: !0
        },
        "quoteformpages": {
            required: !0
        },
        "quoteformpayments": {
            required: !0
        },
        "quoteformmanagement": {
            required: !0
        },
        "quoteformseo": {
            required: !0
        }
    },
    messages: {
        "quoteformname": {
            required: " ",
            minlength: "At least 3 characters"
        },
        "quoteformemail": {
            required: " ",
            email: "Invalid email",
            emailfull: "Invalid email"
        },
        "quoteformphone": " ",
        "quoteformcountry": " ",
        "quoteformdescription": {
            required: "Could you please tell us more about your project",
            minlength: "At least 10 characters"
        },
        "quoteformwork[]": "Please select at least one",
        "quoteformbudget": "Please select one",
        "quoteformpages": "Please select one",
        "quoteformpayments": "Please select one",
        "quoteformmanagement": "Please select one",
        "quoteformseo": "Please select one"
    }
});


$('body').on('submit', '#quoteform', function(e) {
    e.preventDefault();
    var form_data = new FormData(this);
    for (var pair of form_data.entries()) {}
    $.ajax({
        type: "POST",
        url: 'quote-form.php',
        data: form_data,
        cache: false,
        contentType: false,
        processData: false
    }).done(function(data) {
        swal("Thank You", "Your form sent and we will contact you shortly", "success");
        document.getElementById('quoteform').reset();
    })
});


// Full Email
jQuery.validator.addMethod("emailfull", function(value, element) {
    return this.optional(element) || /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i.test(value);
}, " ");