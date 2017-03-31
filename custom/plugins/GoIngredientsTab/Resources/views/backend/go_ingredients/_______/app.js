Ext.define('Shopware.apps.GoIngredients', {
    extend: 'Enlight.app.SubApplication',
    name:'Shopware.apps.GoIngredients',
    loadPath: '{url action=load}',
    bulkLoad: true,
    controllers: [ 'Main' ],
    views: [
        'list.Window',
        'list.List',
         'detail.Container',
        'detail.Window'
    ],
    models: [ 'GoIngredients' ],
    stores: [ 'GoIngredients' ],
    launch: function() {
        return this.getController('Main').mainWindow;
    }
});