
Ext.define('Shopware.apps.GoIngredients.model.Ingredients', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'GoIngredients',
            detail: 'Shopware.apps.GoIngredients.view.detail.Container'
        };
    },

    fields: [
        { name : 'id', type: 'int', useNull: true },
        { name : 'name', type: 'string', useNull: true  },
        { name : 'description', type: 'string', useNull: true },
        { name : 'active', type: 'boolean', useNull: true  },
    ],


});

