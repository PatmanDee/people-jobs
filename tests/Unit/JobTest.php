<?php

use App\Models\Job;
use App\Models\Employer;

it('belongs to an employer', function () {

    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    //Act
    $job->refresh();

    //Assert
    expect($job->employer)->is($employer)->toBeTrue();

    //Arrange
    $job = Job::factory()->create();

    //Act
    $job->tag('Laravel');

    //Assert
    expect($job->tags)->toHaveCount(1);
});
