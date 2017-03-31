
Ext.define('Shopware.apps.GoIngredients.store.Ingredients', {
    extend:'Shopware.store.Listing',

    configure: function() {
        return {
            controller: 'GoIngredients'
        };
    },
    model: 'Shopware.apps.GoIngredients.model.Ingredients'
});