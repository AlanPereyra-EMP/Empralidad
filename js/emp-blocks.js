( function( blocks, editor, element ) {
    var el = wp.element.createElement;


    wp.blocks.registerBlockStyle( 'emp-blocks/lists-items', {
        name: 'emp-style',
        label: 'Invertido',
    } );

    wp.blocks.registerBlockType( 'emp-blocks/lists-items', {
        title: 'EMP List items',

        icon: 'editor-ol',

        category: 'common',

        attributes: {
            content: {
                type: 'array',
                source: 'children',
                selector: 'span',
            },
            content1: {
                type: 'array',
                source: 'children',
                selector: 'p',
            },
        },
        edit: function( props ) {
            var content = props.attributes.content;
            function onChangeContent( newContent ) {
                props.setAttributes( { content: newContent } );
            }
            var content1 = props.attributes.content1;
            function onChangeContent1( newContent ) {
                props.setAttributes( { content1: newContent } );
            }


            return el('div', {className: 'py-5 emp-block'},
                    el('div',{className: 'list-item'},
                      el('div', {className: 'col text'},
                        el('div', {className: 'list-text'},
                            el(wp.editor.RichText, {tagName: 'span', className: '', onChange: onChangeContent, value: content, placeholder:  'Text here.' })
                        )
                      ),
                      el('div', {className: 'imagen-combo'},
                        el('div', {className: 'number'},
                          el('div', {className: 'circle'}),
                          el('div', {className: 'line'}),
                          el('div', {className: 'number-item'},
                            el( wp.editor.RichText, {tagName: 'p', className: 'klickart-font', onChange: onChangeContent1, value: content1, placeholder:  '#' })
                          )
                        )
                      )
                    )
                  );
        },

        save: function( props ) {
            return el('div', {className: 'py-5 emp-block'},
                    el('div',{className: 'list-item'},
                      el('div', {className: 'col text'},
                        el('div', {className: 'list-title'},
                            el( wp.editor.RichText.Content, {
                                tagName: 'span', value: props.attributes.content, className: 'text-gray', placeholder:  'Text here.'
                            } )
                        )
                      ),
                      el('div', {className: 'imagen-combo'},
                        el('div', {className: 'number'},
                          el('div', {className: 'circle'}),
                          el('div', {className: 'line'}),
                          el('div', {className: 'number-item'},
                            el( wp.editor.RichText.Content, {
                                tagName: 'p', value: props.attributes.content1, placeholder:  '#'
                            } )
                          )
                        )
                      )
                    )
                  );
        },
    } );

}(
    window.wp.blocks,
    window.wp.editor,
    window.wp.element
) );
