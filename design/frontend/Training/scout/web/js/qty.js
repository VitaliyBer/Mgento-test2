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
            let widgetElement = this.element;
            let widgetValue = parseInt($('#qty').val());
            let valueDefault = $('#qty').val(1);


            this._on('.cart__minus', {
                click: function (e) {
                    e.preventDefault();
                    if (!isNaN(widgetValue) && widgetValue > 1) {
                        $('#qty').val(widgetValue - 1);
                    } else {
                        valueDefault;
                    }
                }
            });

            this._on('.cart__plus', {
                click: function (e) {
                    e.preventDefault();
                    if (!isNaN(widgetValue)) {
                        $('#qty').val(widgetValue + 1);
                    } else {
                        valueDefault;
                    }
                }
            })
        }
    });


    return $.mage.qty;

});