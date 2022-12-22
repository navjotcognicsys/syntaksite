<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function service(){
        return view('pages.services');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function dark_posting(){
        return view('pages.dark_posting');
    }

    public function graphic_desing(){
        return view('pages.graphic_desing');
    }

    public function careers(){
        return view('pages.careers');
    }

    public function full_stack_dev(){
        return view('pages.full-stack-dev');
    }

    public function blog_details(){
        return view('pages.full-stack-dev'); 
    }

    public function wordpress_dev(){
        return view('pages.wordpress-career');
    }

    public function graphic_designer(){
        return view('pages.graphic-designer-career');
    }

    public function webdevelopment(){
        return view('pages.web-development');
    }

    public function mobiledevelopment(){
        return view('pages.mobile-devolpment');
    }

    public function UIUXproto(){
        return view('pages.UI_UX_proto');
    }

    public function graphicdesignproto(){
        return view('pages.graphic-design-proto');
    }

    public function digitalmarketing(){
        return view('pages.digital_marketing');
    }

    public function digitalmarketingcareers(){
        return view('pages.digital-marketing-careers');
    }

    public function retailbranding(){
        return view('pages.retail_branding');
    }
    
    public function Bussiness_dev(){
        return view('pages.bde'); 
    }

    public function uiuxcareer(){
       return view('pages.Ui-Ux-career'); 
    }

    public function itservice(){
        return view('pages.service-details'); 
    }

    public function bussinessreform(){
        return view('pages.bussiness-reform');  
    }

    public function infrastructure(){
        return view('pages.infrastructure');
    }

    public function remoteengineers(){
        return view('pages.remote-engineers');
    }

    public function bussiness_security(){
        return view('pages.bussiness-security');
    }

    public function product_analysis(){
        return view('pages.product-analysis');
    }

    public function manage_it_service(){
        return view('pages.manage-it-service');
    }
    
    public function analytic_solution(){
        return view('pages.analytic-solution');
    }

    public function finest_quality(){
        return view('pages.finest-quality');
    }


    public function risk_management(){
        return view('pages.risk-management');
    }
    
    
    
    
}
