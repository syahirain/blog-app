<?php

namespace App\Filament\Authors\Resources\PostResource\Pages;

use App\Filament\Authors\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
}
