/**
 * js/admin.js
 */

let $ = require('jquery');

require('Component/trix');

$(function() {

    $(".delete-subscriber-form").submit(function(event) {
        if (!confirm("Are you sure you want to delete this subscriber?")) {
            event.preventDefault();

            return false;
        }
    });

});
