require('./bootstrap');

let $ = require('jquery');

$(function() {

    $('.delete-form').submit(function(e) {

        let item = $(this).data('deleteItem');

        if (!confirm("Are you sure you want to delete this " + item + "?")) {
            e.preventDefault();
        }
    });

});
