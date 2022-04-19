const { __ } = wp.i18n;
const { RadioControl } = wp.components;

const DisplayAction = ( { option, onChange } ) => {
    return (
        <RadioControl
            label={ __( 'When conditions are met:' ) }
            selected={ option }
            options={ [
                { label: __( 'Show this block' ), value: 'show' },
                { label: __( 'Hide this block' ), value: 'hide' },
            ] }
            onChange={ ( option ) => { onChange( option ) } }
        />
    )
}

export default DisplayAction;
