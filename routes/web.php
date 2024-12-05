<?php

use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get(' ', function () {
    return redirect()->route('dashboard');
});

Route::view('coffee/dashboard', 'dashboard')->name('dashboard');
Route::view('coffee/slot', 'slot')->name('slot');
Route::view('coffee/feedbackForm', 'feedback/feedbackForm')->name('feedbackForm');
Route::view('/coffee/registerForm', 'registration/registerForm')->name('registerForm');
Route::view('/coffee/team-management', 'team-management')->name('team.management');
Route::view('/coffee/feedbackForm', 'feedback/feedbackForm')->name('feedbackForm');

Route::get('/qr-code', function () {
    $formUrl = route('feedbackForm'); 
    return view('feedback/feedbackQr', compact('formUrl'));
})->name('feedbackQr');
Route::get('coffee/viewFeedback', function () {
    $dummyFeedbackData = 
    [
        [
            'experienceRating' => 9,
            'enjoyedMost' => 'The keynote speech was very inspiring.',
            'improvements' => 'More seating options during the breakout sessions.',
            'issues' => 'The registration line was a bit too long.',
            'additionalFeedback' => 'Keep up the good work! Looking forward to the next event.'
        ],
        [
            'experienceRating' => 8,
            'enjoyedMost' => 'The networking sessions were very productive.',
            'improvements' => 'Better time management for the workshops.',
            'issues' => 'Some technical issues during the live-streaming sessions.',
            'additionalFeedback' => 'Consider adding a virtual option for remote attendees.'
        ],
        [
            'experienceRating' => 10,
            'enjoyedMost' => 'The food and refreshments were excellent!',
            'improvements' => 'Provide more detailed schedules beforehand.',
            'issues' => null,
            'additionalFeedback' => 'Amazing event! The team did a great job.'
        ],
        [
            'experienceRating' => 7,
            'enjoyedMost' => 'The panel discussion was very engaging.',
            'improvements' => 'Improve the sound system in the main hall.',
            'issues' => 'Difficulty finding parking at the venue.',
            'additionalFeedback' => 'Consider providing shuttle services next time.'
        ],
        [
            'experienceRating' => 6,
            'enjoyedMost' => 'The event venue was beautiful.',
            'improvements' => 'Increase the duration of the Q&A sessions.',
            'issues' => 'Some of the staff seemed unprepared.',
            'additionalFeedback' => 'Thank you for organizing this event!'
        ],
        [
            'experienceRating' => 8,
            'enjoyedMost' => 'The variety of speakers and topics was great.',
            'improvements' => 'Provide more charging stations for devices.',
            'issues' => 'Wi-Fi connectivity was inconsistent.',
            'additionalFeedback' => 'A very well-rounded experience overall.'
        ],
        [
            'experienceRating' => 10,
            'enjoyedMost' => 'The entertainment segment was a lot of fun!',
            'improvements' => 'Include more hands-on activities.',
            'issues' => null,
            'additionalFeedback' => 'Excellent organization and great ambiance!'
        ],
        [
            'experienceRating' => 5,
            'enjoyedMost' => 'The event was well-marketed.',
            'improvements' => 'More engaging activities for younger attendees.',
            'issues' => 'It felt overcrowded at times.',
            'additionalFeedback' => 'Thank you for considering our feedback!'
        ],
        [
            'experienceRating' => 9,
            'enjoyedMost' => 'The closing ceremony was very memorable.',
            'improvements' => 'Offer more diverse food options.',
            'issues' => null,
            'additionalFeedback' => 'I appreciated the personal touches during the event.'
        ],
        [
            'experienceRating' => 7,
            'enjoyedMost' => 'The organizers were very accommodating.',
            'improvements' => 'Extend the duration of each session slightly.',
            'issues' => 'The event app wasn’t very user-friendly.',
            'additionalFeedback' => 'Overall, a great experience!'
        ],        
    ];

    //Calculate total feedback
    $totalFeedback = count($dummyFeedbackData);

    //Calculate rating
    $totalActualRate = $totalFeedback * 10;
    $totalRating = 0;
    foreach ($dummyFeedbackData as $data) {
        $newRate = $data['experienceRating'];
        $totalRating += $newRate;
    }

    //Calculate percentage
    $percentage = ($totalRating/$totalActualRate) * 100;

    return view('feedback/viewFeedback', compact(
        'dummyFeedbackData',
        'totalFeedback',
        'percentage'
    ));
    
})->name('viewFeedback');



