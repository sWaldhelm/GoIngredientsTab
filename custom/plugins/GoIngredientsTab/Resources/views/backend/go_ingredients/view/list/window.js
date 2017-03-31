
Ext.define('Shopware.apps.GoIngredients.view.list.Window', {
    extend: 'Shopware.window.Listing',
    alias: 'widget.ingredients-list-window',
    height: 450,
    title : 'Inhaltsstoffe',

    configure: function() {
        return {
            listingGrid: 'Shopware.apps.GoIngredients.view.list.List',
            listingStore: 'Shopware.apps.GoIngredients.store.Ingredients'
        };
    }
});