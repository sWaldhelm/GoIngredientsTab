Ext.define('Shopware.apps.GoIngredients.model.GoIngredients', {
    extend: 'Shopware.data.Model',
    configure: function() {
        return {
            controller: 'GoIngredients',
            detail: 'Shopware.apps.GoIngredients.view.detail.Container'
        };
    },
    fields: [
        { name : 'name', type: 'string', useNull: true },
        { name : 'description', type: 'text', useNull: false },
        { name : 'active', type: 'boolean', useNull: false },
    ],
});