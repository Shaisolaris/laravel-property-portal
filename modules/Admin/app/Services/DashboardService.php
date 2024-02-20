<?php

namespace Modules\Admin\app\Services;

use App\Models\User;
use Illuminate\Support\Carbon;

class DashboardService
{
    public function widgetStatistics()
    {

        $usersNow = User::query()
            ->where('created_at', '>=', Carbon::now()->startOfMonth())
            ->count();
        $usersPrev = User::query()
            ->whereBetween('created_at', [Carbon::now()->subMonth()->startOfMonth(), Carbon::now()->subMonth()->endOfMonth()])
            ->count();


        return [
            'users' => [
                'value' => $usersNow,
                'diff' => $this->caclulateDiff($usersNow, $usersPrev),
            ],
            'earnings' => [
                'value' => 1045.14,
                'diff' => -12.8,
            ]
        ];
    }

    protected function caclulateDiff($now, $prev)
    {
        if(!$prev) {
            return 100;
        }

        return round((($now - $prev) / $prev) * 100, 2);

    }

}
