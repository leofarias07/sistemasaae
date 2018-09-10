<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setorcomercial;
use App\Http\Requests\SetorValidationFormRequest;

class SetorController extends Controller
{

	private $setorcomercial;
	 public function __construct(SetorComercial $setorcomercial)
	    {

	    	$this->setorcomercial = $setorcomercial;
	    }

    public function index(Setorcomercial $setorcomercial)
    {
    	$setorcomercials = $this->setorcomercial->all();

    	return view('admin.setor.index',compact('setorcomercials'));
    }

        public function create()
    {

    	return view('admin.setor.create')
;    }

        public function store(SetorValidationFormRequest $request)
    {

    	
    	



    	$dataform = $request->except('_token');
    	


    	$insert = $this->setorcomercial->insert($dataform);

    	if($insert['success'])
    		return redirect()->route('setor.index');
    	else
    		return 'Falha ao inserir';
    }
       public function show($id)
    {

    	return "Show($id)";
    	
    }

      public function tests()
    {

    	$setor = $this->setorcomercial->find(3);
    	dd($setor->descricao);
    	

    	/*
    	$insert = $this->setorcomercial->create([

    		'descricao' => '115 - Atendimento',
    	]);

    	if($insert)
    		return 'Inserido com sucesso';
    	else
    		return 'Falha ao inserir';
    	
    	*/
    	
    }

 


}
