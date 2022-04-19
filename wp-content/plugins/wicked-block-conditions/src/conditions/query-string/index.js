const { __ } = wp.i18n;
const { TextControl } = wp.components;

const QueryString = ( { condition, onChange } ) => {
    const { parameter, value } = condition;

    const handleChangeParameter = ( parameter ) => {
        onChange( {
            parameter:  parameter,
            value:      value
        } );
    };

    const handleChangeValue = ( value ) => {
        onChange( {
            parameter:  parameter,
            value:      value
        } );
    };

    return (
        <>
            <TextControl
                label={ __( 'Parameter' ) }
                help={ __( 'The name of the query string parameter to check.' ) }
                value={ parameter }
                onChange={ ( s ) => handleChangeParameter( s ) } />
            <TextControl
                label={ __( 'Value' ) }
                help={ __( 'The value to check for.' ) }
                value={ value }
                onChange={ ( s ) => handleChangeValue( s ) } />
        </>
    );
};

export default QueryString;
