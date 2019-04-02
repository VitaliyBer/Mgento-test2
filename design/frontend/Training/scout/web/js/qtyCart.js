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

            let elem = this.element.context.lastElementChild.id;


            this._on('.cart__minus#' + elem, {
                click: '_cartMinus'
            });

            this._on('.cart__plus#' + elem, {
                click: '_cartPlus'
            })
        },

        _cartMinus: function (e) {
            e.preventDefault();
            let inputId = e.delegateTarget.id;
            let input = $("input#" + inputId);
            let widgetValue = parseInt(input.val());

            !isNaN(widgetValue) && widgetValue > 1 ? input.val(widgetValue - 1) :input.val(1);

        },

        _cartPlus: function (e) {
            e.preventDefault();
            let inputId = e.delegateTarget.id;
            let input = $("input#" + inputId);
            let widgetValue = parseInt(input.val());

            !isNaN(widgetValue) ? input.val(widgetValue + 1) : input.val(1);

        },

    });


    return $.mage.qty;

});