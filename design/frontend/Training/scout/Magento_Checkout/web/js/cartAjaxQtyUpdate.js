define([
    'jquery',
    'Magento_Checkout/js/action/get-totals',
    'Magento_Customer/js/customer-data',
    'jquery/ui',
    'domReady!'
], function ($, getTotalsAction, customerData) {
    'use strict';

    $.widget('mage.ajaxQty', {

        _create: function () {

            this._on({
                click: '_cartAjaxUpdate',
            });
        },

        _cartAjaxUpdate: function (e) {
            e.preventDefault();

            let form = $('form#form-validate');

            $.ajax({
                url: form.attr('action'),
                data: form.serialize(),
                showLoader: true,
                success: function (res) {
                    let parsedResponse = $.parseHTML(res);
                    let result = $(parsedResponse).find("#form-validate");

                    $("#form-validate").replaceWith(result);

                    // The mini cart reloading
                    customerData.reload(['cart'], true);

                    // The totals summary block reloading
                    let deferred = $.Deferred();
                    getTotalsAction([], deferred);
                },
                error: function (xhr, status, error) {
                    let err = eval("(" + xhr.responseText + ")");
                    console.log(err.Message);
                }
            });
        }
    });

    return $.mage.ajaxQty;
});