var mceInit = function(id) {
    this.params = {
        plugins:            ["table paste"],
        relative_urls:      false,
        toolbar_items_size: 'small',
        entity_encoding:    'raw',
        selector:           '#' + id + 'editor',
        toolbar:            "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image pasteword",
        paste_auto_cleanup_on_paste : true,
        setup:function(ed) {
            ed
                .on('change', function(e) {
                    //Trigger change on the TeatArea element to display change in the WYSIWYG editor
                    jQuery(ed.settings.selector)
                        .val(ed.getContent())
                        .trigger('change');
                })
            // .on('init', function(e) {
            //     //Create a modal button for the editor instead of using fullscreen plugin.
            //     $tmcediv = jQuery(ed.settings.selector).parent().find('>.mce-container');
            //     $tmcediv.after(jQuery('<a/>', {
            //         'class':    'button thickbox',
            //         'type':     'button',
            //         'html':     'Agrandir',
            //         'href':     '#TB_inline?width=600&height=300&inlineId='+$tmcediv.attr('id'),
            //     }));
            // });
        }
    };

    tinymce.init(this.params);
};

function html_caldera_setup(id) {
    new mceInit(id);
}
