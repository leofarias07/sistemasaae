<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Servicos;
use App\Models\Servatendido;
use App\Models\Setorcomercial;

use App\Http\Requests\AtendimentoAtenFormRequest;
use Illuminate\Support\Facades\Redirect;
use DB;

class ServicoAtenController extends Controller
{
      public function index(Request $request)
    {
    	if ($request){
            $query=trim($request->get('searchText'));
            $servatendidos=DB::table('servatentidos as sa')
            ->join('servicos as se', 'sa.servicos_id','=','se.id' )
            ->join('setorcomercials as st','se.setorcomercials_id','=','st.id')
            ->select('sa.id','sa.quantidade','sa.dataacao','se.descricao as descricaosetor','st.descricao as descricaoservico')

            ->where('sa.dataacao','LIKE', '%'.$query.'%')
            ->where('se.condicao','=','1')
            ->orderBy('sa.id','desc')
            ->paginate('7');
            return view('admin.servatendido.index',[
                "servatendidos"=>$servatendidos,"searchText"=>$query
            ]);
    }

    	
    }
}
