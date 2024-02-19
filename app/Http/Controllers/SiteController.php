<?php

namespace App\Http\Controllers;

use App\Models\TextWidget;
use Faker\Provider\ar_EG\Text;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Deal with the about page and its content&configuration
class SiteController extends Controller
{
    public function about (): View{
        $widget = TextWidget::query()
        ->where('key','=','about-page')
        ->where('active','=',true)
        ->first();

        if(!$widget){
           throw new NotFoundHttpException();
        }	
        return view('about',compact('widget'));
    }
}
