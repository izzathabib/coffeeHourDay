@extends('layouts.app')
@section('styles')
    <style>
        .content {
            padding: 20px;
            margin-left: 0;
            transition: margin-left 0.3s ease;
        }
        .admin-status span {
            display: block;
        }
        .content.active {
            margin-left: 250px; 
        }
        
        .slot-box {
            display: inline-block;
            padding: 10px 15px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            color: white;
        }
        .slot-box2 {
            display: inline-block;
            padding: 10px 15px;
            margin: 15px;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            color: white;
        }
        .occupied-slot {
            background-color: red; /* Occupied slot */
            cursor: not-allowed;
        }
        .selected-slot {
            background-color: #28a745; /* Selected slot */
            color: white;
            
        }
        .available-slot {
            background-color: #817b7b; /* Available slot */
            color: white;
            
        }
        .reserved-slot {
            background-color: red; /* Reserved slot */
            color: white;            
        }
        .dropdown {
            display: none;
            
        }
        .dropdown.show {
            display: block;
        }
    </style>
@endsection

@section('content')
    <div class="flex-grow-1 p-4">
        <div class="container-fluid">
            <div class="row">
                <main role="main" class="col-md-11 ml-sm-auto col-lg-11 px-4 content"> 
                <div class="container" style="margin-top: 25px;">
                    <h2 class="text-center">Book Slot</h2>
                    <div class="card" style="margin-top: 20px;">
                        <div class="container mt-5">
                            <div class="mt-4 text-center">
                                <h3 style="margin-top: -47px;">Time Slot Selection</h3>
                                <p>15 December</p>
                                <style>
                                    .legend-spacing {
                                        margin-right: 3rem;
                                    }
                                </style>
                                <!-- Legend Section -->
                                <div class="d-flex justify-content-center mb-3">
                                    <div class="legend-spacing">
                                        <h6>Occupied Slot</h6>
                                        <span class="slot-box occupied-slot"></span>
                                    </div>
                                    <div class="legend-spacing">
                                        <h6>Selected Slot</h6>
                                        <span class="slot-box selected-slot"></span>
                                    </div>
                                    <div class="legend-spacing">
                                        <h6>Available Slot</h6>
                                        <span class="slot-box available-slot"></span>
                                    </div>
                                </div>
                                <!-- Time Slots -->
                                <div id="slots">
                                    <span class="slot-box available-slot" data-time="7:45 pm">7:45 pm</span>
                                    <span class="slot-box available-slot" data-time="8:00 pm">8:00 pm</span>
                                    <span class="slot-box available-slot" data-time="8:15 pm">8:15 pm</span>
                                    <span class="slot-box available-slot" data-time="8:30 pm">8:30 pm</span>
                                    <span class="slot-box available-slot" data-time="8:45 pm">8:45 pm</span>
                                    <span class="slot-box available-slot" data-time="9:00 pm">9:00 pm</span>
                                    <span class="slot-box available-slot" data-time="9:15 pm">9:15 pm</span>
                                    <span class="slot-box available-slot" data-time="9:30 pm">9:30 pm</span>
                                    <span class="slot-box available-slot" data-time="9:45 pm">9:45 pm</span>
                                    <span class="slot-box available-slot" data-time="10:00 pm">10:00 pm</span>
                                    <span class="slot-box available-slot" data-time="10:15 pm">10:15 pm</span>
                                    <span class="slot-box available-slot" data-time="10:30 pm">10:30 pm</span>
                                    <span class="slot-box available-slot" data-time="10:45 pm">10:45 pm</span>
                                    <span class="slot-box available-slot" data-time="11:00 pm">11:00 pm</span>
                                </div>
                                <!-- Dropdown -->
                                <div id="teamDropdown" class="dropdown mt-3">
                                    <select id="teamSelect" class="form-select">
                                        <option value="">Select Team Country</option>
                                        <option value="Korea">Korea</option>
                                        <option value="USA">United States of America</option>
                                        <option value="Indonesia">Indonesia</option>
                                    </select>
                                    <button id="reserveBtn" class="btn btn-primary mt-3" disabled>Reserve</button>
                                </div>
                                <!-- Add New Team Country -->
                                <div class="mt-4">
                                    <h5>Add New Team Country</h5>
                                    <input id="newTeamInput" type="text" class="form-control mb-2" placeholder="Enter new team country">
                                    <button id="addTeamBtn" class="btn btn-success">Add to List</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" style="margin-top: 25px;">
                    <div class="card" style="margin-top: 10px;">
                        <div class="container mt-5">
                            <div class="mt-4 text-center">
                                <h3 style="margin-top: -47px;">Booth Slot Selection</h3>
                                <p>15 December</p>
                                <style>
                                    .legend-spacing {
                                        margin-right: 3rem; 
                                    }
                                </style>
                                <img src="https://www.iauga2022.org/sponsorship/images/bexco.jpg" alt="Icon" style="vertical-align: middle; width: 600px; margin-bottom: 20px;">
                                <!-- Legend Section -->
                                <div class="d-flex justify-content-center mb-3">
                                    <div class="legend-spacing">
                                        <h6>Occupied Slot</h6>
                                        <span class="slot-box occupied-slot"></span>
                                    </div>
                                    <div class="legend-spacing">
                                        <h6>Selected Slot</h6>
                                        <span class="slot-box selected-slot"></span>
                                    </div>
                                    <div class="legend-spacing">
                                        <h6>Available Slot</h6>
                                        <span class="slot-box available-slot"></span>
                                    </div>
                                </div>
                                <!-- Booth Slots -->
                                <div id="slots2">
                                    <span class="slot-box2 available-slot" data-team="01">01</span>
                                    <span class="slot-box2 available-slot" data-team="02">02</span>
                                    <span class="slot-box2 available-slot" data-team="03">03</span>
                                    <span class="slot-box2 available-slot" data-team="04">04</span>
                                    <span class="slot-box2 available-slot" data-team="05">05</span>
                                    <span class="slot-box2 available-slot" data-team="06">06</span>
                                    <span class="slot-box2 available-slot" data-team="07">07</span>
                                    <span class="slot-box2 available-slot" data-team="08">08</span>
                                    <span class="slot-box2 available-slot" data-team="09">09</span>
                                    <span class="slot-box2 available-slot" data-team="10">10</span>
                                    <span class="slot-box2 available-slot" data-team="11">11</span>
                                    <span class="slot-box2 available-slot" data-team="12">12</span>
                                    <span class="slot-box2 available-slot" data-team="13">13</span>
                                    <span class="slot-box2 available-slot" data-team="14">14</span>
                                    <span class="slot-box2 available-slot" data-team="15">15</span>
                                    <span class="slot-box2 available-slot" data-team="16">16</span>
                                    <span class="slot-box2 available-slot" data-team="17">17</span>
                                    <span class="slot-box2 available-slot" data-team="18">18</span>
                                    <span class="slot-box2 available-slot" data-team="19">19</span>
                                    <span class="slot-box2 available-slot" data-team="20">20</span>
                                    <span class="slot-box2 available-slot" data-team="21">21</span>
                                </div>
                                <!-- Dropdown -->
                                <div id="teamDropdown2" class="dropdown mt-3">
                                    <select id="teamSelect2" class="form-select">
                                        <option value="">Select Team Country</option>
                                        <option value="Korea">Korea</option>
                                        <option value="USA">United States of America</option>
                                        <option value="Indonesia">Indonesia</option>
                                    </select>
                                    <button id="reserveBtn2" class="btn btn-primary mt-3" disabled>Reserve</button>
                                </div>
                                <!-- Add New Team Country -->
                                <div class="mt-4">
                                    <h5>Add New Team Country</h5>
                                    <input id="newTeamInput2" type="text" class="form-control mb-2" placeholder="Enter new team country">
                                    <button id="addTeamBtn2" class="btn btn-success">Add to List</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <script>
        // Dropdown for slots
        const slots = document.querySelectorAll(".slot-box");
        const reserveBtn = document.getElementById("reserveBtn");
        const teamSelect = document.getElementById("teamSelect");
        const teamDropdown = document.getElementById("teamDropdown");
        let selectedSlot = null;
        slots.forEach(slot => {
        slot.addEventListener("click", () => {
        if (slot.classList.contains("occupied-slot")) {
            return;
        }
        if (selectedSlot) {
            selectedSlot.classList.remove("selected-slot");
            selectedSlot.classList.add("available-slot");
        }
        slot.classList.remove("available-slot");
        slot.classList.add("selected-slot");
        selectedSlot = slot;
        teamDropdown.classList.add("show");
        reserveBtn.disabled = true;
        teamSelect.value = "";
        });
        });
        teamSelect.addEventListener("change", () => {
        reserveBtn.disabled = !teamSelect.value;
        });
        reserveBtn.addEventListener("click", () => {
        const selectedTeam = teamSelect.value;
        if (!selectedTeam || !selectedSlot) {
        alert("Please select a team and a time slot.");
        return;
        }
        selectedSlot.textContent = `${selectedSlot.dataset.time} - ${selectedTeam}`;
        selectedSlot.classList.remove("selected-slot");
        selectedSlot.classList.add("occupied-slot");
        selectedSlot = null;
        teamDropdown.classList.remove("show");
        reserveBtn.disabled = true;
        });
        // Dropdown for slots 2
        const slots2 = document.querySelectorAll(".slot-box2");
        const reserveBtn2 = document.getElementById("reserveBtn2");
        const teamSelect2 = document.getElementById("teamSelect2");
        const teamDropdown2 = document.getElementById("teamDropdown2");
        let selectedSlot2 = null;

        slots2.forEach(slot => {
        slot.addEventListener("click", () => {
        if (slot.classList.contains("occupied-slot")) {
            return; // Skip if the slot is already occupied
        }
        if (selectedSlot2) {
            selectedSlot2.classList.remove("selected-slot");
            selectedSlot2.classList.add("available-slot");
        }
        slot.classList.remove("available-slot");
        slot.classList.add("selected-slot");
        selectedSlot2 = slot; // Assign the clicked slot correctly
        teamDropdown2.classList.add("show");
        reserveBtn2.disabled = true;
        teamSelect2.value = "";
        });
        });

        teamSelect2.addEventListener("change", () => {
        reserveBtn2.disabled = !teamSelect2.value; 
        });

        reserveBtn2.addEventListener("click", () => {
        const selectedTeam = teamSelect2.value;
        if (!selectedTeam || !selectedSlot2) {
            alert("Please select a team and a time slot.");
         return;
        }
        selectedSlot2.textContent = `${selectedSlot2.dataset.team} - ${selectedTeam}`;
        selectedSlot2.classList.remove("selected-slot");
        selectedSlot2.classList.add("occupied-slot");
        selectedSlot2 = null; 
        teamDropdown2.classList.remove("show");
        reserveBtn2.disabled = true;
        });
        // Add list for slots
        const addTeamBtn = document.getElementById("addTeamBtn");
        const newTeamInput = document.getElementById("newTeamInput");
        addTeamBtn.addEventListener("click", () => {
        const newTeam = newTeamInput.value.trim();
        if (newTeam) {
            const newOption = document.createElement("option");
            newOption.value = newTeam;
            newOption.textContent = newTeam;
            teamSelect.appendChild(newOption);
            newTeamInput.value = "";

            alert(`"${newTeam}" has been added to the team list.`);
        } else {
            alert("Please enter a valid team country name.");
        }
        });
        // Add list for slots 2
        const addTeamBtn2 = document.getElementById("addTeamBtn2");
        const newTeamInput2 = document.getElementById("newTeamInput2");
        addTeamBtn2.addEventListener("click", () => {
        const newTeam = newTeamInput2.value.trim();
        if (newTeam) {
            const newOption = document.createElement("option");
            newOption.value = newTeam;
            newOption.textContent = newTeam;
            teamSelect2.appendChild(newOption);
            newTeamInput2.value = "";

            alert(`"${newTeam}" has been added to the team list.`);
        } else {
            alert("Please enter a valid team country name.");
        }
        });
    </script>
@endsection