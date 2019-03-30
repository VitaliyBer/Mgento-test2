define([
    'jquery',
    'underscore',
    'jquery/ui',
    'knockout',
    'domReady!'
], function ($, _) {
    'use strict';

    $.widget('mage.scrollCart', {


        _create: function () {

            this._on('#link__details', {
                click: '_linkScrollDetails'

            });

            this._on('#link__reviews', {
                click: '_linkScrollReviews'
            })
        },

        _linkScrollDetails: function (e) {
            e.preventDefault();
            let id = $(".description_block .product.attribute.description"),
                top = $(id).offset().top;
            $('body, html').animate({scrollTop: top}, 1000);

            $('.description__link-items li').removeClass("active__link");
            $('#link__details').addClass('active__link')
        },

        _linkScrollReviews: function (e) {
            e.preventDefault();
            let id = $(".fieldset.review-fieldset"),
                top = $(id).offset().top;
            $('body, html').animate({scrollTop: top}, 700);

            $('.description__link-items li').removeClass("active__link");
            $('#link__reviews').addClass('active__link')

        }
    });


    return $.mage.scrollCart;

});
