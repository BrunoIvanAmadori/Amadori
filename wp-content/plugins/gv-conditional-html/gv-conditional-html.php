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
        $current_category = get_the_category();

        foreach (get_categories() as $category) :
            if ($category->name == $current_category[0]->name) {
                echo $instance[$category->name];
            }
        endforeach;
    }
    public function form($instance)
    {
        foreach (get_categories() as $category) :
?>
            <div>
                <label for="<?php echo $this->get_field_id($category->name) ?>"><?php echo 'Category: ' . $category->name; ?></label>
                <textarea class="widefat" id="<?php echo $this->get_field_id($category->name) ?>" name="<?php echo $this->get_field_name($category->name) ?>" value="<?php echo $instance[$category->name] ?>"><?php echo $instance[$category->name] ?></textarea>
            </div>
<?php
        endforeach;
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        //$instance['Recursos Humanos'] = $new_instance['Recursos Humanos'];
        foreach (get_categories() as $category) :
            $instance[$category->name] = (!empty($new_instance[$category->name])) ? ($new_instance[$category->name]) : '';
        endforeach;

        return $instance;
    }
}
