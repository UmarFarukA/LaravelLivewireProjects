<?php

namespace App\Policies;

use App\Models\Employer;
use App\Models\JobListing;
use App\Models\User;

class JobListingPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //

    }

    public function modify(Employer $employer, JobListing $job)
    {
        return $employer->id === $job->employer_id;
    }
}
