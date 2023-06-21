<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Contract\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // FirebaseAuth.getInstance().getCurrentUser();
      try {
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        return view('home');
      } catch (\Exception $e) {
        return $e;
      }

    }

    public function conteudo()
    {
      // FirebaseAuth.getInstance().getCurrentUser();
      try {
        $usid = Session::get('uid');
        $Userid = app('firebase.auth')->getUser($usid);
        return view('material_aulas/conteudo');
      } catch (\Exception $e) {
        return $e;
      }

    }

    public function teste_de_conhecimento()
    {
      // FirebaseAuth.getInstance().getCurrentUser();
      try {
        // $useid = Session::get('uid');
        // $User = app('firebase.auth')->getUser($useid);
        return view('desafios/teste_de_conhecimento');
      } catch (\Exception $e) {
        return $e;
      }

    }

    public function quiz(){
        try{
            return view('desafios/quiz');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function introducao(){
        try{
            return view('material_aulas/introducao_conhecimento');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function dados_p(){
        try{
            return view('material_aulas/dados_pessoais');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function dados_s(){
        try{
            return view('material_aulas/dados_sensiveis');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function dados_a(){
        try{
            return view('material_aulas/dados_anonimos');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function agentes(){
        try{
            return view('material_aulas/agentes_tratamento');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function tratamento(){
        try{
            return view('material_aulas/tratamento_dados');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function seguranca(){
        try{
            return view('material_aulas/seguranca_sigilo');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function sancoes(){
        try{
            return view('material_aulas/sancoes');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function certificacao(){
        try{
            return view('certificacao');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function termos(){
        try{
            return view('termos');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function customer()
    {
      $userid = Session::get('uid');
      return view('customers',compact('userid'));
    }
}
