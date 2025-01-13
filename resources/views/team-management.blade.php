@extends('layouts.app')

@section('content')
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header team-Manage-card-header text-white d-flex justify-content-between align-items-center">
            <h5>Team Management</h5>
            <button class="btn btn-light btn-sm" id="add-department-btn" onclick="showDepartmentForm()">Add New Department</button>
        </div>
        <div class="card-body">
            <!-- Department Form -->
            <div id="department-form" style="display: none;">
                <form action="{{ route('team.management.addDepartment') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="department-name" class="form-label">Department Name</label>
                        <input type="text" class="form-control" id="department-name" name="department_name" required>
                    </div>
                    <!-- Team Members Section -->
                    <div id="team-members-section">
                        <div class="mb-3 team-member">
                            <label class="form-label">Team Member 1</label>
                            <input type="text" class="form-control" name="team-member[]" required>
                            <label class="form-label">Role</label>
                            <select class="form-select" name="role[]" required>
                                <option value="" disabled selected>Select Role</option>
                                <option value="HOD">HOD</option>
                                <option value="AHOD">AHOD</option>
                                <option value="Member">Member</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="add-member" onclick="addTeamMember()">Add Another Member</button>
                        <button type="submit" class="add-department">Add Department</button>
                        <button type="button" class="cancel" onclick="closeDepartmentForm()">Cancel</button>
                    </div>
                </form>
            </div>

            <!-- Display Added Departments -->
        <div id="department-display" class="mt-4">
            <h4>Departments:</h4>
            <div class="row" id="department-cards">
                @foreach ($departments as $department)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body position-relative">
                                <!-- Delete Button Positioned at Top-Right -->
                                <form action="{{ route('team.management.delete', $department->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this department?')" class="position-absolute" style="top: 10px; right: 10px;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                
                                <!-- Department Name -->
                                <h5 class="card-title">{{ $department->name }}</h5>

                                <!-- Team Members Table -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Team Member</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($department->teamMembers as $index => $member)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $member->name }}</td>
                                                <td>{{ $member->role }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </div>
</div>


<script>
    // JavaScript functions to handle the UI behavior
    function showDepartmentForm() {
        const form = document.getElementById('department-form');
        form.style.display = 'block';
        document.getElementById('add-department-btn').style.display = 'none';
        document.getElementById('team-members-section').innerHTML = `
            <div class="mb-3 team-member">
                <label class="form-label">Team Member 1</label>
                <input type="text" class="form-control" name="team-member[]" required>
                <label class="form-label">Role</label>
                <select class="form-select" name="role[]" required>
                    <option value="" disabled selected>Select Role</option>
                    <option value="HOD">HOD</option>
                    <option value="AHOD">AHOD</option>
                    <option value="Member">Member</option>
                </select>
            </div>
        `;
    }

    function closeDepartmentForm() {
        document.getElementById('department-form').style.display = 'none';
        document.getElementById('add-department-btn').style.display = 'block';
    }

    function addTeamMember() {
        const section = document.getElementById('team-members-section');
        const count = section.querySelectorAll('.team-member').length + 1;

        const newMember = document.createElement('div');
        newMember.className = 'mb-3 team-member';
        newMember.innerHTML = `
            <label class="form-label">Team Member ${count}</label>
            <input type="text" class="form-control" name="team-member[]" required>
            <label class="form-label">Role</label>
            <select class="form-select" name="role[]" required>
                <option value="" disabled selected>Select Role</option>
                <option value="HOD">HOD</option>
                <option value="AHOD">AHOD</option>
                <option value="Member">Member</option>
            </select>
        `;
        section.appendChild(newMember);
    }
</script>
@endsection
