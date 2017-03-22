<?php

namespace Modules\Core\Http\Controllers;

use App\Http\Controllers\Controller;

use Auth;
use Theme;

class FrontendController extends Controller
{

// 	use DispatchesJobs, ValidatesRequests;

    /**
     * Initializer.
     *
     * @return \CoreController
     */
    public function __construct()
    {
    }


    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function frontend()
    {
        return Theme::View('modules.core.frontend');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Theme::View('modules.core.landing');
    }


}
