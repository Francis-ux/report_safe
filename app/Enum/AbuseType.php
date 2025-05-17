<?php

namespace App\Enum;

enum AbuseType: string
{
    case Physical = 'Physical';
    case Emotional = 'Emotional';
    case Sexual = 'Sexual';
    case Neglect = 'Neglect';
    case Other = 'Other';
}
