<?php

namespace App\Http\Controllers;

use App\Models\Agriculteur;
use App\Models\Intervention;
use App\Models\Parcelle;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboardcontroller extends Controller
{
    public $register,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11;


    public function index()
    {
        $this->q1=Agriculteur::orderBy('agr_nom')->get();
        $this->q2=Parcelle::where('par_superficie','>',500)->get();
        $this->q3=Parcelle::where('par_lieu','=','Arith')->whereBetween('par_superficie',[200,500])->get();
        $this->q4=Parcelle::join('agriculteurs', 'parcelles.par_prop', '=', 'agriculteurs.id')->get(['parcelles.*','agriculteurs.agr_nom']);
        $this->q5=Parcelle::sum('par_superficie');
        $this->q6=Parcelle::select('par_nom')->orderBy('par_superficie', 'desc')->first();
        $this->q7=Parcelle::select('par_nom')->orderBy('par_superficie', 'asc')->first();
        $from = date('2011-11-07');
        $to = date('2012-02-09');
        $this->q8 = Intervention::whereBetween('int_debut',[$from,$to])->get();
        $this->q9 = Intervention::join('parcelles','interventions.int_par_id','=','parcelles.par_id')->get(['interventions.*','parcelles.par_nom']);
        $this->q10 = Intervention::join('parcelles','interventions.int_par_id','=','parcelles.par_id')->join('employes','interventions.int_emp_nss','=','emp_nss')->get(['interventions.*','parcelles.par_nom','employes.emp_nom','employes.emp_prn']);
        $this->q11 = Intervention::join('employes','interventions.int_emp_nss','=','emp_nss')->where('employes.emp_nom','=','Pernet')->get();

        if(Auth::user()->hasRole('user')){
            return view('userdash',[
                'q1'=>$this->q1,
                'q2'=>$this->q2,
                'q3'=>$this->q3,
                'q4'=>$this->q4,
                'q5'=>$this->q5,
                'q6'=>$this->q6,
                'q7'=>$this->q7,
                'q8'=>$this->q8,
                'q9'=>$this->q9,
                'q10'=>$this->q10,
                'q11'=>$this->q11,
            ]);
        }elseif(Auth::user()->hasRole('editor')){
            return view('editordash',[
                'q1'=>$this->q1,
                'q2'=>$this->q2,
                'q3'=>$this->q3,
                'q4'=>$this->q4,
                'q5'=>$this->q5,
                'q6'=>$this->q6,
                'q7'=>$this->q7,
                'q8'=>$this->q8,
                'q9'=>$this->q9,
                'q10'=>$this->q10,
                'q11'=>$this->q11,
            ]);
        }elseif(Auth::user()->hasRole('admin')){
            return view('dashboard',[
                'q1'=>$this->q1,
                'q2'=>$this->q2,
                'q3'=>$this->q3,
                'q4'=>$this->q4,
                'q5'=>$this->q5,
                'q6'=>$this->q6,
                'q7'=>$this->q7,
                'q8'=>$this->q8,
                'q9'=>$this->q9,
                'q10'=>$this->q10,
                'q11'=>$this->q11,
            ]);
        }
    }

    public function agriculteur()
    {
        return view('agriculteursdash');
    }

    public function allquestion()
    {
        $this->q1=Agriculteur::orderBy('agr_nom')->get();
        $this->q2=Parcelle::where('par_superficie','>',500)->get();
        $this->q3=Parcelle::where('par_lieu','=','Arith')->whereBetween('par_superficie',[200,500])->get();
        $this->q4=Parcelle::join('agriculteurs', 'parcelles.par_prop', '=', 'agriculteurs.id')->get(['parcelles.*','agriculteurs.agr_nom']);
        $this->q5=Parcelle::sum('par_superficie');
        $this->q6=Parcelle::select('par_nom')->orderBy('par_superficie', 'desc')->first();
        $this->q7=Parcelle::select('par_nom')->orderBy('par_superficie', 'asc')->first();
        $from = date('2011-11-07');
        $to = date('2012-02-09');
        $this->q8 = Intervention::whereBetween('int_debut',[$from,$to])->get();
        $this->q9 = Intervention::join('parcelles','interventions.int_par_id','=','parcelles.par_id')->get(['interventions.*','parcelles.par_nom']);
        $this->q10 = Intervention::join('parcelles','interventions.int_par_id','=','parcelles.par_id')->join('employes','interventions.int_emp_nss','=','emp_nss')->get(['interventions.*','parcelles.par_nom','employes.emp_nom','employes.emp_prn']);
        $this->q11 = Intervention::join('employes','interventions.int_emp_nss','=','emp_nss')->where('employes.emp_nom','=','Pernet')->get();

        return view('allquestion',[
            'q1'=>$this->q1,
            'q2'=>$this->q2,
            'q3'=>$this->q3,
            'q4'=>$this->q4,
            'q5'=>$this->q5,
            'q6'=>$this->q6,
            'q7'=>$this->q7,
            'q8'=>$this->q8,
            'q9'=>$this->q9,
            'q10'=>$this->q10,
            'q11'=>$this->q11,
        ]);
      


    }
}
