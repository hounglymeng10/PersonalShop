<?php

namespace App\Services;

use GuzzleHttp\Client;

class TelegramService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function sendMessage($message)
    {
        $botToken = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');
        $url = "https://api.telegram.org/bot{$botToken}/sendMessage";

        $this->client->post($url, [
            'form_params' => [
                'chat_id' => $chatId,
                'text' => $message,
            ],
        ]);
    }
}
