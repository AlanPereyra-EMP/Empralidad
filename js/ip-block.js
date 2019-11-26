( function( blocks, editor, element ) {
    var el = element.createElement;
    var RichText = editor.RichText;

    // Styles
    var listItem = {
      position: 'relative',
      display: 'flex',
      alignItems: 'center',
      minHeight: '100px',
    };
    var colText = {
      paddingRight: '10%',
      width: '50%',
    };
    var listText = {};

    var imagenCombo = {
      position: 'absolute',
      left: '50%',
      width: '100px',
      height: '100px',
  		transform: 'translate(-50%)',
    };
    var circle = {
      background: '#fff',
        height: '100px',
        width: '100px',
        borderRadius: '50%',
    };
    var numberItem = {
      color: '#000',
      display: 'block',
      position: 'absolute',
      top: '0',
      height: '100%',
      zIndex: '6',
      textAlign: 'center',
      fontSize: '63px',
    };
    // Styles

    blocks.registerBlockStyle( 'ip-blocks/lists-items', {
        name: 'ip-style',
        label: 'Invertido',
    } );

    blocks.registerBlockType( 'ip-blocks/lists-items', {
        title: 'IP List items',

        icon: 'editor-ol',

        category: 'common',

        attributes: {
            content: {
                type: 'array',
                source: 'children',
                selector: 'span',
            },
        },
        example: {
            attributes: {
                content: 'Hello World'
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


            return el('div', null,
                    el('div',{className: 'list-item'},
                      el('div', {className: 'col text'},
                        el('div', {className: 'list-text'},
                            el(RichText, {tagName: 'span', className: '', onChange: onChangeContent, value: content, placeholder:  'Text here.' })
                        )
                      ),
                      el('div', {className: 'imagen-combo'},
                        el('div', {className: 'number'},
                          el('div', {className: 'circle'}),
                          el('div', {className: 'number-item'},
                            el( RichText, {tagName: 'span', className: 'klickart-font', onChange: onChangeContent1, value: content1, placeholder:  '#' })
                          )
                        )
                      )
                    )
                  );
        },

        save: function( props ) {
            return el('div', {className: 'py-5'},
                    el('div',{className: 'list-item', style: listItem},
                      el('div', {className: 'col text'},
                        el('div', {className: 'list-title'},
                            el( RichText.Content, {
                                tagName: 'span', value: props.attributes.content, className: 'text-gray'
                            } )
                        )
                      ),
                      el('div', {className: 'imagen-combo'},
                        el('div', {className: 'number'},
                          el('div', {className: 'circle'}),
                          el('div', {className: 'number-item'},
                            el( RichText.Content, {
                                tagName: 'span', value: props.attributes.content1
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
