<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Articles', Article::count())
                ->description('All articles in system')
                ->color('success'),
            Stat::make('Published Articles', Article::where('is_published', true)->count())
                ->description('Currently published')
                ->color('success'),
            Stat::make('Categories', Category::count())
                ->description('Article categories')
                ->color('info'),
            Stat::make('Users', User::count())
                ->description('System users')
                ->color('warning'),
        ];
    }
}