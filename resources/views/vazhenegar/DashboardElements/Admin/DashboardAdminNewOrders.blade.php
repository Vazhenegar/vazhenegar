@extends('auth.DashboardLayout.DashboardMasterLayout')
@section('Title', 'لیست سفارشات جدید')

@section('content')

    @include('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser')
    @include('vazhenegar.DashboardElements.Admin.DashboardAdminBadges')

    {{-- this session will show list of orders according to user role and order list type --}}
    @php(session(['OrderList'=>'NewOrders']))
    @include('vazhenegar.DashboardOrdersList')
@endsection