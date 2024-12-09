<?php

namespace App\Http\Controllers;

use App\Http\Resources\PandaResource;
use App\Models\Panda;
use Illuminate\Http\Request;

class PandaController extends Controller
{
    public function index(Request $request){
        $pandas = Panda::all();

        if($request->has('orderBy')){
            if(!in_array($request->get('orderBy'), ['age', 'name'])){
                abort(400);
            }
            
            if($request->has('order')){
                if(!in_array($request->get('order'), ['asc', 'desc'])){
                    abort(400);
                }

                if($request->get('orderBy') == 'age'){
                    if($request->get('order') == 'desc'){
                        $pandas = $pandas->sortBy('birth');
                    }else if($request->get('order') == 'asc'){
                        $pandas = $pandas->sortByDesc('birth');
                    }
                }
                if($request->get('order') == 'name'){
                    if($request->get('order') == 'desc'){
                        $pandas = $pandas->sortByDesc('name');
                    }else if($request->get('order') == 'asc'){
                        $pandas = $pandas->sortBy('name');
                    }
                }
            }
        }
        return PandaResource::collection($pandas);
    }

    public function show($id){
        return new PandaResource(Panda::findOrFail($id));
    }
}
