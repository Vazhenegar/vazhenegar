{{--these contents will include in dashboard master layout --}}

    @include('vazhenegar.DashboardAdminOrdersList')

    <!-- Main row -->
    <div class="row">
        <!-- right col -->
        <section class="col-lg-7 connectedSortable">
            @include('vazhenegar.Charts')
            @include('vazhenegar.DashboardEmailWidget')
        </section>
        <!-- /.right col -->


        <!-- left col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
            @include('vazhenegar.DashboardCalendar')
            @include('vazhenegar.ChatBox')
        </section>
        <!-- left col -->

    </div>
