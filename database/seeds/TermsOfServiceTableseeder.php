<?php

use Illuminate\Database\Seeder;

class TermsOfServiceTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tos=[

            'شرایط همکاری با مترجمان در مجموعه واژه نگار'=>'مجموعه واژه نگار همواره به دنبال جذب افراد مستعد و علاقمند به کار ترجمه می باشد.
همکاری با این مجموعه بصورت غیرحضوری بوده و نیاز به حضور فیزیکی مترجم نمی باشد. فقط در صورتی که در حوزه ترجمه مهارت کافی دارید و مایل هستید تا با این مجموعه همکاری داشته باشید خواهشمند است موارد ذکر شده زیر را با دقت مطالعه نموده و فرم همکاری با ما را تکمیل نمایید.',

            'داشتن حداقل مدرک کارشناسی یا بالاتر و نیز سابقه حرفه ای در حوزه ترجمه'=>'به درخواست هایی که با مدارک پایین تر ارسال می شوند، پاسخی داده نخواهد شد، همچنین داشتن سابقه ترجمه یک مزیت مهم محسوب می شود.',

            'کسب امتیاز قابل قبول در آزمون تعیین سطح آنلاین'=>'پس از تکمیل فرم همکاری، نمونه متنی ارائه می شود تا سطح دانش مترجم بررسی شود، این متن با توجه به زبان های مبدا انتخابی و همچنین زمینه های مورد نظر مترجم انتخاب خواهد شد. نکته مهم اینکه در صورت استفاده از نرم افزارها و سایت های ترجمه متن و عدم برخورداری متن از کیفیت مورد نظر، از همکاری با مترجم معذور خواهیم بود.',

            'دسترسی به اینترنت و امکان پاسخگویی به تماس های تلفنی '=>'مترجم بایستی برای تعامل با مجموعه و دریافت و ارسال سفارشات به اینترنت دسترسی داشته، همچنین امکان پاسخگویی به تماس های مجموعه را دارا باشد.',

            'توجه به تاریخ و زمان تحویل سفارشات'=>'سفارشات ارائه شده توسط مشتریان با توجه به مدت زمان اعلام شده و حجم سفارش قیمت گذاری و در اختیار مترجمان قرار می گیرد، لذا هنگام بررسی سفارش توسط مترجم می بایست به تاریخ و زمان تحویل آن توجه ویژه ای شود تا مشکلی از بابت تحویل بموقع بوجود نیاید.همچنین پس از تحویل سفارش در صورتی که مشتری ایرادی از متن گرفته باشد، در صورت تایید ادعای وی، مترجم مسئولیت رفع ایراد را بر عهده دارد.',

            'ارائه بالاترین کیفیت'=>'مترجم بایستی تمام تلاش خود را برای ارائه ترجمه با کیفیت بالا به کار گیرد، استفاده از نرم افزارها یا سایت های مترجم که بصورت رایگان در اینترنت یافت می شوند مجاز نبوده و در صورتی که مترجمی برای ترجمه از آنها استفاده کرده باشد، طبق مقررات با وی برخورد خواهد شد.',

            'عدم انتشار ترجمه'=>'نکته مهم دیگری که باید به آن توجه شود، عدم انتشار ترجمه بدون اجازه مشتری است و در صورت انتشار قابل پیگرد از سوی مشتری یا مجموعه خواهد بود.',

            'پرداخت دستمزد مترجم'=>'حق الزحمه مترجمان بصورت منظم و در بازه زمانی مشخص به حساب آنها واریز می گردد. توجه داشته باشید که لازم است شماره کارت اعلام شده به مجموعه متعلق به مترجم باشد، در غیر اینصورت مجموعه هیچ مسئولیتی در قبال عدم دریافت حق الزحمه نخواهد داشت. همچنین مجموعه برای تشویق نیروی انسانی خود مواردی را در نظر گرفته است که در ناحیه کاربری مترجمان عنوان شده است.',

            'امکان ثبت سفارش برای مترجمان خاص'=>'در هنگام تحویل سفارش به مشتری، کد مترجم نیز به ایشان اعلام می گردد تا در صورت رضایت از ترجمه و تمایل، بتوانند سفارشات بعدی خود را نیز به همان مترجم ارجاع دهند. لذا ارائه ترجمه با کیفیت بالا توسط مترجمان می تواند در میزان سفارشات دریافتی آنها بسیار موثر باشد. ',



        ];

        foreach($tos as $tostitle=>$toscontent){

            DB::table('terms_of_services')->insert([
                'TosTitle'=>$tostitle,
                'TosContent'=>$toscontent,
            ]);
        }
    }
}
