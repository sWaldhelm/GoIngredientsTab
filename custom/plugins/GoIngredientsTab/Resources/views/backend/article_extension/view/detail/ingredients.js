//{block name="backend/article_extension/view/detail/ingredients"}
Ext.define('Shopware.apps.ArticleExtension.view.detail.Ingredients', {
   extend: 'Ext.panel.Panel',
    alias:'widget.ingredients-field-set',

    title: 'Ingredient Fieldset',
    cls: Ext.baseCSSPrefix + 'article-settings-field-set',

    initComponent: function () {
        var me = this;

        me.items = me.createElements();
        me.callParent(arguments);
    },

    createElements: function () {
       var me = this;
        me.mainDetailAdditionalText = Ext.create('Ext.form.field.Text', {
            name: 'mainDetail[additionalText]',
            translatable: false,
            labelWidth: 155,
            anchor: '100%',
            hidden: !showAdditionalText,
            fieldLabel: me.snippets.mainDetailAdditionalText
        });
       return[
           me.mainDetailAdditionalText
       ];
    }
});
//{/block}