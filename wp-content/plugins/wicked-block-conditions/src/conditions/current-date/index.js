const { __ } = wp.i18n;
const { assign } = lodash;
const { dateI18n, __experimentalGetSettings } = wp.date;
const { Fragment } = wp.element;
const { RadioControl, DatePicker, DateTimePicker, Button, Dropdown, PanelRow } = wp.components;

const CurrentDate = ( props ) => {
    const onChange = props.onChange;
    const condition = assign( {}, props.condition );
    const { compare, date } = condition;
    const dateOneLabel = 'between' == compare ? __( 'Start Date' ) : __( 'Date' );
    const settings = __experimentalGetSettings();
    const dateFormat = 'same day' == compare ? settings.formats.date : settings.formats.datetimeAbbreviated;

    const handleChangeCompare = ( compare ) => {
        condition.compare = compare;

        onChange( condition );
    };

    const handleChangeDate = ( date ) => {
        condition.date = date;

        onChange( condition );
    }

    return (
        <div className="wbc-current-date-condition">
            <RadioControl
                label={ __( 'Current date is:' ) }
                selected={ compare }
                options={ [
                    { label: __( 'Before' ), value: 'before' },
                    { label: __( 'After' ), value: 'after' },
                    { label: __( 'The same as' ), value: 'same day' },
                ] }
                onChange={ ( option ) => { handleChangeCompare( option ) } } />
            <PanelRow>
                <span>{ dateOneLabel }</span>
                <div>
                    <Dropdown
                        className="wbc-date-popup"
                        contentClassName="wbc-date-popup-content"
                        position="bottom right"
                        renderToggle={ ( { isOpen, onToggle } ) => (
                            <Button onClick={ onToggle } aria-expanded={ isOpen } isLink={ true }>
                                { dateI18n( dateFormat, date ) }
                            </Button>
                        ) }
                        renderContent={ () => (
                            <div>
                                { 'same day' == compare ? (
                                    <DatePicker
                                        currentDate={ date }
                                        is12Hour={ true }
                                        onChange={ ( date ) => { handleChangeDate( date ) } } />
                                ) : (
                                    <DateTimePicker
                                        currentDate={ date }
                                        is12Hour={ true }
                                        onChange={ ( date ) => { handleChangeDate( date ) } } />
                                ) }
                            </div>
                        ) }
                    />
                </div>
            </PanelRow>
            <PanelRow>
                <em>{ __( 'Note: Be sure that a timezone has been set for your site on the Settings > General page and that the date you select above is for that timezone.' ) }</em>
            </PanelRow>
            { 'between' == compare &&
                <PanelRow>
                    <span>{ __( 'End date' ) }</span>
                    <div>
                        <Dropdown
                            className="wbc-date-popup"
                            contentClassName="wbc-date-popup-content"
                            position="bottom right"
                            renderToggle={ ( { isOpen, onToggle } ) => (
                                <Button onClick={ onToggle } aria-expanded={ isOpen } isLink={ true }>
                                    { dateI18n( dateFormat, dateTwo ) }
                                </Button>
                            ) }
                            renderContent={ () => (
                                <div>
                                    <DateTimePicker
                                        currentDate={ dateTwo }
                                        is12Hour={ true }
                                        onChange={ ( date ) => { handleChangeDateTwo( date ) } } />
                                </div>
                            ) }
                        />
                    </div>
                </PanelRow>
            }
        </div>
    );
};

export default CurrentDate;
