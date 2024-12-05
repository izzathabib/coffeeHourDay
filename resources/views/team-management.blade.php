@extends('layouts.app')

@section('content')
    
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header team-Manage-card-header text-white d-flex justify-content-between align-items-center">
            <h5>Team Management</h5>
            <button class="btn btn-light btn-sm" id="add-department-btn" onclick="showDepartmentForm()">Add New Department</button>
        </div>
        <div class="card-body">
            <!-- Department Form (Initially Hidden) -->
            <div id="department-form" style="display: none;">
                <form id="department-form-element">
                    <div class="mb-3">
                        <label for="department-name" class="form-label">Department Name</label>
                        <input type="text" class="form-control" id="department-name" required>
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
                        <button type="button" class="add-department" onclick="addDepartment()">Add Department</button>
                        <button type="button" class="cancel" onclick="closeDepartmentForm()">Cancel</button>
                    </div>
                </form>
            </div>

            <!-- Display Added Departments -->
            <div id="department-display" class="mt-4">
                <h4>Departments:</h4>
                <div class="row" id="department-cards">
                    <!-- Department Cards Will Be Added Here Dynamically -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript functions (retain your existing code with minor updates)
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

    function addDepartment() {
        const departmentName = document.getElementById('department-name').value;
        const members = document.querySelectorAll('input[name="team-member[]"]');
        const roles = document.querySelectorAll('select[name="role[]"]');

        if (!departmentName.trim()) {
            alert('Please enter a department name.');
            return;
        }

        for (let i = 0; i < members.length; i++) {
            if (!members[i].value.trim()) {
                alert(`Please enter a name for Team Member ${i + 1}.`);
                return;
            }
            if (!roles[i].value) {
                alert(`Please select a role for Team Member ${i + 1}.`);
                return;
            }
        }

        const departmentCard = document.createElement('div');
        departmentCard.className = 'col-md-4 mb-3';
        let teamList = '';
        for (let i = 0; i < members.length; i++) {
            teamList += `<tr>
                <td>${i + 1}</td>
                <td>${members[i].value}</td>
                <td>${roles[i].value}</td>
            </tr>`;
        }

        departmentCard.innerHTML = `
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">${departmentName}</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Team Member</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${teamList}
                        </tbody>
                    </table>
                </div>
            </div>
        `;
        document.getElementById('department-cards').appendChild(departmentCard);
        closeDepartmentForm();
    }
</script>
@endsection
