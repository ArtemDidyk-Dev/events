<?php

declare(strict_types=1);

namespace App\Services;

interface WeatherServiceInterface
{
    public function getWeather(string $ip): array;

    public function getWeatherRequest($latitude, $longitude): array;
}
