<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showParticipants()
    {
        // Dummy data
        $participants = [
            [
                'name' => 'Arif Aiman',
                'profile' => 'student',
                'school' => 'School of Computer Sciences',
                'matric_num' => '145123',
                'email' => 'arif12@student.usm.my',
                'phoneNumber' => '+6011-1234 5678',
                'year_of_study' => '2',
                'nationality' => 'Local Student'
            ],
            [
                'name' => 'Ahmad Sarifudin',
                'profile' => 'lecturer',
                'school' => 'School of Management',
                'staff_id' => 'AA123',
                'email' => 'sarifudin@usm.my',
                'phoneNumber' => '+6011-1234 5678'
            ],
            [
                'name' => 'Cheryl Han',
                'profile' => 'student',
                'school' => 'School of Physics',
                'matric_num' => '123456',
                'email' => 'cherylh@student.usm.my',
                'phoneNumber' => '+6011-1234 5678',
                'year_of_study' => '3',
                'nationality' => 'Local Student'
            ],
            [
                'name' => 'Mary Watkins',
                'profile' => 'public',
                'email' => 'mary_w@gmail.com',
                'phoneNumber' => '+6011-1234 5678'
            ]
        ];

        return view('registration/participants', compact('participants'));
    }
}