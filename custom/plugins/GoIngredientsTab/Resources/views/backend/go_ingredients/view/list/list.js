
Ext.define('Shopware.apps.GoIngredients.view.list.List', {
    extend: 'Shopware.grid.Panel',
    alias:  'widget.ingredients-listing-grid',
    region: 'center',

    configure: function() {
        return {
            detailWindow: 'Shopware.apps.GoIngredients.view.detail.Window'
        };
    }
});
