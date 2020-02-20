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
       test
       <?php
}

    public function form($instance)
    {

    }

    public function update($new_instance, $old_instance)
    {
        // processes widget options to be saved
    }
}
?>