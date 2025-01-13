<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamManagementController extends Controller
{
    // Show the team management page
    public function index()
    {
        // Fetch departments and their related team members
        $departments = Department::with('teamMembers')->get();
        return view('team-management', compact('departments'));
    }

    public function deleteDepartment($id)
    {
    $department = Department::findOrFail($id);
    $department->delete();
    return redirect()->route('team.management')->with('success', 'Department deleted successfully!');
    }

    // Handle the logic for adding a department
    public function addDepartment(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'department_name' => 'required|string|max:255',
            'team-member' => 'required|array', // The field name should match your form
            'team-member.*' => 'required|string|max:255',
            'role' => 'required|array',
            'role.*' => 'required|string|max:50',
        ]);

        // Create the department
        $department = Department::create([
            'name' => $validated['department_name'],
        ]);

        // Create the team members and associate them with the department
        for ($i = 0; $i < count($validated['team-member']); $i++) {
            $department->teamMembers()->create([
                'name' => $validated['team-member'][$i],
                'role' => $validated['role'][$i],
            ]);
        }

        return redirect()->route('team.management')->with('success', 'Department and team members added successfully!');
    }
}