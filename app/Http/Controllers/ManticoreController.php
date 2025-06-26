<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Repositories\Interfaces\IManticoreRepository;
use App\Services\LemmatizerService;

class ManticoreController extends Controller
{
    private $manticoreRepo;
    private $lemmatizerService;

    public function __construct(IManticoreRepository $manticoreRepo, LemmatizerService $lemmatizerService)
    {
        $this->manticoreRepo = $manticoreRepo;
        $this->lemmatizerService = $lemmatizerService;
    }

    /**
     * @unauthenticated
    * @queryParam query string Optional. Searching for blog titles and users nickname. Example: react 
     */
    public function autocomplete()
    {
        $query = request()->get('query', '');
        // $queryForBlogs = $this->lemmatizerService->lemmatize($query);
        $results = $this->manticoreRepo->autocomplete('posts', 'lemma_title', $query);
        return ResponseHelper::success($results);
    }
}