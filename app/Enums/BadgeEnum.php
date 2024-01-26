<?php

namespace App\Enums;

enum BadgeEnum: string
{
    case BADGE_SECONDARY = 'badge bg-secondary-light';
    case BADGE_SUCCESS = 'badge bg-success-light';
    case BADGE_WARNING = 'badge bg-warning-light';
    case BADGE_DANGER = 'badge bg-danger-light';
    case BADGE_INFO = 'badge bg-info-light';
}
