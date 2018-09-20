<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setorcomercial;
use App\Http\Requests\arrecadacaoValidationFormRequest;
use App\Http\Requests\SetorFormRequest;
use Illuminate\Support\Facades\Redirect;
use DB;

class ArrecadacaoController extends Controller
{


    public function index(Request $request)
    {
    	if ($request){
            $query=trim($request->get('searchText'));
            $arrecadacaos=DB::table('arrecadacaos')
            ->where('mes','LIKE', '%'.$query.'%')
            ->where('condicao','=','1')
            ->orderBy('id','desc')
            ->paginate('7');
            return view('admin.arrecadacao.index',[
                "arrecadacaos"=>$arrecadacaos,"searchText"=>$query
            ]);
        }

    	
    }

        public function create()
    {

    	return view('admin.arrecadacao.create');
    }

        public function store(ArrecadacaoFormRequest $request)
        {
        $arrecadacao = new Arrecadacao;
       
        $arrecadacao->mes=$request->get('mes');
        $arrecadacao->ano=$request->get('ano');
        $arrecadacao->faturamento=$request->get('faturamento');
        $arrecadacao->estorno=$request->get('estorno');
        $arrecadacao->saldofaturado=$request->get('saldofaturado');
        $arrecadacao->contafaturada=$request->get('contafaturada');
        $arrecadacao->arrecadacao=$request->get('arrecadacao');
        $arrecadacao->contasarrecadadas=$request->get('contasarrecadadas');

        $arrecadacao->condicao=1;
        $arrecadacao->save();
        return Redirect::to('admin/arrecadacao');




    		
        }
    	
       public function show($id)
    {

    	return view("admin.arrecadacao.show",
            ["arrecadacao"=>Arrecadacao::findOrfail($id)]);
    	
    }

      public function edit($id)
    {
        return view("admin.arrecadacao.edit",
            ["arrecadacao"=>Arrecadacao::findOrfail($id)]);
    	
    	
    }

       public function update(ArrecadacaoFormRequest $request, $id)
    {
        $arrecadacao=Arrecadacao::findOrfail($id);
        $arrecadacao->mes=$request->get('mes');
        $arrecadacao->ano=$request->get('ano');
        $arrecadacao->faturamento=$request->get('faturamento');
        $arrecadacao->estorno=$request->get('estorno');
        $arrecadacao->saldofaturado=$request->get('saldofaturado');
        $arrecadacao->contafaturada=$request->get('contafaturada');
        $arrecadacao->arrecadacao=$request->get('arrecadacao');
        $arrecadacao->contasarrecadadas=$request->get('contasarrecadadas');
        $setor->update();
        return Redirect::to('admin/arrecadacao');

    }

        public function destroy($id)
    {
        
        $arrecadacao=Arrecadacao::findOrFail($id);
        $arrecadacao->condicao='0';
        $arrecadacao->update();
        return Redirect::to('admin/arrecadacao');
        
    }
}
