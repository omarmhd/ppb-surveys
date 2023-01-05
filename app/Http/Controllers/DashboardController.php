<?php

namespace App\Http\Controllers;

use App\Models\CurrantSurvey;
use App\Models\Survey;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index(){




      $survey_count=Survey::count("id");
      $currant_count=CurrantSurvey::where("status","0")->count();
      $employee=User::where("role","employee");
      $evaluator=User::where("role","evaluator");
      $employee_count= $employee->count();
      $evaluator_count= $evaluator->count();
      $employees=$employee->get();
      $evaluators=$evaluator->get();
      $users_count=User::count();




      return view("dashboard",compact("employees","evaluators","employee_count","evaluator_count","survey_count",'users_count','currant_count'));

  }
}
