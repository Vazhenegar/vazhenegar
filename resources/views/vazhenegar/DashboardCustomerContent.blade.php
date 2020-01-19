
{{-- these contents will include to dashboard master layout--}}
@include('vazhenegar.DashboardGuideBox')
<!-- Main row -->
<div class="row">
    <!-- right col -->
    <section class="col-lg-7 connectedSortable">
        @include('vazhenegar.ChatBox')
    </section>
    <!-- /.right col -->


    <!-- left col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">
        @include('vazhenegar.DashboardCalendar')
    </section>
    <!-- left col -->

</div>
