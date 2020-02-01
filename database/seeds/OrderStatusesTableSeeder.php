<?php

use Illuminate\Database\Seeder;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Statuses=[
            'در حال انتظار برای بررسی و تعیین قیمت'=>'پس از ارسال سفارش توسط مشتری، مسئول واحد آن را بررسی کرده و قمت گذاری انجام می شود.',
            'در حال انتظار برای پیش پرداخت مشتری'=>'پس از قیمت گذاری و ارسال پیش فاکتور، مشتری باید آن را پرداخت و مراتب را به واحد مربوطه اطلاع دهد.',
            'در حال انتظار برای تایید دریافت وجه پیش فاکتور توسط واحد مالی'=>'پس از اعلام مشتری مبنی بر پرداخت پیش فاکتور، واحد مالی بررسی کرده و تاییدیه دریافت یا عدم دریافت را صادر می کند.',
            'در حال انتظار برای پذیرش توسط مترجم'=>'پس از تایید پیش پرداخت، سفارش با توجه به زبان و زمینه ترجمه به مترجمان ارجاع داده می شود.',
            'در حال انجام سفارش'=>'سفارش توسط مترجم پذیرفته شده و در حال انجام است.',
            'تکمیل سفارش توسط مترجم'=>'سفارش توسط مترجم انجام شده و آپلود شده است.',
            'بررسی نهایی توسط واحد ترجمه'=>'ترجمه ارسالی توسط واحد ترجمه انجام می گیرد.',
            'ذر حال انتظار برای پرداخت نهایی مشتری'=>'فاکتور نهایی صادر شده و منتظر پرداخت مشتری است.',
            'در حال انتظار برای تایید دریافت وجه فاکتور توسط واحد مالی '=>'پس از اعلام مشتری مبنی بر پرداخت مبلغ فاکتور، واحد مالی بررسی کرده و تایید دریافت یا عدم دریافت مبلغ را صادر می کند.',
            'تکمیل شده'=>'روال ترجمه فایل به اتمام رسیده و لینک به مشتری ارسال شده است.',
            'لغو سفارش توسط مشتری'=>'انجام سفارش توسط مشتری لغو شده است.',
            'لغو سفارش توسط مترجم'=>'انجام سفارش توسط مترجم لغو شده است.',
            'ارجاع به مترجم دیگر'=>'سفارش به مترجم دیگری ارجاع داده شده است.',
        ];

        foreach ($Statuses as $status=>$description){
            DB::table('order_statuses')->insert([
                'Status'=>$status,
                'Description'=>$description,
            ]);
        }
    }
}
