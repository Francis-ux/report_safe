<?php

namespace App\Enum;

enum ReportStatus: string
{
    case Open = 'Open';
    case InReview = 'In Review';
    case Resolved = 'Resolved';
    case Closed = 'Closed';
}
