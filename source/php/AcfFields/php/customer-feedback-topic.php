<?php 



    'key' => 'group_59c9fb38d7e15',
    'title' => __('Feedback topic', 'customer-feedback'),
    'fields' => array(
        0 => array(
            'key' => 'field_59c9fb9093d94',
            'label' => __('Feedback', 'customer-feedback'),
            'name' => 'topic_feedback_capability',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => __('Add feedback capability', 'customer-feedback'),
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'taxonomy',
                'operator' => '==',
                'value' => 'feedback_topic',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'seamless',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));
