<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Media;

class MediaRepository
{
    public function delete(array $ids)
    {
        return Media::destroy($ids);
    }
}
