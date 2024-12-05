@extends('feedback.layouts.form')
@section('form_qr')
<div class="text-center card fullQrCard">
    <div class="card-body">
    <svg class="qrIcon" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">><g id="Layer_1"/><g id="Layer_2"><g><path d="M17,3h-1c-0.6,0-1,0.4-1,1s0.4,1,1,1h1c1.1,0,2,0.9,2,2v1.1c0,0.6,0.4,1,1,1s1-0.4,1-1V7C21,4.8,19.2,3,17,3z"/><path d="M20,15c-0.6,0-1,0.4-1,1v1c0,1.1-0.9,2-2,2h-1c-0.6,0-1,0.4-1,1s0.4,1,1,1h1c2.2,0,4-1.8,4-4v-1C21,15.4,20.6,15,20,15z"/><path d="M8,19H7c-1.1,0-2-0.9-2-2v-1c0-0.6-0.4-1-1-1s-1,0.4-1,1v1c0,2.2,1.8,4,4,4h1c0.6,0,1-0.4,1-1S8.6,19,8,19z"/><path d="M4,9c0.6,0,1-0.4,1-1V7c0-1.1,0.9-2,2-2h1c0.6,0,1-0.4,1-1S8.6,3,8,3H7C4.8,3,3,4.8,3,7v1C3,8.5,3.4,9,4,9z"/><path d="M20,11H4c-0.6,0-1,0.4-1,1s0.4,1,1,1h16c0.6,0,1-0.4,1-1S20.6,11,20,11z"/></g></g></svg>
    <h2>Scan QR Code</h2>
    <p class="qrText">Scan this QR code to give feedback.</p>
    <div class="row">
        <div class="col"></div>
        <div class="col">
        <div class="card">
            <div class="card-body">
                {!! QrCode::size(300)->generate($formUrl) !!}
            </div>
        </div>
        </div>
        <div class="col"></div>
    </div>
    </div>
</div>
@endsection
