add_action('rest_api_init', function () {
    register_rest_route('vsplave/v1', '/get-one-date-count/(?P<id>\d+)/(?P<date>[A-Za-z0-9\-]+)/(?P<time>[0-9\:]+)',
        array(
            'methods' => 'GET',
            'callback' => 'return_one_date_count',
            'args' => array(
                'id' => array(
                    'type' => 'integer'
                ),
                'date' => array(
                    'type' => 'string'
                ),
                'time' => array(
                    'type' => 'string'
                )
            )
        )
    );
});
 
add_action('rest_api_init', function () {
    register_rest_route('vsplave/v1', '/check-avail/',
        array(
            'methods' => 'POST',
            'callback' => 'return_one_date_count',
            'args' => array(
                'date' => array(
                    'type' => 'string'
                )
            )
        )
    );
 
});
