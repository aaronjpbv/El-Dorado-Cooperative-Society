<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function show($slug)
    {
        $members = [
            'suresh-lagan' => [
                'name' => 'Suresh Lagan',
                'position' => 'Chairman, Board of Directors',
                'image' => 'suresh-lagan.jpg',
                'bio' => '
                    <p><strong>Business Consultant</strong></p>
                    <p>Specialize in Business Administration, Human Resources and Macro-Management.</p>
                    <h3 class="font-bold mt-4 mb-2">Previous Experience</h3>
                    <ul class="list-disc pl-5">
                        <li>Procurement officer in a large food distribution chain in the UK (2 years)</li>
                        <li>Retail Business Manager in the Food Industry</li>
                    </ul>
                '
            ],
            'anthony-ramsahai' => [
                'name' => 'Anthony Ramsahai',
                'position' => 'Vice-Chairman, Board of Directors',
                'image' => 'anthony-ramsahai.jpg',
                'bio' => '
                    <p><strong>Ministry of National Security – Prison Services</strong></p>
                    <p>Professional Counselor</p>
                    <p>SUATT certified in aspects of National Security<br>
                    Human Resources Counseling, Management, and Staff Development<br>
                    Participated in several training programs both locally & abroad<br>
                    Community Business Owner</p>
                    <h3 class="font-bold mt-4 mb-2">Other Activities</h3>
                    <ul class="list-disc pl-5">
                        <li>Past Secretary to the Board El Dorado Cooperative</li>
                        <li>El Dorado Village Council</li>
                        <li>El Dorado Shiv Mandir</li>
                        <li>El Dorado Cricket Club</li>
                        <li>Past Director Rotary Club of Piarco</li>
                    </ul>
                    <h3 class="font-bold mt-4 mb-2">Qualifications</h3>
                    <p>BSc Social Work (UWI)</p>
                '
            ],
            // We will add the rest of the members next
        ];

        if (!isset($members[$slug])) {
            abort(404);
        }

        $member = $members[$slug];

        return view('board.show', compact('member'));
    }
} 