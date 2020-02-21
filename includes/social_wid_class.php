<?php

class Social_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'Social_Widget', // Base ID
            'Social_Widget', // Name
            array('description' => __('A Social_Widget', 'Social_Widget_domain')) // Args
        );
    }

    public function widget($args, $instance)
    {
        ?>
        <?php echo ($args['before_widget'])?>
        <br>
        
       <a href="<?php echo esc_attr($instance['facebook'])?>"><span class="dashicons dashicons-facebook"></span></a>
       <a href="<?php echo esc_attr($instance['instagram'])?>"><span class="dashicons dashicons-instagram"></span></a>
       <a href="<?php echo esc_attr($instance['twitter'])?>"><span class="dashicons dashicons-twitter"></span></a>
       <?php echo ($args['before_widget'])?>
       <?php
}

    public function form($instance)
    {
        $this->getForm($instance);
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['facebook'] = (!empty($new_instance['facebook'])) ? sanitize_text_field($new_instance['facebook']) : '';
        $instance['instagram'] = (!empty($new_instance['instagram'])) ? sanitize_text_field($new_instance['instagram']) : '';
        $instance['twitter'] = (!empty($new_instance['twitter'])) ? sanitize_text_field($new_instance['twitter']) : '';

        return $instance;

    }

    public function getForm($instance)
    {
        if ($instance) {
            $facebook = esc_attr($instance['facebook']);
        } else {
            $facebook = '';
        }

        if ($instance) {
            $instagram = esc_attr($instance['instagram']);
        } else {
            $instagram = '';
        }

        if ($instance) {
            $twitter = esc_attr($instance['twitter']);
        } else {
            $twitter = '';
        }

        ?>
    <h4>Facebook</h4>
    <p>
    <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Link to your facebook:');?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>"
         name="<?php echo $this->get_field_name('facebook'); ?>"
         type="text" value="<?php echo esc_attr($facebook); ?>">
    </p>

    <h4>instagram</h4>
    <p>
    <label for="<?php echo $this->get_field_id('instagram'); ?>"><?php _e('Link to your instagram:');?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>"
         name="<?php echo $this->get_field_name('instagram'); ?>"
         type="text" value="<?php echo esc_attr($instagram); ?>">
    </p>

    <h4>twitter</h4>
    <p>
    <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Link to your twitter:');?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>"
         name="<?php echo $this->get_field_name('twitter'); ?>"
         type="text" value="<?php echo esc_attr($twitter); ?>">
    </p>
<?php
}
}
