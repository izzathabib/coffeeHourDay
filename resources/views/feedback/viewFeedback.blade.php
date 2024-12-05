@extends('layouts.app')
@section('styles')
  <style>
    
  </style>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <h4 class="pageTitle">Feedback</h4>
            
        </div>
    </div>

    <div class="row statistic">
           
        <div class="card col-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <h1 class="statisticNum">{{$totalFeedback}}</h1>
                        <p class="totalFeedbackWord">Total Feedbacks</p>
                    </div>
                    <div class="col-4">
                    <svg class="totalFeedbackIcon" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M10.75 14A2.25 2.25 0 0 1 13 16.25v1.502l-.008.108c-.31 2.127-2.22 3.149-5.425 3.149-3.193 0-5.134-1.01-5.553-3.112L2 17.75v-1.5A2.25 2.25 0 0 1 4.25 14h6.5Zm0 1.5h-6.5a.75.75 0 0 0-.75.75v1.42c.28 1.2 1.55 1.839 4.067 1.839 2.516 0 3.73-.631 3.933-1.816V16.25a.75.75 0 0 0-.75-.75ZM7.5 6a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm12.25-4A2.25 2.25 0 0 1 22 4.25v3.5A2.25 2.25 0 0 1 19.75 10h-1.455l-2.166 2.141A1.25 1.25 0 0 1 14 11.253V9.986a2.25 2.25 0 0 1-2-2.236v-3.5A2.25 2.25 0 0 1 14.25 2h5.5ZM7.5 7.5a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12.25-4h-5.5a.75.75 0 0 0-.75.75v3.5c0 .414.336.75.75.75h1.249v2.154L17.68 8.5h2.071a.75.75 0 0 0 .75-.75v-3.5a.75.75 0 0 0-.75-.75Z" fill="#5b71ff" class="fill-212121"></path></svg>
                    </div>
                </div>
                
                
            </div>
        </div>
        <div class="card col-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <h1 class="statisticNum">{{$percentage}}%</h1>
                        <p class="totalFeedbackWord">Satisfying Rates</p>
                    </div>
                    <div class="col-4">
                    <svg class="rateIcon" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 128 128"><path d="M86.5 114.1c-.5 2.9-3 4.9-5.9 4.9H34v8h46.6c6.8 0 12.6-4.9 13.8-11.5l6.4-36c.7-4.1-.4-8.3-3-11.4-2.7-3.2-6.6-5-10.7-5H71.2c1.2-3.7 2.8-9.1 4.1-16.2l.6-4.2c.9-6.6-3.7-12.6-10.2-13.5-3.2-.4-6.3.4-8.9 2.3-2.6 1.9-4.2 4.8-4.7 7.9l-.6 4c-.1.5-.2 1-.2 1.5l-.3 1.5C47.9 61 36.3 72.8 21.3 76.6L16 77.9V127h8V84.1c17.5-4.7 31.2-18.7 34.9-36 .1-.6.2-1.2.4-1.8l.3-1.8.6-4c.1-1.1.7-2 1.6-2.6.9-.6 1.9-.9 3-.8 2.2.3 3.7 2.3 3.4 4.5l-.5 3.9c-2.1 11.6-5 18.3-5.5 19.6l-.3.8v5.2h25.5c1.8 0 3.5.8 4.6 2.1 1.1 1.4 1.6 3.2 1.3 4.9l-6.8 36z" fill="#5b71ff" class="fill-000000"></path></svg>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <div class="row feedback">
        
        <div class="card col-12">
            
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h6 class="enjoyment">Enjoyment</h6>
                        <p class="feedbackQuestion">What did you enjoy most about the event?</p>
                        @foreach ($dummyFeedbackData  as $data)
                            <div class="card feedbackCard">
                                <div class="card-body">
                                    <p>{{$data['enjoyedMost']}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col">
                        <h6 class="isseus">Issues</h6>
                        <p class="feedbackQuestion">Were there any aspects of the event that didn’t work well for you?</p>
                        @foreach ($dummyFeedbackData  as $data)
                            @if ($data['issues'] != null)
                            <div class="card feedbackCard">
                                <div class="card-body">
                                    <p>{{$data['issues']}}</p>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col">
                        <h6 class="improvement">Improvement</h6>
                        <p class="feedbackQuestion">What could we improve for future events?</p>
                        @foreach ($dummyFeedbackData  as $data)
                            <div class="card feedbackCard">
                                <div class="card-body">
                                    <p>{{$data['improvements']}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col">
                        <h6 class="others">Others</h6>
                        <p class="feedbackQuestion">Any other feedback, suggestions, or comments?</p>
                        @foreach ($dummyFeedbackData  as $data)
                            <div class="card feedbackCard">
                                <div class="card-body">
                                    <p>{{$data['additionalFeedback']}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>  
    </div>
@endsection