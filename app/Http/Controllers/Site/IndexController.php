<?php

namespace App\Http\Controllers\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Image;
use App\HomeAbout;
use App\Newsletter;
use App\NewBar;
use App\HeaderDetail;
use App\FirstSlider;
use App\SecondSlider;
use App\ThirdSlider;
use App\FourthSlider;
use App\Event;
use App\Admin;
use App\Notifications\NewRegister;
use App\Events\NewRegisterEvent;
use App\Contact;
use App\About;
use App\Course;
use Carbon\Carbon;
use App\RegisterCourse;
use App\Channel;
use App\Message;
use App\Bank;
use App\PaymentInfo;
use Illuminate\Support\Facades\Input;
use App\paytabs;
use Illuminate\Support\Facades\Mail;
use App\Mail\PayCredit;


class IndexController extends Controller
{
    public function index ()
    {
        $images = Image::first();
        $home_about = HomeAbout::first();
        $paragraphs = Newsletter::first();
        $first_sliders = FirstSlider::all();
        $second_sliders = SecondSlider::all();
                $third_sliders = ThirdSlider::all();
                                $fourth_sliders = FourthSlider::all();
        $news = NewBar::all();
        $header_detail = HeaderDetail::first();
        $events = Event::all();
        $contact = Contact::first();

        $channels = Channel::all();
        $courses = Course::all();
        return view('site.index', compact('images', 'events', 'channels', 'courses', 'contact', 'home_about', 'news', 'paragraphs', 'header_detail', 'first_sliders', 'second_sliders', 'third_sliders', 'fourth_sliders'));
    }

    public function courses (Request $request, $category)
    {

        if(app()->isLocale('en'))
{

    $item = $request->item;

    $searched_courses = Course::where('c_name', 'LIKE', '%' . $item  . '%')->get();

        $courses = Course::where('course_category', $category)->orderBy('start')->get()->groupBy(function($date) {
            return Carbon::parse($date->start)->format('M'); 
    });



} else {
    $item = $request->item_ar;


    $searched_courses = Course::where('cname_ar', 'LIKE', '%' . $item  . '%')->get();

    

    $courses = Course::where('category_ar', $category)->orderBy('start')->get()->groupBy(function($date) {
        return Carbon::parse($date->start)->format('M'); 
        
});



}



        return view('site.courses', compact('courses', 'item', 'searched_courses', 'category'));
    }
    

    public function about ()
    {
        $about = About::first();
        $second_sliders = SecondSlider::all();

        return view('site.about', compact('about', 'second_sliders'));
    }

    public function customError ()
    {
        return view('errors.404');
    }

    public function course ($id, $category)
    {
        $courses_page = Course::where('id', $id)->get();

foreach($courses_page as $course_page) {
                     session()->put('amount', $course_page->value);
}
        

        $amount =   session()->get('amount');


        $code = str_random(4);
        $channels = Channel::all();
        $courses = Course::all();

        return view('site.course-page', compact('id', 'courses_page', 'code', 'channels', 'courses', 'category', 'amount'));
    }


    public function payment ($id, $category)
    {
        $banks = Bank::all();

    $email = session()->get('email');
        $payments_page = Course::where('id', $id)->get();

        return view('site.payment', compact('id', 'payments_page', 'banks', 'category', 'email'));
    }

    public function contact ()
    {
        return view('site.contact-us');
    }

    public function register(Request $request, $category)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:admins,name|max:100',
            'mobile' => 'required|unique:admins,name|max:50',
            'address' => 'required',
            'occupation' => 'required',
            'apply' => 'required',
            'channels' => 'required',
            'captcha' => 'required|captcha',

        ],
            [
                'name.required' => trans('site.please add name'),
                'email.required' => trans('site.please add email'),
                'mobile.required' => trans('site.please add mobile'),
                'address.required' => trans('site.please add address'),
                'occupation.required' => trans('site.please add occupation and employment'),
                'apply.required' => trans('site.please add apply before'),
                'channels.required' => trans('site.please add channels'),
                'captcha.required'=> trans('site.please add captcha'),
            ]);

            $email = $request->email;

             session()->put('name', $request->name);
             session()->put('email', $request->email);

            $input = $request->all();

            $courses = RegisterCourse::create($input);

            if ($courses) {

                foreach (Admin::all() as $admin){
                    $admin->notify(new NewRegister($courses));
                }
                event(new NewRegisterEvent('register'));
                auth()->login($courses);

                $courses->channels()->attach($request->channels);
                return redirect()->route('payment', ['id'=>$request->course_id, 'category'=>$category]);
            }

            return redirect()->back()->with('success', trans('site.registerd successfully'));
    
    }


public function sendContact(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|unique:admins,name|max:100',
        'mobile' => 'required|unique:admins,name|max:50',
        'message' => 'required',
    ],
        [
            'name.required' =>trans('site.please add name'),
            'email.required' =>trans('site.please add email'),
            'mobile.required' =>trans('site.please add mobile'),
            'message.required' =>trans('site.please add message'),
        ]);

        $input = $request->all();

        Message::create($input);

        return redirect()->back()->with('success', trans('site.send successfully'));
    }



     public function payBank(Request $request, $email)
{

    if($request->method == 'credit'){
       $pt = Paytabs::getInstance("geo.mahmoudtaha@gmail.com", "4FTkmdQerZilOrHTokKe95JZlbDo0aa4Q3ocherIeJ42bMVz7GOgLxg7JTvK4FOVJc80rzJGjOIuAE4HkSY6qeda8JUdpJ88Wg9n");
	$result = $pt->create_pay_page(array(
		"merchant_email" => "geo.mahmoudtaha@gmail.com",
		'secret_key' => "4FTkmdQerZilOrHTokKe95JZlbDo0aa4Q3ocherIeJ42bMVz7GOgLxg7JTvK4FOVJc80rzJGjOIuAE4HkSY6qeda8JUdpJ88Wg9n",
		'title' => session()->get('name') . ' ' . session()->get('name') ,
		'cc_first_name' => session()->get('name'),
		'cc_last_name' => session()->get('name'),
		'email' => session()->get('email'),
		'cc_phone_number' => "973",
		'phone_number' => "33333333",
		'billing_address' => "Juffair, Manama, Bahrain",
		'city' => "Manama",
		'state' => "Capital",
		'postal_code' => "97300",
		'country' => "SAU",
		'address_shipping' => "Juffair, Manama, Bahrain",
		'city_shipping' => "Manama",
		'state_shipping' => "Capital",
		'postal_code_shipping' => "97300",
		'country_shipping' => "SAU",
		"products_per_title"=> "Mobile Phone",
		'currency' => "SAR",
		"unit_price"=> "10",
		'quantity' => "1",
		'other_charges' => "0",
		'amount' =>  session()->get('amount'),
		'discount'=>"0",
		"msg_lang" => "english",
		"reference_no" => "1231231",
		"site_url" => "http://www.mahmoudtaha.ga/courses/public/",
		'return_url' => "http://www.mahmoudtaha.ga/courses/public/success.php",
		"cms_with_version" => "API USING PHP"
	));

    
    	if($result->response_code == 4012){


	    return redirect($result->payment_url);


        }
        return $result->result;

                    

    } else {

        
    $this->validate($request, [
        'method' => 'required',
        'bank_name' => 'required|unique:admins,name|max:100',
        'account_number' => 'required|unique:admins,name|max:50',
        'sender' => 'required',
    ],
        [
            'method.required' =>trans('site.please add payment method'),
            'bank_name.required' =>trans('site.please add bank name'),
            'account_number.required' =>trans('site.please add account number'),
            'sender.required' =>trans('site.please add name'),
        ]);

        $input = $request->all();

        PaymentInfo::create($input);

        $email = session()->get('email');
        
        \Mail::to($email)->send(new PayCredit());


        return redirect()->back()->with('success', trans('site.send successfully'));
    }

    }

    public function paytabsResponse()

{
    $pt = Paytabs::getInstance("geo.mahmoudtaha@gmail.com", "4FTkmdQerZilOrHTokKe95JZlbDo0aa4Q3ocherIeJ42bMVz7GOgLxg7JTvK4FOVJc80rzJGjOIuAE4HkSY6qeda8JUdpJ88Wg9n");
    $result = $pt->verify_payment($request->payment_reference);
    if($result->response_code == 100){
        // Payment Success
    }
    return $result->result;
}


    public function change_lang($lang)
    {
        session()->put('lang', $lang);
        return redirect()->back();

    }


}
