sprint_editor.registerBlock('my_quote', function ($, $el, data) {
    var areas = [
        {
            dataKey : 'textOne',
            blockName: 'text',
            container : '.sp-area1'
        },
        {
            dataKey : 'textTwo',
            blockName: 'text',
            container : '.sp-area2'
        }
    ];

    this.getData = function () {
        return data;
    };

    this.collectData = function () {
        return data;
    };

    this.getAreas = function(){
        return areas;
    };
});