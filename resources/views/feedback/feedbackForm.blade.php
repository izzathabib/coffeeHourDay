@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Event Feedback Form</h3>
        </div>
        <div class="card-body">
            <form>
                <!-- Question 1 -->
                <div class="mb-4">
                    <label for="experienceRating" class="form-label">
                        How would you rate your overall experience at the event? (e.g., scale of 1-10)
                    </label>
                    <input type="number" class="form-control" id="experienceRating" name="experienceRating" min="1" max="10" placeholder="Enter a number between 1 and 10" required>
                </div>

                <!-- Question 2 -->
                <div class="mb-4">
                    <label for="enjoyedMost" class="form-label">
                        What did you enjoy most about the event?
                    </label>
                    <textarea class="form-control" id="enjoyedMost" name="enjoyedMost" rows="3" placeholder="Share your favorite aspects" required></textarea>
                </div>

                <!-- Question 3 -->
                <div class="mb-4">
                    <label for="improvements" class="form-label">
                        What could we improve for future events?
                    </label>
                    <textarea class="form-control" id="improvements" name="improvements" rows="3" placeholder="Let us know your suggestions" required></textarea>
                </div>

                <!-- Question 4 -->
                <div class="mb-4">
                    <label for="issues" class="form-label">
                        Were there any aspects of the event that didn’t work well for you?
                    </label>
                    <textarea class="form-control" id="issues" name="issues" rows="3" placeholder="Describe any challenges or issues"></textarea>
                </div>

                <!-- Question 5 -->
                <div class="mb-4">
                    <label for="additionalFeedback" class="form-label">
                        Any other feedback, suggestions, or comments?
                    </label>
                    <textarea class="form-control" id="additionalFeedback" name="additionalFeedback" rows="3" placeholder="We value your feedback!"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection