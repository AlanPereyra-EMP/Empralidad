( function( blocks, element ) {
    var el = element.createElement,
        source = blocks.source;
        RichText = editor.RichText;

    function RandomImage( props ) {
        var src = 'http://localhost/wordpress/wp-content/uploads/2019/01/fondo-ip-150x150.png';

        return el( 'img', {
            src: src,
            alt: props.category,
            className: "aClassName"
        } );
    }

    blocks.registerBlockType( 'ip-blocks/number-image', {
        title: 'IP List items',

        icon: 'editor-ol',

        category: 'common',

        attributes: {
           content: {
               type: 'array',
               source: 'children',
               selector: 'p',
           },
       },
       example: {
           attributes: {
               content: 'Hello World',
           },
       },

        edit: function( props ) {
            var content = props.attributes.content;
            function onChangeContent( newContent ) {
                props.setAttributes( { content: newContent } );
            }

            return el('div', null,
                    el('div',
                      {className: 'list-item'},
                      el('div', {className: 'col text text-right'},
                        el('div', {className: 'list-title'},
                          el(RichText, {tagName: 'p', className: props.className, onChange: onChangeContent, value: content})
                        ),
                        el('div', {className: 'list-text'},
                          el('input', {type: 'textarea',className: 'klickart-font'})
                        )
                      )
                    )
                  );
        },

        save: function( props ) {
            return el('div', {className: 'wp-block-freeform block-library-rich-text__tinymce mce-content-body html5-captions mce-edit-focus'},
                    el('div',
                      {className: 'list-item'},
                      el('div', {className: 'col text text-right'},
                        el('div', {className: 'list-title'},
                          el('b', {className: 'medium-b klickart-font'}, 'Title')
                        ),
                        el('div', {className: 'list-text'},
                          el('div', {type: 'textarea',className: 'klickart-font', style.color: '#a1a1a1'}, 'asd asd asd asd asd asd ')
                        )
                      )
                    )
                  );
        }
    } );
} )(
    window.wp.blocks,
    window.wp.editor,
    window.wp.element
);
