<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogcomment;
use App\Models\Blog;

class BlogsController extends Controller


{ 
    public function blog_single(){

        return 'blog_single';
    }

    public function blog(){

        return 'blog';
    }

    public function caseofcovidexblog(){

        return 'caseofcovidexblog';
    }

  
    public function matrimonialpropertyblog(){

        return 'matrimonialpropertyblog';
    }

    public function mentalhealthamidstblog(){

        return 'mentalhealthamidstblog';
    }

    public function nexusbetweenblog(){

        return 'nexusbetweenblog';
    }

    public function nabanjja_blog(){

        return 'nabanjja_blog';
    }


public function Instability_in_Karamoja()
    {

        return 'Instability_in_Karamoja';
    }

  public function coffee_deal()
    {

        return 'coffee_deal';
    }

public function unemployement()
    {

        return 'unemployement';
    }

public function Saving_the_VIPs()
    {

        return 'Saving_the_VIPs';
    }
    
public function accessibilty_to_loans()
    {

        return 'accessibilty_to_loans';
    }
    
    public function need_for_mental_health()
    {

        return 'need_for_mental_health';
    }

    public function The_Need_for_Climate()
    {

        return 'The_Need_for_Climate';
    }
    
    public function Uganda’s_Inflation()
    {

        return 'Uganda’s_Inflation';
    }
    
    public function blog_business_category()
    {

        return 'blog_business_category';
    }
    
    public function blog_family_category()
    {

        return 'blog_family_category';
    }
     public function blog_development_category()
    {

        return 'blog_development_category';
    }
      public function blog_development1_category()
    {

        return 'blog_development1_category';
    }
    
    
public function blogs_education_category()
    {

        return 'blogs_education_category_category';
    }
public function blogs_climate_category()
    {

        return 'blogs_climate_category';
    }
    public function blogs_religion_category()
    {

        return 'blogs_religion_category';
    }
    
    
    
public function blog1()
    {

        return 'blog1';
    }
public function blog2()
    {

        return 'blog2';
    }
    public function blog3()
    {

        return 'blog3';
    }
    
    
    public function teenage_pregnacies()
    {

        return 'teenage_pregnacies';
    }
public function cognitive_development()
    {

        return 'cognitive_development';
    }
public function democratic_governance()
    {

        return 'democratic_governance';
    }
    
    public function public_Investment()
    {

        return 'public_Investment';
    }

    public function Recordblogcomment(Request $request){

    $blogs = new Blogcomment();


    $blogs->name = $request->name;
    $blogs->email = $request->email;
    $blogs->comment = $request->comment;
    


    $blogs->save();


    return back()->with ('Blog_comment_submitted', 'Your comment has been submited successfully!');

    }


}
