@switch($userinfo->role_id)
    @case(1)
        @include('layouts.rolebar.tutor')
    @break

    @case(2)
        @include('layouts.rolebar.institute')
    @break

    @default
        @include('layouts.rolebar.student')
@endswitch
