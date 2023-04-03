@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
    <style>
        .card-1 {
            background: rgb(58, 89, 180);
            background: linear-gradient(50deg, rgba(23, 103, 191, 1) 15%, rgba(4, 157, 127, 1) 40%, rgb(232, 205, 246, 1) 90%);
        }

        .card-2 {
            background: rgb(58, 89, 180);
            background: linear-gradient(50deg, rgba(13, 151, 133, 1) 15%, rgba(61, 93, 202, 1) 40%, rgb(233, 197, 107, 1) 90%);
        }

        .card-3 {
            background: rgb(58, 89, 180);
            background: linear-gradient(50deg, rgb(3, 164, 132, 1) 15%, rgb(1, 191, 199, 1) 40%, rgb(243, 208, 98, 1) 90%);
        }

        .card-4 {
            background: rgb(58, 89, 180);
            background: linear-gradient(50deg, rgb(199, 225, 114, 1) 15%, rgb(13, 197, 197, 1) 40%, rgb(77, 139, 186, 1) 90%);
        }

        .prod-p-card {
            border-radius: 25px;
        }
    </style>
@endpush

@section('dashboard-navbar')
    <ul class="nav-left pl-3">
        <li>
            <h3 class="pt-3">
                Dashboard
            </h3>
        </li>
        <li>
            <marquee class="p-0 m-0" width="140%" direction="left" height="45px">
                This is a sample scrolling text that has scrolls in the upper direction.
            </marquee>
        </li>
    </ul>
@endsection

@section('dashboard-extra')
    {{-- user details section is hidden in sidebar on mobile and showen in dashobard  --}}
    <div class="d-block d-lg-none">
        <div class="d-flex justify-content-between pb-2" style="background-color: #a23d10;">
            <div class="col-4">
                <img class="profile-header-avatar" src="{{ auth()->user()->userToUserDetails->pic }}" data-toggle="modal"
                    data-target="#exampleModal" id="myImg" alt="RIJVI & RODH" type="button">
            </div>

            <div class="col-8 text-white" style="overflow-wrap: break-word">
                <span class="font-weight-bold">Hello, {{ auth()->user()->username }}</span>
                <br>
                <small>{{ auth()->user()->email }}</small>
                <br>
                <span class="font-weight-bold text-primary">
                    {{ auth()->user()->is_verified ? 'Verified' : 'Unverified' }}
                    Account
                </span>
            </div>
        </div>
    </div>
@endsection

@section('page-content')
    <div class="row">
        <div class="col-md-12 mb-3">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style=" width:100%; max-height: 200px !important;">
                    @foreach ($banners as $banner)
                        <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                            <img src="{{ $banner->image }}" class="rounded d-block w-100" alt="RIJVI & RODH">
                        </div>
                    @endforeach
                </div>


                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <style>
            .card-body-custom {
                padding: 1rem !important;
            }
        </style>
        <div class="col-6 col-xl-3 col-md-6 mb-n3">
            <div class="card prod-p-card card-1">
                <div class="card-body card-body-custom">
                    <div class="row align-items-center">
                        <div class="col-auto pl-1 pl-md-2 pr-0">
                            <i class="fas fa-money-bill-alt bg-dribbble text-white"></i>
                        </div>
                        <div class="col">
                            <span class="m-b-0 f-w-700 text-white">${{ $wallet->main_amount }}</span>
                            <br>
                            <small class="m-b-5 text-white">Current Wallet</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3 col-md-6 mb-n3">
            <div class="card prod-p-card card-2">
                <div class="card-body card-body-custom">
                    <div class="row align-items-center">
                        <div class="col-auto pl-1 pl-md-2 pr-0">
                            <i class="fas fa-database bg-dribbble text-white"></i>
                        </div>
                        <div class="col">
                            <span class="m-b-0 f-w-700 text-white">${{ $totalStake }}</span>
                            <br>
                            <small class="m-b-5 text-white">Total Staking</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3 col-md-6 mb-n3">
            <div class="card prod-p-card card-3">
                <div class="card-body card-body-custom">
                    <div class="row align-items-center">
                        <div class="col-auto pl-1 pl-md-2 pr-0">
                            <i class="fas fa-tags bg-dribbble text-white"></i>
                        </div>
                        <div class="col">
                            <span class="m-b-0 f-w-700 text-white">{{ count(auth()->user()->direct_team) }}</span>
                            <br>
                            <small class="m-b-5 text-white">Total Refer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3 col-md-6 mb-n3">
            <div class="card prod-p-card card-4">
                <div class="card-body card-body-custom">
                    <div class="row align-items-center">
                        <div class="col-auto pl-1 pl-md-2 pr-0">
                            <i class="fas fa-dollar-sign bg-dribbble text-white"></i>
                        </div>
                        <div class="col">
                            <span class="m-b-0 f-w-700 text-white">${{ $wallet->total_earning }}</span>
                            <br>
                            <small class="m-b-5 text-white">Total Income</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="d-card bg-white rounded mt-n3">
                @if (auth()->user()->is_verified)
                    <fieldset class="text-center m-3" style="border: 2px solid #060606;">
                        <legend style="width: 50%;">Invite Link</legend>
                        <p id="referral-link">
                            {{ env('APP_URL') . '/ref/' . auth()->user()->username }}
                        </p>

                        <button type="button" class="btn btn-primary rounded-pill mb-3" onclick="myFunction()"
                            id="copied">
                            <i class="far fa-copy"></i>
                            Copy
                        </button>
                        <a href="#" class="btn btn-primary rounded-pill mb-3">
                            <i class="fas fa-share-alt"></i>
                            Share
                        </a>
                    </fieldset>
                @else
                    <fieldset class="text-center m-3" style="border: 2px solid #060606;">
                        <legend style="width: 50%;">Invite Link</legend>
                        <p>
                            You need to verify your account.
                        </p>
                        <a href="{{ route('public_profile') }}" class="btn btn-primary rounded-pill mb-3">
                            Verify
                        </a>
                    </fieldset>
                @endif

                <div class="pt-1">
                </div>
            </div>
        </div>
        
        <x-global-rate-2 />
        
        {{-- <div class="col-md-12"> --}}
            {{-- <div id="tradingview-widget"></div> --}}
            {{-- <div class="bg-white rounded my-3 p-1">
                <x-global-rate />
            </div> --}}
        {{-- </div> --}}
    </div>
@endsection

@push('js')
    <script>
        function myFunction() {
            // Get the text field
            var copyText = $("#referral-link").text();

            copyText = copyText.trim();

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText);

            $('#copied').html('✔️ Copied');
        }
    </script>
@endpush
