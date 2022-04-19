const { __ } = wp.i18n;
const { RadioControl } = wp.components;

const PostStatus = ( { condition, onChange } ) => {
    const { status } = condition;

    const handleChange = ( status ) => {
        onChange( {
            status: status
        } );
    };

    return (
        <RadioControl
    		label={ __( 'Post Status' ) }
    		selected={ status }
    		options={ [
    			{ label: __( 'Published' ), value: 'publish' },
                { label: __( 'Pending' ), value: 'pending' },
                { label: __( 'Draft' ), value: 'draft' },
                { label: __( 'Future' ), value: 'future' },
                { label: __( 'Private' ), value: 'private' },
    			{ label: __( 'Password Protected' ), value: 'password' },
    		] }
    		onChange={ ( option ) => { handleChange( option ) } } />
    );
};

export default PostStatus;
