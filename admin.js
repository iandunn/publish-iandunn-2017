// Add `align: wide` support to the Code block, because otherwise it's too narrow.
wp.hooks.addFilter(
    'blocks.registerBlockType',
    'publish-iandunn/code-block-wide-support',
    function( settings, name ) {
        if ( name !== 'core/code' ) {
	        return settings;
        }

        const alignments = ( settings.supports && settings.supports.align ) || [];
        alignments.push( 'wide' );

        return lodash.assign( {}, settings, {
            supports: lodash.assign( {}, settings.supports, {
                align: alignments,
            } ),
        } );
    }
);
