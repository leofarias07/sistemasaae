<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Servicos;
use App\Http\Requests\ServicoFormRequest;
use Illuminate\Support\Facades\Redirect;
use DB;

class ServicoController extends Controller
{
   
     public function __construct()
        {
           
        }

    public function index(Request $request)
    {
    	if ($request){
            $query=trim($request->get('searchText'));
            $servicos=DB::table('servicos as se')
            ->join('setorcomercials as st', 'se.setorcomercials_id','=','st.id' )
            ->select('se.id','se.descricao','st.descricao as descricaosetor')

            ->where('se.descricao','LIKE', '%'.$query.'%')
            ->where('se.condicao','=','1')
            ->orderBy('se.id','desc')
            ->paginate('7');
            return view('admin.servico.index',[
                "servicos"=>$servicos,"searchText"=>$query
            ]);
    }

    	
    }

        public function create()
    {
    	$setores=DB::table('setorcomercials')
    	->where('condicao','=','1')
    	->get();

    	return view('admin.servico.create',["setores"=>$setores]);
    }

        public function store(ServicoFormRequest $request)
        {
        $servico = new Servicos;
        $servico->setorcomercials_id=$request->get('setorcomercials_id');
        $servico->descricao=$request->get('descricao');
       
        
        $servico->condicao=1;
        $servico->save();
        return Redirect::to('admin/servico');




    		
        }
    	
       public function show($id)
    {

    	return view("admin.servico.show",
            ["servico"=>Servicos::findOrfail($id)]);
    	
    }

      public function edit($id)
    {
    	$servico = Servicos::findOrfail($id);
    	$setores = DB::table('setorcomercials')
    	->where('condicao','=','1')->get();
        return view("admin.servico.edit",
            ["servico"=>$servico, "setores"=>$setores]);
    	
    	
    }

       public function update(ServicoFormRequest $request, $id)
    {
        $servico=Servicos::findOrfail($id);
       	$servico->setorcomercials_id=$request->get('setorcomercials_id');
        $servico->descricao=$request->get('descricao');
        $servico->update();
        return Redirect::to('admin/servico');

    }

        public function destroy($id)
    {
        
        $servico=Setorcomercial::findOrFail($id);
        $servico->condicao='0';
        $servico->update();
        return Redirect::to('admin/servico');
        
    }
}
