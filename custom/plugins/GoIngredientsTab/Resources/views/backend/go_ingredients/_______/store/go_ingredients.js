Ext.define('Shopware.apps.GoIngredients.store.GoIngredients', {
    extend:'Shopware.store.Listing',
    configure: function() {
        return {
            controller: 'GoIngredients'
        };
    },
    model: 'Shopware.apps.GoIngredients.model.GoIngredients'
});