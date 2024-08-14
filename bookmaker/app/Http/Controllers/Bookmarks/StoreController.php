<?php

declare(strict_types=1);

namespace App\Http\Controllers\Bookmarks;

use App\Actions\Bookmarks\CreateBookmarkAndTags;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Bookmarks\StoreRequest;

class StoreController extends Controller
{
    public function __construct(
        protected CreateBookmarkAndTags $action,
    ) {
    }

    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $this->action->handle(
            request: $request->all(),
            id: auth()->id(),
        );

        return redirect()->route('dashboard');
    }
}
