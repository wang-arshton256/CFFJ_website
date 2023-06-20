<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Subscriber;
use App\Models\Schoolpoll;
use App\Models\Blog;

use Illuminate\Http\Request;


class Pagescontroller extends Controller
{
    public function index(){
        return 'index';

    }

    public function about(){
        return 'about';

    }

    public function whatwedo(){
        return 'whatwedo';

    }

    public function contact(){

        return 'contact';
    }

    

    public function Cadreenbio(){

        return 'Cadreenbio';
    }

    

    public function Cynthiabio(){

        return 'Cynthiabio';
    }

    public function directdt(){

        return 'directdt';
    }

    public function donate(){

        return 'donate';
    }

    public function DrIjjobio(){

        return 'DrIjjobio';
    }

    public function Duncanbio(){

        return 'Duncanbio';
    }

    public function events(){

        return 'events';
    }

    

    public function Juukobio(){

        return 'Juukobio';
    }

   

    public function MCNamawabio(){

        return 'MCNamawabio';
    }

    

    public function opinionbank(){

        return 'opinionbank';
    }

    public function ourpartners(){

        return 'ourpartners';
    }

    public function podcasts(){

        return 'podcasts';
    }

    public function policydialogueandwebinars(){

        return 'policydialogueandwebinars';
    }

    public function policyrecommendations(){

        return 'policyrecommendations';
    }

    public function Prof_bio(){

        return 'Prof_bio';
    }

    public function researchandpublications(){

        return 'researchandpublications';
    }

    public function researchandpublications_2(){

        return 'researchandpublications_2';
    }

    public function standingord(){

        return 'standingord';
    }

    public function wangbio(){

        return 'wangbio';
    }

    public function webinars(){

        return 'webinars';
    }
    
      public function outreach(){

        return 'outreach';
    }
    
       public function outreachgallary(){

        return 'outreachgallary';
    }


    public function continousinovation(){

        return 'continousinovation';
    }

    
      public function hopeinaweb(){

        return 'hopeinaweb';
    }

     public function silentmutiny(){

        return 'silentmutiny';
    }
    
    public function whyugandas_oil(){

        return 'whyugandas_oil';
    }


   public function emyoga(){

        return 'emyoga';
    }

     public function In_Pursuit_Of_Opportunity(){

        return 'In_Pursuit_Of_Opportunity';
    }


    public function A_Stich_In_Time(){

        return 'A_Stich_In_Time';
    }
    
    public function Grief_and_The_Politics_of_Ethnicity()
    {

        return 'Grief_and_The_Politics_of_Ethnicity';
    }


     public function enhancing_mobility()
    {

        return 'enhancing_mobility';
    }
    
    public function ugandanfuel()
    {

        return 'ugandanfuel';
    }
    
    public function trade_africe_economics()
    {

        return 'trade_africe_economics';
    }

         public function family_contraception_law()
    {

        return 'family_contraception_law';
    }

         public function climate_environment_economics()
    {

        return 'climate_environment_economics';
    }

         public function business_economics()
    {

        return 'business_economics';
    }

         public function hunger_agriculture_economics()
    {

        return 'hunger_agriculture_economics';
    }

         public function religion()
    {

        return 'religion';
    }
         public function law()
    {

        return 'law';
    }

         public function innovation()
    {

        return 'innovation';
    }

 public function government()
    {

        return 'government';
    }

public function family_stories()
    {

        return 'family_stories';
    }
    public function one_mans_story()
    {

        return 'one_mans_story';
    }
    public function agony()
    {

        return 'agony';
    }
    public function hope_in_a_web()
    {

        return 'hope_in_a_web';
    }
    
    public function education()
    {

        return 'education';
    }
    public function uganda()
    {

        return 'uganda';
    }

    public function Gender_Based_Violence()
    {

        return 'Gender_Based_Violence';
    }

    public function economy_family_development()
    {

        return 'economy_family_development';
    }
    
    public function businessandinnovations()
    {

        return 'businessandinnovations';
    }
    
    public function programs()
    {

        return 'programs';
    }
    
    
    
    public function RecordSubsriber(Request $request){

        $subscriber = new Subscriber();


        $subscriber->subscriber_email = $request->subscriber_email;


        $subscriber->save();


        return back()->with('subscriber_details_submitted', 'Subscriber details have been submitted successfully!');

    }


    public function Registercontactpage(Request $request){

        $contact = new Contact();


        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;


        $contact->save();


        return back()->with ('message_submitted', 'Your message has been sent. Thank you!');

    }

 public function Registercontact(Request $request){

        $contact = new Contact();


        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;


        $contact->save();


        return back()->with ('message_submitted', 'Your message has been sent. Thank you!');

    }


    public function Registerschoolpoll(Request $request){

        $schoolpoll = new Schoolpoll();


        $schoolpoll->nursary = $request->nursary;
        $schoolpoll->primary = $request->primary;
        $schoolpoll->secondary = $request->secondary;
        $schoolpoll->vocation = $request->vocation;
        $schoolpoll->university = $request->university;
        $schoolpoll->qn_2 = $request->qn_2;
        $schoolpoll->qn_3 = $request->qn_3;
        $schoolpoll->qn_3 = $request->qn_3_a;
        $schoolpoll->qn_4 = $request->qn_4;
        $schoolpoll->qn_5a = $request->qn_5a;
        $schoolpoll->qn_5b = $request->qn_5b;
        $schoolpoll->qn_5c = $request->qn_5c;
        $schoolpoll->qn_5d = $request->qn_5d;
        $schoolpoll->qn_6 = $request->qn_6;
        $schoolpoll->qn_7 = $request->qn_7;
        $schoolpoll->qn_8 = $request->qn_8;
        $schoolpoll->qn_3_a = $request->qn_3_a;
 
        
        
    

        $schoolpoll->save();


        return back()->with ('poll_submited', 'Your opinion has been submitted. Thank you!');
        ;

    }


    public function Record_blog_comment(Request $request){

        $blogcomments = new Blogcomment();
    
    
        $blogcomments->name = $request->name;
        $blogcomments->email = $request->email;
        $blogcomments->website = $request->website;
        $blogcomments->comment = $request->comment;
    
    
        $blogcomments->save();
    
    
        return back()->with ('Blog_comment_submitted', 'Your comment has been submited successfully!');
    
        }

    public function Registerblogcomment(Request $request){

        $blogs = new Blog();
    
    
        $blogs->name = $request->name;
        $blogs->email = $request->email;
        $blogs->website = $request->website;
        $blogs->comment = $request->comment;
    
    
        $blogs->save();
    
    
        return back()->with ('Blog_comment_submitted', 'Your comment has been submited successfully!');
    
        }


}


