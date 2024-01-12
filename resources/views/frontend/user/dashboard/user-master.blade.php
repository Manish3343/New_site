@extends('frontend.frontend-page-master')
@section('page-title')
   {{Auth::user()->user_type=='Employer'?'Employer':'Employee'}} {{__(' Dashboard')}}
@endsection
@section('content')
    <section class="login-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="user-dashboard-wrapper">
                       
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
 
                            <li class="mobile_nav">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('user.home')) active @endif" href="{{route('user.home')}}">{{__('Dashboard')}}</a>
                            </li>
                            @if(Auth::user()->user_type!='Employer')
                            
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('user.home.edit.profile')) active @endif " href="{{route('user.home.edit.profile')}}">{{__('Edit Profile')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('user.home.change.password')) active @endif " href="{{route('user.home.change.password')}}">{{__('Change Password')}}</a>
                            </li>

                            @else
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('employer.clients')) active @endif" href="{{route('employer.clients')}}">{{__('Employees')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('employer.document')) active @endif" href="{{route('employer.document')}}">{{__('Required Document')}}</a>
                            </li>
                           
                            @endif
                            <li class="nav-item">
                                <a class="nav-link"  href="{{ route('user.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel">
                                <div class="message-show margin-top-10">
                                    <x-flash-msg/>
                                    <x-error-msg/>
                                </div>
                                @yield('section')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function (){
           $('select[name="country"] option[value="{{auth()->guard('web')->user()->country}}"]').attr('selected',true);
        });
    </script>
@endsection