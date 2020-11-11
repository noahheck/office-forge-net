/**
 * js/admin/mailings/show.js
 */

let $ = require('jquery');

$(function() {

    $('#sendMailingForm').submit(function(event) {
        if (!confirm("Are you sure you want to send this Mailing?\n\nOnce sent, this can't be undone!")) {
            event.preventDefault();
        }
    });

});
