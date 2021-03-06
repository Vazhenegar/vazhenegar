@include('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser')


@switch($Order->status_id)
    @case(2)
    {{-- user not paid the invoice yet--}}
    <form action="{{route('Pay')}}" method="post" id="NewOrderSpecCustomer">
        @csrf

        <table class="table">
            <thead>فرم پرداخت فاکتور مشتری</thead>
            <tbody>
            <input type="hidden" name="Email" value="{{DashboardCurrentUser::$CurrentUser->Email}}">
            <input type="hidden" name="Mobile" value="{{DashboardCurrentUser::$CurrentUser->MobileNumber}}">
            <input type="hidden" name="OrderId" value="{{$Order->id}}">

            {{-- =============== Invoice Price =================================================== --}}
            <tr>
                <td class="pull-right"><span>مبلغ قابل پرداخت:</span></td>

                <td class="pull-right">
                    {{$PayablePrice=$Order->TotalPrice}} ریال
                    <input type="hidden" name="Amount" value="{{$PayablePrice}}">
                </td>
            </tr>

            {{-- =============== Bank Portal =================================================== --}}
            <tr>
                <td>انتخاب درگاه بانکی:</td>
            </tr>
            <tr id="BankPortals">
                <td class="pull-right BankPortal">
                    <a href="#"> <img src="{{asset('images/site/SamanPortal.jpg')}}" alt=""></a>
                    <span style="font-size: 18px; color: deeppink;"> به زودی</span>
                </td>

                <td class="pull-right BankPortal">
                    <a href="#"> <img src="{{asset('images/site/MellatPortal.jpg')}}" alt=""></a>
                    <span style="font-size: 18px; color: deeppink;"> به زودی</span>
                </td>

                <td class="pull-right BankPortal">
                    <input type="image" onclick="{{session(['OrderId'=>$Order->id,'Client'=>'zarinpal','Amount'=>$PayablePrice])}}" src="{{asset('images/site/ZarrinPal.png')}}"
                           alt="Submit Form"/>
                </td>


            </tr>



            {{--            when return back from bank portal--}}
            @if (session('bank_response'))
                <tr class="BankResponse">

                    <td class="FailedBankResponse">

                        {{'نتیجه تراکنش بانکی: '. session('bank_response') }}


                    </td>
                </tr>
            @endif
            </tbody>
        </table>
    </form>


    {{--            test pay for customer invoice --}}
{{--    <div>--}}

{{--        <a onclick="event.preventDefault();--}}
{{--            document.getElementById('tst').submit();">--}}

{{--            <button type="button" class="btn btn-block"><i class="fa fa-dollar"></i>--}}
{{--                پرداخت تست--}}
{{--            </button>--}}
{{--        </a>--}}
{{--        <form id="tst" action="{{route('tstPay',[$Order->id, $Order->TotalPrice])}}" method="POST"--}}
{{--              style="display: none;">--}}
{{--            @csrf--}}
{{--        </form>--}}

{{--    </div>--}}



    @break

    @case(3)
    <div class="SuccessBackground">

        <p class="SuccessBankResponse">
            پس از تایید واریز از طرف امور مالی، فایل شما برای مترجمین مرتبط ارسال خواهد شد.
        </p>

    </div>
    @break

    @case(8)
    <p class="pull-right">
        ترجمه سفارش خود را می توانید از طریق لینک مقابل دریافت نمایید.
    </p>
    <div class="pull-left">
        <a href="{{route('Download',[$Order->user_id, $Order->TranslatedOrderFile])}}"> <button type="button" class="btn btn-primary"><i class="fa fa-arrow-down"></i> دانلود فایل
            </button> </a>
    </div>

    @break

@endswitch


