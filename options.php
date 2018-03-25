<?php if (!defined('FW')) die('Forbidden');
$options = array(
    'title' => array(
        'label' => __('Title', 'ust'),
        'type' => 'text'
    ),

    'subtitle' => array(
        'label' => __('Subtitle text', 'ust'),
        'type' => 'textarea'
    ),

    'background_image' => array(
        'label' => __('Background image', 'ust'),
        'type' => 'upload',
        'images_only' => true,
    ),

    'overlay' => array(
        'type' => 'rgba-color-picker',
        'value' => 'rgba(0, 0, 0, .5)',
        'label' => __('Overlay color', 'ust'),
        'desc' => __('Add overlay color', 'ust'),
    ),

    'counters' => array(
        'type' => 'addable-popup',
        'label' => __('Counter Item', 'ust'),
        'desc' => __('Please add 3 counter items', 'ust'),
        'template' => '{{=counter_description }}',
        'popup-title' => null,
        'size' => 'small',
        'limit' => 3,
        'add-button-text' => __('Add', 'ust'),
        'sortable' => true,
        'popup-options' => array(
            'counter_value' => array(
                'type' => 'text',
                'label' => __('Counter value', 'ust'),
            ),

            'counter_description' => array(
                'type' => 'textarea',
                'label' => __('Counter description', 'ust'),
            ),
        )
    )
);