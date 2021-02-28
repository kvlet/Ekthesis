/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('./forms');

$(document).ready(function(){

    let inputFields = $('.form-group input');

    inputFields.each(function (index, element){
        if($(element).val().length > 0) {
            $(element).parent().addClass('active')
        }
    });

    inputFields.on('focus', function(e) {
        e.preventDefault();
        $(this).parent().addClass('active')
    });

    inputFields.on('blur', function(e) {
        e.preventDefault();
        if($(this).val().length === 0) {
            $(this).parent().removeClass('active')
        }
    });

});

$(document).ready(function() {
    $("#diakr_view").DataTable();
});








