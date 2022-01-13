<?php

/**
 * Plugin Name: GV Conditional HTML Widget
 * Author URI: https://brunoamadori.com/
 * Text Domain: gv-conditional-html-widget
 *
 * @category Widgets
 * @author Bruno Amadori
 */

function register_gv_conditional_html_widget()
{
    register_widget('GVConditionalHTMLWidget');
}
add_action('widgets_init', 'register_gv_conditional_html_widget');

class GVConditionalHTMLWidget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            // widget ID
            'gv_conditional_html_widget',
            // widget name
            __('Gv Conditional HTML Widget', ' gv_conditional_html_widget_domain'),
            // widget description
            array('description' => __('A widget to display custom content based on category', 'gv_conditional_html_widget_domain'),)
        );
    }
    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);

        //if title is present
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];
        //output

    }
    public function form($instance)
    {
        foreach (get_categories() as $category) :
?>
            <p>
                <label for="<?php echo $this->get_field_id($category->name) ?>"><?php echo 'Category: ' . $category->name; ?></label>
                <textarea class="widefat" id="<?php echo $this->get_field_id($category->name) ?>" name="<?php $this->get_field_name($category->name) ?>" type="text" value="" />
            </p>
<?php
        endforeach;
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();

        foreach (get_categories() as $category) :
            $instance[$category->name] = (!empty($instance[$category->name])) ? ($new_instance[$category->name]) : '';
        endforeach;

        return $instance;
    }
}
