<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function  index(){
        return view('pages.admin.pages.index');
    }

    public function  chartjs(){
        return view('pages.charts.chartjs');
    }
    public function  flot(){
        return view('pages.chart.flot');
    }
    public function  inline(){
        return view('pages.charts.inline');
    }

    public function  uplot(){
        return view('pages.charts.uplot');
    }
    public function  notFound(){
        return view('pages.examples.404');
    }
    
    public function  internalError(){
        return view('pages.examples.500');
    }
    
    public function  blank(){
        return view('pages.examples.bank');
    }
    public function  contactUs(){
        return view('pages.examples.contact-us');
    }
    public function  contacts(){
        return view('pages.examples.contacts');
    }
    public function  Ecommerce(){
        return view('pages.examples.e-commerce');
    }
    public function  faq(){
        return view('pages.examples.faq');
    }
    public function  forgotPasswordV2(){
        return view('pages.examples.forgot-password-v2');
    }
    public function  forgotPassword(){
        return view('pages.examples.forgot-password');
    }
    public function  invoicePrint(){
        return view('pages.examples.invoice-print');
    }
    public function  invoice(){
        return view('pages.examples.invoice');
    }
    public function  languageMenu(){
        return view('pages.examples.language-menu');
    }
    public function  legacyUserMenu(){
        return view('pages.examples.legacy-user-menu');
    }
    public function  lockscreen(){
        return view('pages.examples.lockscreen');
    }
    public function  loginV2(){
        return view('pages.examples.login-v2');
    }
    // public function  login(){
    //     return view('pages.examples.login');
    // }
    public function  pace(){
        return view('pages.examples.pace');
    }
    public function  profile(){
        return view('pages.examples.profile');
    }
    public function  project(){
        return view('pages.examples.project');
    }
    public function  profileAdd(){
        return view('pages.examples.profile-add');
    }
    public function  projectDetail(){
        return view('pages.examples.project-detail');
    }
    public function  projectEdit(){
        return view('pages.examples.projectEdit');
    }
    
    public function  projects(){
        return view('pages.examples.projects');
    }
    public function  recoverPassword(){
        return view('pages.examples.recover-password');
    }
    public function  registerV2(){
        return view('pages.examples.register-v2');
    }
    public function  register(){
        return view('pages.examples.404');
    }
    public function  advanced(){
        return view('pages.forms.advanced');
    }
    public function  editors(){
        return view('pages.forms.editors');
    }
    public function  firmsGeneral(){
        return view('pages.forms.general');
    }
    public function  validation(){
        return view('pages.forms.validation');
    }
    public function  boxes(){
        return view('pages.layout.boxes');
    }

    public function  collapsedSidebar(){
        return view('pages.layout.collapsed-sidebar');
    }
    public function  fixedFooter(){
        return view('pages.layout.fixed-footer');
    }
    public function  fixedSidebarCustom(){
        return view('pages.layout.fixed-sidebar-custom');
    }
    public function  fixedSidebar(){
        return view('pages.layout.fixed-sidebar');
    }
    public function  fixedTopnav(){
        return view('pages.layout.fixed-topnav');
    }
    public function  layoutIndex3(){
        return view('pages.layout.index3');
    }
    public function  topNavSidebar(){
        return view('pages.layout.top-nav-sidebar');
    }
    public function  topNav(){
        return view('pages.layout.top-nav');
    }
    public function  compose(){
        return view('pages.mailbox.compose');
    }
    public function  mailbox(){
        return view('pages.mailbox.mailbox');
    }
    public function  readMail(){
        return view('pages.mailbox.read-mail');
    }
    public function  enhanced(){
        return view('pages.search.enhanced');
    }
    public function  searchSimple(){
        return view('pages.search.simple.');
    }
    public function  data(){
        return view('pages.tables.data');
    }

    public function  jsgrid(){
        return view('pages.tables.jsgrid');
    }
    
    public function  TablesSimple(){
        return view('pages.tables.simple');
    }
    public function  buttons(){
        return view('pages.UI.buttons');
    }
    public function  UIgeneral(){
        return view('pages.UI.general');
    }
    public function  icons(){
        return view('pages.UI.icons');
    }
    
    public function  modals(){
        return view('pages.UI.modals');
    }
    public function  navbar(){
        return view('pages.UI.navbar');
    }
    public function  ribbons(){
        return view('pages.UI.ribbons');
    }
    public function  sliders(){
        return view('pages.UI.sliders');
    }
    public function  timeline(){
        return view('pages.UI.timeline');
    }
    public function  calender(){
        return view('pages.calendar');
    }
    public function  gallery(){
        return view('pages.gallery');
    }
    public function  iframe(){
        return view('pages.iframe');
    }    
    public function  index_2(){
        return view('pages.index-2');
    }
    // public function  index(){
    //     return view('pages.index');
    // }
    public function  index2(){
        return view('pages.index2');
    }
    public function  index3(){
        return view('pages.index3');
    }
    public function  kanban(){
        return view('pages.kandan');
    }
    public function  starter(){
        return view('pages.starter');
    }
    public function  widgets(){
        return view('pages.widgets');
    }
    public function  post(){
        return view('pages.forms.post');
    }
    public function  userDashboard(){
        return view('pages.tables.userDashboard');
    }
    
    public function  to_do(){
        return view('pages.To-Do.todo');
    }
    
       
    public function  formlist(){
        return view('pages.admin.pages.forms.formlist');
    }
    public function  cause(){
        return view('pages.admin.pages.forms.cause');
    }

    public function  login(){
        return view('pages.admin.register');
    }
    
    public function  event(){
        return view('pages.admin.pages.forms.event');
    }
    
    
}
