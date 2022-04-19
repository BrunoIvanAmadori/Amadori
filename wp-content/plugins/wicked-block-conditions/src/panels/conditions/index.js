import Main from './main'
import SelectCondition from './select-condition'
import EditCondition from './edit-condition'
import { SliderPanels, SliderPanel } from './../../components/slider-panels'
import { conditions } from './../../conditions/index'
import * as data from './../../data'

const { __ } = wp.i18n;
const { assign } = lodash;
const { Fragment } = wp.element;
const { PanelBody } = wp.components;
const { createHigherOrderComponent, withState } = wp.compose;
const { InspectorControls } = wp.editor;
const { addFilter, applyFilters } = wp.hooks;

addFilter( 'blocks.registerBlockType', 'wicked-block-conditions/add-attribute', registerBlockTypeFilter );
addFilter( 'blocks.getSaveContent.extraProps', 'wicked-block-conditions/add-props', extraPropsFilter );

function registerBlockTypeFilter( settings ) {
	settings.attributes = assign( settings.attributes, {
        wickedBlockConditions: {
            type: 'object',
            default: {
                action: 'show',
                conditions: [],
            }
        }
	} );

	return settings;
}

function extraPropsFilter( extraProps, blockType, attributes ) {
	extraProps.wickedBlockConditions = attributes.wickedBlockConditions;

	return extraProps;
}

const ConditionsPanel = withState( {
	open: 				false,
	action: 			'view-conditions',
	activeCondition: 	null,
	group: 				null
} )( ( props ) => {
	const handleTogglePanel = () => {
		props.setState( state => ( { open: ! props.open } ) );
	}

    return (
        <InspectorControls>
            <PanelBody
				title={ __( 'Display Conditions', 'wicked-block-conditions' ) }
				initialOpen={ props.open }
				onToggle={ handleTogglePanel }>
				<SliderPanels activePanel={ props.action }>
					<SliderPanel name="view-conditions">
						<Main { ...props } />
					</SliderPanel>
					<SliderPanel name="select-condition">
						<SelectCondition { ...props } />
					</SliderPanel>
					<SliderPanel name="edit-condition">
						<EditCondition { ...props } />
					</SliderPanel>
				</SliderPanels>
            </PanelBody>
        </InspectorControls>
    )
} )

const withConditions = createHigherOrderComponent( ( BlockEdit ) => {
	const wickedBlockConditions = {
		conditions: applyFilters( 'wickedBlockConditions.conditions', conditions )
	}

    return ( props ) => {
        return (
            <Fragment>
                <BlockEdit { ...props } />
                <ConditionsPanel { ...props } wickedBlockConditions={ wickedBlockConditions } />
            </Fragment>
        );
    };
}, 'withConditions' );

export default withConditions;
