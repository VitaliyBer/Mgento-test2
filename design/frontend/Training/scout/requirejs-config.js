let config = {
    "map": {
        "*": {

            "scrollCart": "js/scrollCart",
            "qtyCart": "js/qtyCart",
            "ajaxQty": "Magento_Checkout/js/cartAjaxQtyUpdate"
        }
    },
    config: {
        mixins: {
            'Magento_Checkout/js/view/summary/abstract-total': {
                'Magento_Checkout/js/abstract-total-mixin': true
            },

            'Magento_Checkout/js/view/summary/shipping': {
                'Magento_Checkout/js/shipping-mixin': true
            },

        }

    }
};