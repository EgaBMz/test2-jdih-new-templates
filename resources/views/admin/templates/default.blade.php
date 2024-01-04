<!DOCTYPE html>
<html>

@include('admin.templates.partials.head')

<body>

    <div id="wrapper">

        @if(auth()->user()->hasRole('admin'))
            @include('admin.templates.partials.navbar')
        @elseif(auth()->user()->hasRole('superadmin'))
            @include('admin.templates.partials.navbarSuperAdmin')
        @elseif(auth()->user()->hasRole('user'))
            @include('admin.templates.partials.navbarUser')
        @endif

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        
        </div>
            @if(Request::is('*dashboard*'))
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>{{ $title }}</h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            @endif

            @yield('content')
        
        @include('admin.templates.partials.footer')

        </div>
        </div>

        @include('admin.templates.partials.scripts')

</body>

</html>
