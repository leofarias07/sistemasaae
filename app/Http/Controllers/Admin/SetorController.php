<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setorcomercial;
use App\Http\Requests\SetorValidationFormRequest;
use App\Http\Requests\SetorFormRequest;
use Illuminate\Support\Facades\Redirect;
use DB;


class SetorController extends Controller
{

	
	private $setorcomercial;
     public function __construct(SetorComercial $setorcomercial)
        {
            $this->setorcomercial = $setorcomercial;
        }

    public function index(Request $request)
    {
    	if ($request){
            $query=trim($request->get('searchText'));
            $setores=DB::table('setorcomercials')
            ->where('descricao','LIKE', '%'.$query.'%')
            ->where('condicao','=','1')
            ->orderBy('id','desc')
            ->paginate('7');
            return view('admin.setor.index',[
                "setores"=>$setores,"searchText"=>$query
            ]);
        }

    	
    }

        public function create()
    {

    	return view('admin.setor.create');
    }

        public function store(SetorFormRequest $request)
        {
        $setor = new Setorcomercial;
       
        $setor->descricao=$request->get('descricao');
        $setor->condicao=1;
        $setor->save();
        return Redirect::to('admin/setor');




    		
        }
    	
       public function show($id)
    {

    	return view("admin.setor.show",
            ["setor"=>Setorcomercial::findOrfail($id)]);
    	
    }

      public function edit($id)
    {
        return view("admin.setor.edit",
            ["setor"=>Setorcomercial::findOrfail($id)]);
    	
    	
    }

       public function update(SetorFormRequest $request, $id)
    {
        $setor=Setorcomercial::findOrfail($id);
        $setor->descricao=$request->get('descricao');
        $setor->update();
        return Redirect::to('admin/setor');

    }

        public function destroy($id)
    {
        
        $setor=Setorcomercial::findOrFail($id);
        $setor->condicao='0';
        $setor->update();
        return Redirect::to('admin/setor');
        
    }


 


}
