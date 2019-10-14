<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MotionService as MotionService;

class MotionController extends Controller
{
    protected $motionService;

    public function __construct(MotionService $motionService)
    {
        $this->motionService = $motionService;
    }

    // 一覧
    public function index(){
        $motions = $this->motionService->getAllMotions();

        return view('motion/index',compact('motions'));
    }

    // 編集
    public function edit(){
        $motions = $this->motionService->getUsableMotions();
    }
}
