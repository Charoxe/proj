sprint_editor.registerBlock('my_lists', function ($, $el, data) {
    var areas = [
        {
            dataKey : 'textOne',
            blockName: 'text',
            container : '.sp-area1'
        },
        {
            dataKey : 'textTwo',
            blockName: 'lists',
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