define([
    'jquery',
    'underscore',
    'jquery/ui',
    'knockout',
    'domReady!'
], function ($, _) {
    'use strict';

    $.widget('mage.qty', {

        _create: function () {

            this._on('.cart__minus', {
                click: '_cartMinus'
            });

            this._on('.cart__plus', {
                click: '_cartPlus'
            })
        },


        _cartMinus: function (e) {
            e.preventDefault();
            let widgetValue = parseInt($('#qty').val());
            if (!isNaN(widgetValue) && widgetValue > 1) {
                $('#qty').val(widgetValue - 1);
            } else {
                $('#qty').val(1);
            }
        },

        _cartPlus: function (e) {
            e.preventDefault();
            let widgetValue = parseInt($('#qty').val());
            if (!isNaN(widgetValue)) {
                $('#qty').val(widgetValue + 1);
            } else {
                $('#qty').val(1);
            }
        }

    });


    return $.mage.qty;

});