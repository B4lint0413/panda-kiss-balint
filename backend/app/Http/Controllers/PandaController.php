<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePandaRequest;
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
                        $pandas = Panda::orderBy('birth', 'asc')->get();
                    }else if($request->get('order') == 'asc'){
                        $pandas = Panda::orderBy('birth', 'desc')->get();
                    }
                }
                else{
                    $pandas = Panda::orderBy($request->get('orderBy'), $request->get('order'))->get();
                }
            }
        }
        return PandaResource::collection($pandas);
    }

    public function show($id){
        return new PandaResource(Panda::findOrFail($id));
    }

    public function destroy($id){
        Panda::findOrFail($id)->delete();
    }

    public function store(StorePandaRequest $request){
        $data = $request->validated();
        $panda = Panda::create($data);
        return new PandaResource($panda);
    }
}
