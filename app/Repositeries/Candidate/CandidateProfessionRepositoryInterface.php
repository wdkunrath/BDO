<?php
namespace App\Repositories\Candidate;

use App\Infrastructure\Eloquent\Candidate\CandidateProfession;

interface CandidateProfessionRepositoryInterface{
   
    public function create(CandidateProfession $candidateProfession);
    public function remove($id);
    public function findOrNew($id);
    public function findByCandidate($idCandidate);
}