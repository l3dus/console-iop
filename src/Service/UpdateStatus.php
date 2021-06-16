<?php

namespace Interop\Console\Service;

class UpdateStatus
{
    public function execute($url) {


        $data = [
            'sessionID' => 'eyJhbGciOiJIUzUxMiJ9.eyJleHAiOjE2MjM4NTc0MDQsIm5hbWUiOiJMdWl6IEVkdWFyZG8gU291emEgQW1vcmltIGRvcyBTYW50b3MiLCJjb250cm9sIjoiN2IyMjY5NzAyMjNhMjIzMTMwMmUzMDJlMzkyZTMxMzEzMjIyMmMyMjY4NmY3Mzc0MjIzYTIyMzEzMDJlMzAyZTM5MmUzMTMxMzIyMjdkIiwiaXNzdWVkQXQiOjE2MjM4NTAyMDQ2NzMsImxvY2FsZSI6ImVuIiwiY2xpZW50X2lkIjoidW5rbm93biIsImV4cGlyZXNBdCI6MTYyMzg1NzQwNDY3MywidGltZW91dCI6NzIwMCwidXNlcm5hbWUiOiJEUE9BVEoxXFxsLmVzYW50b3MifQ.52_umEUUDKSMQAmhWmK3k2UbXmiy7VhV69csUFSAFwUiYjUe-9OT_TOQuJTbz24WP1h7A1uti1AVVA5VOsbULg',
            'number' => '112781',
            'synchronize' => true,
            'status' => [
                'code' => 'CLOSED',
                'details' => 'Chamado encerrado via API | Interop Console'
            ]
        ];

        $json = json_encode($data);

        $headers = [
            'Content-Type: application/json',
            'Accept: application/json'
        ];

        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => $headers,
                'content' => $json
            ],
        ]);

        $execute = file_get_contents($url, false, $context);

        return $json;
    }
}