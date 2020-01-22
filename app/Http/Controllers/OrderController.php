<?php

namespace App\Http\Controllers;

use App\Department;
use App\Language;
use App\Order;
use App\TranslationField;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();
        $translation_fields = TranslationField::all();
        return view('vazhenegar.DashboardCustomerNewOrder',
            compact('languages', 'translation_fields')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'OrderSubject' => ['required', 'max:200'],
            'source_lang' => ['required'],
            'dest_lang' => ['required'],
            'TranslationField' => ['required'],
            'OrderFile'=>['required','max:19999','mimes:pdf,docx,doc,pptx,ppt,xlsx,xls,rar,zip'],
            'DeliveryDateAlt' => ['required'],
            'TranslationParts' => ['nullable'],
            'Description' => ['nullable', 'max:500'],
        ];
        $this->validate($request, $rules);

        $TranslationParts = serialize($request->input('TranslationParts'));
        $DeliveryDate=per_digit_conv($request->input('DeliveryDateAlt'));
        $DeliveryDate=Carbon::parse($DeliveryDate)->timestamp;

        $filename='';
        if ($request->hasFile('UserDocuments')) {
            $uploaded = $request->file('UserDocuments');
            $filename = $request->input('FirstName') . '-' . $request->input('LastName') . '-' . time() . '.' . $uploaded->getClientOriginalExtension();  //FirstName-LastName-timestamps.extension
            $uploaded->storeAs('public\Customers'.$request->input('FirstName').' '.$request->input('LastName'), $filename);
        }

        $Order = new Order;
        $CurrentUser=Auth::user();
        $Order->UserId = $CurrentUser->id;
        $Order->DeliveryDate = $DeliveryDate;
        $Order->RelatedDepartment = Department::where('DepartmentName','ترجمه')->value('id');
        $Order->SourceLanguage = $request->input('source_lang');
        $Order->DestLanguage = $request->input('dest_lang');
        $Order->TranslationField = $request->input('TranslationField');
        $Order->TranslationParts = $TranslationParts;
        $Order->StatusId = 1; //در حال انتظار برای بررسی و تعیین قیمت
        $Order->Description = $request->input('Description');
        $Order->OrderFile = $filename;

        $Order->save();

        //return to dashboard home page with success message
        session()->flash('status', 'Order Stored');
        return redirect('/dashboard');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
