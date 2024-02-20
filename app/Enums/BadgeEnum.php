<?php

namespace App\Enums;

enum BadgeEnum: string
{
    case BADGE_SECONDARY = 'secondary-light';
    case BADGE_SUCCESS = 'light-steel-blue';
    case BADGE_WARNING = 'light-yellow';
    case BADGE_DANGER = 'danger-light';
    case BADGE_INFO = 'info-light';
}
