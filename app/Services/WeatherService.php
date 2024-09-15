<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Torann\GeoIP\Facades\GeoIP;

class WeatherService implements WeatherServiceInterface
{
    private string $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.stormglass.api_key');
    }

    public function getWeather(string $ip): array
    {
        $location = GeoIP::getLocation(ip: $ip);
        return $this->getWeatherRequest(latitude: $location->lat, longitude: $location->lon);
    }

    public function getWeatherRequest($latitude, $longitude): array
    {
        $cacheKey = "weather:{$latitude},{$longitude}";
        return Cache::rememberForever($cacheKey, function () use ($latitude, $longitude) {
            $response = Http::withHeaders([
                'Authorization' => $this->apiKey,
            ])->get('https://api.stormglass.io/v2/weather/point', [
                'lat' => $latitude,
                'lng' => $longitude,
                'params' => 'airTemperature,cloudCover',
            ]);
            return $response->json();
        });
    }
}
