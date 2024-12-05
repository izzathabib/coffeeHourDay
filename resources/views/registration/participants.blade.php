@extends('layouts.app')

@section('styles')
<style>
    .card-header h3 {
        color: #5B71FF;
        font-size: 1.3em;
        text-align: center;
    }

    .table th {
        background-color: #5B71FF;
        color: white;
    }

    .profile-badge {
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 0.85em;
        font-weight: bold;
    }

    .profile-student {
        background-color: #e3f2fd;
        color: #1565c0;
    }

    .profile-lecturer {
        background-color: #f3e5f5;
        color: #7b1fa2;
    }

    .profile-public {
        background-color: #e8f5e9;
        color: #2e7d32;
    }
</style>
@endsection

@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header bg-white mt-2">
            <h3>Registered Participants</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Profile</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($participants as $participant)
                        <tr>
                            <td>{{ $participant['name'] }}</td>
                            <td>
                                <span class="profile-badge profile-{{ $participant['profile'] }}">
                                    {{ ucfirst($participant['profile']) }}
                                </span>
                            </td>
                            <td>
                                @if($participant['profile'] === 'student')
                                    School: {{ $participant['school'] }}<br>
                                    Matric: {{ $participant['matric_num'] }}<br>
                                    Year: {{ $participant['year_of_study'] }}<br>
                                    Email: {{ $participant['email'] }}<br>
                                    Phone: {{ $participant['phoneNumber'] }}<br>
                                    Nationality: {{ $participant['nationality'] }}
                                @elseif($participant['profile'] === 'lecturer')
                                    School: {{ $participant['school'] }}<br>
                                    Staff ID: {{ $participant['staff_id'] }}<br>
                                    Email: {{ $participant['email'] }}<br>
                                    Phone: {{ $participant['phoneNumber'] }}
                                @else
                                    Email: {{ $participant['email'] }}<br>
                                    Phone: {{ $participant['phoneNumber'] }}
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection