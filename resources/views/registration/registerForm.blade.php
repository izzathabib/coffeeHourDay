@extends('layouts.app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<style>
    .card-header h3 {

        color: #5B71FF;
        font-size: 1.3em;
        text-align: center;
    }

    .submit-button button {
        background-color: #5B71FF;
        color: white;
        border: 0px;
        border-radius: 0.5em;
        padding: 8px;
    }

    .form-label {
        font-weight: bold;
    }

    .required {
        color: red;
    }

    .event-details {
        text-align: justify;
        text-align-last: center;
    }
</style>
@endsection

@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header bg-white mt-2">
            <h3>International Cultural Fiesta (Night Registration)</h3>
        </div>
        <div class="card-body">
            <div class="event-details">
                <div class="detail-row">
                    <label>Time:</label>
                    <span>7:45 PM - 11:00 PM (MYT)</span>
                </div>
                <div class="detail-row">
                    <label>Date:</label>
                    <span>15th December 2023 (Friday)</span>
                </div>
                <div class="detail-row">
                    <label>Venue:</label>
                    <span>Dewan Tuanku Syed Putra, Universiti Sains Malaysia</span>
                </div>
            </div>

            <form>
                <!-- Full Name -->
                <div class="mb-4 mt-3">
                    <label for="fullName" class="form-label">Full Name <span class="required">*</span></label>
                    <small class="text-muted d-block">As per Identity Card or Passport.</small>
                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                </div>

                <!-- Phone Number -->
                <div class="mb-4">
                    <label for="phoneNumber" class="form-label">Phone Number <span class="required">*</span></label>
                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="form-label">Email <span class="required">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <!-- Profile -->
                <div class="mb-4">
                    <label class="form-label">Profile <span class="required">*</span></label>
                    <div class="profile-options">
                        <div class="form-check mb-2">
                            <input type="radio" class="form-check-input" name="profile" value="student" id="student"
                                required>
                            <label class="form-check-label" for="student">USM Student</label>
                        </div>
                        <div class="form-check mb-2">
                            <input type="radio" class="form-check-input" name="profile" value="lecturer" id="lecturer">
                            <label class="form-check-label" for="lecturer">USM Lecturer</label>
                        </div>
                        <div class="form-check mb-2">
                            <input type="radio" class="form-check-input" name="profile" value="public" id="public">
                            <label class="form-check-label" for="public">General Public</label>
                        </div>
                    </div>
                </div>

                <!-- Student Fields -->
                <div id="student_fields" class="mb-4" style="display: none;">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="matric_num" class="form-label">Matric Number <span
                                    class="required">*</span></label>
                            <input type="text" id="matric_num" name="matric_num" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="student_school" class="form-label">School <span
                                    class="required">*</span></label>
                            <!-- School list -->
                            <select class="form-select" id="student_school" name="student_school">
                                <option value="">Select Your School</option>
                                <option value="hbp">School of Housing, Building and Planning</option>
                                <option value="industrial">School of Industrial Technology</option>
                                <option value="pharmacy">School of Pharmaceutical Sciences</option>
                                <option value="computer">School of Computer Sciences</option>
                                <option value="education">School of Educational Sciences</option>
                                <option value="management">School of Management</option>
                                <option value="communication">School of Communication</option>
                                <option value="art">School of the Art</option>
                                <option value="languages">School of Languages, Literacies and Translation</option>
                                <option value="humanities">School of Humanities</option>
                                <option value="social">School of Social Sciences</option>
                                <option value="bio">School of Biological Sciences</option>
                                <option value="chem">School of Chemical Sciences</option>
                                <option value="math">School of Mathematical Sciences</option>
                                <option value="physics">School of Physics</option>
                                <option value="pjj">School of Distance Education</option>
                                <option value="ips">Institute of Postgraduate Studies</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col md-6 mb-3">
                        <label for="year_of_study" class="form-label">Year of Study <span
                                class="required">*</span></label>
                        <select class="form-select" id="year_of_study" name="year_of_study">
                            <option value="">Select Year of Study</option>
                            <option value="1">Year 1</option>
                            <option value="2">Year 2</option>
                            <option value="3">Year 3</option>
                            <option value="4">Year 4</option>
                        </select>
                    </div>
                    <div class="col md-6 mb-3">
                        <label for="stud_nation" class="form-label">Student Nationality <span
                                class="required">*</span></label>
                        <select class="form-select" id="stud_nation" name="stud_nation">
                            <option value="">Select Nationality of Student</option>
                            <option value="local">Local Student</option>
                            <option value="international">International Student</option>
                        </select>
                    </div>
                    </div>
                </div>

                <!-- Lecturer Fields -->
                <div id="lecturer_fields" class="mb-4" style="display: none;">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="staff_id" class="form-label">Staff Number <span
                                    class="required">*</span></label>
                            <input type="text" id="staff_id" name="staff_id" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lecturer_school" class="form-label">School <span
                                    class="required">*</span></label>
                            <!-- School list -->
                            <select class="form-select" id="lecturer_school" name="lecturer_school">
                                <option value="">Select your school</option>
                                <option value="hbp">School of Housing, Building and Planning</option>
                                <option value="industrial">School of Industrial Technology</option>
                                <option value="pharmacy">School of Pharmaceutical Sciences</option>
                                <option value="computer">School of Computer Sciences</option>
                                <option value="education">School of Educational Sciences</option>
                                <option value="management">School of Management</option>
                                <option value="communication">School of Communication</option>
                                <option value="art">School of the Art</option>
                                <option value="languages">School of Languages, Literacies and Translation</option>
                                <option value="humanities">School of Humanities</option>
                                <option value="social">School of Social Sciences</option>
                                <option value="bio">School of Biological Sciences</option>
                                <option value="chem">School of Chemical Sciences</option>
                                <option value="math">School of Mathematical Sciences</option>
                                <option value="physics">School of Physics</option>
                                <option value="pjj">School of Distance Education</option>
                                <option value="ips">Institute of Postgraduate Studies</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="d-grid submit-button">
                    <button type="submit" class="">Register Now</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const radioButtons = document.querySelectorAll('input[name="profile"]');
        const studentFields = document.getElementById('student_fields');
        const lecturerFields = document.getElementById('lecturer_fields');
        const form = document.querySelector('form');

        // Function to reset and hide all profile-specific fields
        function resetFields() {
            // Hide all fields
            studentFields.style.display = 'none';
            lecturerFields.style.display = 'none';

            // Reset form values
            studentFields.querySelectorAll('input, select').forEach(field => {
                field.value = '';
                field.required = false;
            });
            lecturerFields.querySelectorAll('input, select').forEach(field => {
                field.value = '';
                field.required = false;
            });
        }

        // Function to make fields required
        function makeFieldsRequired(container) {
            container.querySelectorAll('input, select').forEach(field => {
                field.required = true;
            });
        }

        radioButtons.forEach(radio => {
            radio.addEventListener('change', function () {
                resetFields(); // Reset all fields first

                if (this.value === 'student') {
                    studentFields.style.display = 'block';
                    makeFieldsRequired(studentFields);
                } else if (this.value === 'lecturer') {
                    lecturerFields.style.display = 'block';
                    makeFieldsRequired(lecturerFields);
                }
            });
        });

    // Modal for form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Check if form is valid
        if (!form.checkValidity()) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill in all required fields!',
                confirmButtonColor: '#5B71FF'
            });
            return;
        }

        // Show confirmation modal
        Swal.fire({
            title: 'Confirm Registration',
            text: 'Are you sure you want to register for the International Cultural Fiesta?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#5B71FF',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, register now!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // Show success message
                Swal.fire({
                    icon: 'success',
                    title: 'Registration Successful!',
                    text: 'Thank you for registering for the International Cultural Fiesta.',
                    confirmButtonColor: '#5B71FF'
                }).then(() => {
                    // Submit the form
                    window.location.href = "{{ route('participants.list') }}";
                });
            }
        });
    });
});
</script>
@endsection