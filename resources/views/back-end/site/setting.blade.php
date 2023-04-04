@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Site Setting</h5>
        </div>

        @livewire('site-setting')

    </div>
@endsection

@push('js')
@endpush
