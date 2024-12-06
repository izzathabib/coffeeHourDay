@extends('feedback.layouts.form')

@section('form_qr')

<div class="card">
    <div class="card-header bg-white mt-2 text-center">
        <h3>Coffee Hour Day Feedback Form</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('feedbackSubmit') }}" method="POST">
            @csrf
            <!-- Question 1 -->
            <div class="mb-4">
                <label for="experienceRating" class="form-label">
                    How would you rate your overall experience at the event? (e.g., scale of 1-10)
                </label>
                <input type="number" class="form-control @error('experienceRating') is-invalid @enderror" id="experienceRating" name="experienceRating" min="1" max="10" placeholder="Enter a number between 1 and 10" value="{{ old('experienceRating') }}" required>
                @error('experienceRating')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Question 2 -->
            <div class="mb-4">
                <label for="enjoyedMost" class="form-label">
                    What did you enjoy most about the event?
                </label>
                <textarea class="form-control @error('enjoyedMost') is-invalid @enderror" id="enjoyedMost" name="enjoyedMost" rows="3" placeholder="Share your favorite aspects" required>{{ old('enjoyedMost') }}</textarea>
                @error('enjoyedMost')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Question 3 -->
            <div class="mb-4">
                <label for="improvements" class="form-label">
                    What could we improve for future events?
                </label>
                <textarea class="form-control @error('improvements') is-invalid @enderror" id="improvements" name="improvements" rows="3" placeholder="Let us know your suggestions" required>{{ old('improvements') }}</textarea>
                @error('improvements')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Question 4 -->
            <div class="mb-4">
                <label for="issues" class="form-label">
                    Were there any aspects of the event that didn’t work well for you?
                </label>
                <textarea class="form-control @error('issues') is-invalid @enderror" id="issues" name="issues" rows="3" placeholder="Describe any challenges or issues">{{ old('issues') }}</textarea>
                @error('issues')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Question 5 -->
            <div class="mb-4">
                <label for="additionalFeedback" class="form-label">
                    Any other feedback, suggestions, or comments?
                </label>
                <textarea class="form-control @error('additionalFeedback') is-invalid @enderror" id="additionalFeedback" name="additionalFeedback" rows="3" placeholder="We value your feedback!">{{ old('additionalFeedback') }}</textarea>
                @error('additionalFeedback')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="d-grid submit-button">
                <button type="submit" class="">Submit Feedback</button>
            </div>
        </form>
    </div>
</div>

@endsection