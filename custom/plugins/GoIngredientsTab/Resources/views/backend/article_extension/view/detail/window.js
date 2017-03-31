//{block name="backend/article_extension/view/detail/window" append}
Ext.define('Shopware.apps.ArticleExtension.view.detail.Window', {
   override: 'Shopware.apps.Article.view.detail.Window',


    createBaseTab: function() {
        var me = this;

        items = me.callParent(arguments);

        items.push({
            xtype: 'ingredients-field.set';
        })
    },

    createBaseFieldSet: function() {
        return Ext.create('Shopware.apps.Article.view.detail.Incredients');
    }
});
//{/block}