<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Facades\Auth;

class UserChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    protected static ?int $sort = 3;
    protected function getData(): array
    {
        [$users, $months] = $this->getUsersPerMonth();
        return [
            'datasets' => [
                [
                    'label' => 'Total Users',
                    'data' => $users,
                ],
            ],
            'labels' => $months,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getUsersPerMonth(): array
    {
        $data = Trend::query(User::query()->where('id', '<>', Auth::id()))
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            $data->map(fn (TrendValue $value) => $value->aggregate),
            $data->map(fn (TrendValue $value) => now()->rawParse($value->date)->format('M')),
        ];
    }
}