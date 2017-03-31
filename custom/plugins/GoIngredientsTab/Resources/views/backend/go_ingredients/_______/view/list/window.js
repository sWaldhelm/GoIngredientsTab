Ext.define('Shopware.apps.GoIngredients.view.list.Window',  {
   extend: 'Shopware.window.Listing',
    alias: 'widget.go-ingredients-list-window',
    title: 'Inhaltsstoffe',

    configure: function()   {
       return{
           listingGrid: 'Shopware.apps.GoIngredients.view.list.list',
           listingStore: 'Shopware.apps.GoIngredients.store.GoIngredients'
       };
    }
});