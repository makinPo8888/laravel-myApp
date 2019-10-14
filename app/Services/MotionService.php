<?php

namespace App\Services;

use App\Repositorys\MotionRepository;

class MotionService {

    protected $motionRepository;

    public function __construct(MotionRepository $motionRepository)
    {
        $this->motionRepository = $motionRepository;
    }

    /**
     * Get Usable Motion.
     *
     * @return array
     */
    public function getUsableMotions(){
        return $this->motionRepository->getUsableMotions();
    }

    /**
     * Get All Motion.
     */
    public function getAllMotions(){
        return $this->motionRepository->findAll();
    }
}