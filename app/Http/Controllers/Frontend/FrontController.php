<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    //home route service
    public function home()
    {
        return view('frontend.index');
    }

    // about service
    public function about()
    {
        return view('frontend.about');
    }

    // contact service
    public function contact()
    {
        return view('frontend.contact');
    }

    // first_quarter service
    public function first_quarter()
    {
        return view('frontend.first-quarter');
    }

    // first_document service
    public function fund_document()
    {
        return view('frontend.fund-document');
    }

    // first_document service
    public function fund_family()
    {
        return view('frontend.fund-family');
    }

    // first_document service
    public function managed_income_fund()
    {
        return view('frontend.managed-income-fund');
    }

    // first_document service
    public function market_updates()
    {
        return view('frontend.market-updates');
    }

    // first_document service
    public function news()
    {
        return view('frontend.news');
    }

    // first_document service
    public function performance()
    {
        return view('frontend.performance');
    }

    // first_document service
    public function privacy()
    {
        return view('frontend.privacy');
    }

    // first_document service
    public function risk_definition()
    {
        return view('frontend.risk-definition');
    }

    // first_document service
    public function terms_condition()
    {
        return view('frontend.terms-condition');
    }
}
