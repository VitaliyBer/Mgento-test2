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
                click: function (e) {
                    e.preventDefault();
                    let widgetValue = parseInt($('#qty').val());
                    if (!isNaN(widgetValue) && widgetValue > 1) {
                        $('#qty').val(widgetValue - 1);
                    } else {
                        $('#qty').val(1);
                    }
                }
            });

            this._on('.cart__plus', {
                click: function (e) {
                    e.preventDefault();
                    let widgetValue = parseInt($('#qty').val());
                    if (!isNaN(widgetValue)) {
                        $('#qty').val(widgetValue + 1);
                    } else {
                        $('#qty').val(1);
                    }
                }
            })
        }
    });


    return $.mage.qty;

});