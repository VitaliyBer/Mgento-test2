define([
    'Magento_Checkout/js/model/quote'
], function (quote) {
    "use strict";
    let mixin = {

        getValue: function() {

            if (!this.isCalculated()) {
                return this.notCalculatedMessage;
            }

            let shippingMethod = quote.shippingMethod();
            let price =  shippingMethod.amount;
            return this.getFormattedPrice(price);
        }
    };

    return function (target) {
        return target.extend(mixin);
    }
});