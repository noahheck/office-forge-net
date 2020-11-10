/**
 * js/admin/mailings/_form.js
 */

let $ = require('jquery');

$(function() {

    let bodyTextField = $("#body_text");

    let trixEditor = $('#mailing_body_html__editor');

    let editor = trixEditor[0].editor;

    trixEditor.on("trix-change", function() {
        let textContent = editor.getDocument().toString();

        bodyTextField.val(textContent);
    });
});
