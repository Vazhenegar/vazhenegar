
{{-- these contents will include to dashboard index--}}
@include('vazhenegar.DashboardElements.Customer.DashboardCustomerBadges')
@include('vazhenegar.DashboardElements.Customer.DashboardGuideBox')
{{--if user is redirected from employment page this alert would be show to user--}}
@if(session('status')=='Order Stored')
    <script>alert("کاربر گرامی سفارش شما با موفقیت ثبت شد. پس از بررسی سفارش با شما تماس گرفته خواهد شد.")</script>
@endif
<!-- Main row -->
<div class="row">
    <!-- right col -->
    <section class="col-lg-7 connectedSortable">
        @include('vazhenegar.DashboardElements.SharedParts.DashboardChatBox')
    </section>
    <!-- /.right col -->


    <!-- left col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">
        @include('vazhenegar.DashboardElements.SharedParts.DashboardCalendar')
    </section>
    <!-- left col -->

</div>
