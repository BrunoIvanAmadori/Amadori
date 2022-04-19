import { findCondition, replaceCondition, removeCondition } from '../../util';

const { __ } = wp.i18n;
const { Fragment } = wp.element;
const { TextControl, ToggleControl, Button } = wp.components;
const { withState } = wp.compose;
const { find, isUndefined, forEach, assign, cloneDeep } = lodash;

const EditCondition = ( props ) => {
    let condition = findCondition( props.attributes.wickedBlockConditions.conditions, props.activeCondition );
    const conditionType = find( props.wickedBlockConditions.conditions, { type: condition.type } );
    const config = Object.assign( {}, props.attributes.wickedBlockConditions );
    const Edit = conditionType.edit;

    const handleChangeCondition = ( data ) => {
        condition = assign( {}, condition, data );

        updateCondition();
    }

    const handleChangeNegate = value => {
        condition.negate = value;

        updateCondition();
    }

    const handleClickSaveCondition = () => {
        props.setState( state => ( { action: 'view-conditions', activeCondition: null } ) );
    }

    const handleClickDeleteCondition = () => {
        config.conditions = removeCondition( config.conditions, condition );

        props.setAttributes( { wickedBlockConditions: config } );

        props.setState( state => ( { action: 'view-conditions', activeCondition: null } ) );
    }

    const handleChangeLabel = label => {
        condition.label = label;

        updateCondition();
    }

    const updateCondition = () => {
        config.conditions = replaceCondition( config.conditions, condition );

        props.setAttributes( { wickedBlockConditions: config } );
    }

    return (
        <div className="wbc-edit-condition">
            <h3>{ props.isNew ? __( 'Add Condition' ) : __( 'Edit Condition' ) }: { conditionType.label }</h3>
            <p>{ conditionType.description }</p>
            <TextControl
                label={ __( 'Label' ) }
                help={ __( 'Briefly explain what this condition does.' ) }
                value={ condition.label }
                onChange={ ( value ) => handleChangeLabel( value ) } />
            <ToggleControl
                label={ __( 'Negate condition' ) }
                checked={ condition.negate }
                help={ __( 'Reverses the outcome of the condition.' ) }
                onChange={ handleChangeNegate } />
            <Edit
                condition={ condition }
                onChange={ handleChangeCondition } />
            <div className="wbc-foot">
                <div className="wbc-save">
                    <Button
                        isPrimary={ true }
                        onClick={ handleClickSaveCondition }>
                        { __( 'Save' ) }
                    </Button>
                </div>
                <div className="wbc-delete">
                    <Button
                        isDefault={ true }
                        isDestructive={ true }
                        onClick={ handleClickDeleteCondition }>
                        { __( 'Delete' ) }
                    </Button>
                </div>
            </div>
        </div>
    )
}

export default EditCondition
