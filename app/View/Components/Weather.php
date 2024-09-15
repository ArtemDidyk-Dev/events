<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Services\WeatherServiceInterface;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;

final class Weather extends Component
{
    public array $weatherData;

    public function __construct(
        private readonly WeatherServiceInterface $weatherService
    ) {
        $this->weatherData = $this->fetchWeatherData();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.weather');
    }

    private function fetchWeatherData(): array
    {
        $weather = $this->weatherService->getWeather(Request::ip());

        return [
            'airTemperature' => $weather['hours'][0]['airTemperature']['noaa'] ?? 'N/A',
            'cloudiness' => $weather['hours'][0]['cloudCover']['noaa'] ?? 'N/A',
        ];
    }
}
