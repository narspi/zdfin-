<?php
show_admin_bar(false);

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

function zdfinance_assets()
{
    wp_enqueue_style('global-page-styles', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    wp_enqueue_script('global-page-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'zdfinance_assets');

add_action('wp_ajax_send_form', 'send_data_to_bitrix');
add_action('wp_ajax_nopriv_send_form', 'send_data_to_bitrix');

function send_data_to_bitrix()
{
    if ($_SERVER['REQUEST_METHOD'] !== 'POST')
    {
        wp_die('Invalid request');
    }

    $form_name = sanitize_text_field($_POST['title'] ?? 'Форма с сайта');
    $name = sanitize_text_field($_POST['name'] ?? '');
    $surname = sanitize_text_field($_POST['surname'] ?? '');
    $tel = preg_replace('/\D+/', '', $_POST['tel'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name))
    {
        wp_send_json_error(['message' => 'Имя обязательно']);
    }

    if (empty($tel) || strlen($tel) < 10)
    {
        wp_send_json_error(['message' => 'Некорректный номер телефона']);
    }

    if (!is_email($email))
    {
        wp_send_json_error(['message' => 'Некорректный email']);
    }


    // Вебхук Bitrix24
    // $webhook_url = 'https://bpk55.bitrix24.ru/rest/42/r1qsaosq59aab8ae/crm.deal.add.json';

    // $data = [
    //     'fields' => [
    //         'TITLE' => 'Заявка на обратный звонок',
    //         'NAME' => $name,
    //         'EMAIL' => [['VALUE' => $email, 'VALUE_TYPE' => 'WORK']],
    //         'SOURCE_ID' => 'WEB',
    //     ],
    //     'params' => ['REGISTER_SONET_EVENT' => 'Y']
    // ];

    // $response = wp_remote_post($webhook_url, [
    //     'body' => json_encode($data),
    //     'headers' => [
    //         'Content-Type' => 'application/json'
    //     ],
    //     'method' => 'POST',
    //     'data_format' => 'body',
    // ]);


    die;
}