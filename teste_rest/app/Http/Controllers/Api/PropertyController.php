<?php

namespace App\Http\Controllers\Api;

use App\Property;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class PropertyController extends Controller
{

    public function __construct(Property $property)
    {
        $this->property = $property;
    }


    public function index()
    {
        $property = new Property;

        if (request()->has('district')) {
            $property = $property->where('district', request('district'));
        } 
        
        if (request()->has('municipio')) {
            $property = $property->where('municipio', request('municipio'));
        }
            
        if (request()->has('sort')) {
            $property = $property->orderBy('district', request('sort'))
                                 ->orderBy('municipio', request('sort'));                    
        } 


        $property = $property->paginate(10)
                            ->appends([
                                'district' => request('district'),
                                'municipio' => request('municipio'),
                                'sort' => request('sort')
                            ]);

                                    

        $data = ['data' => $property];


         return response()->json($data);
    }


    public function show(Property $id)
    {
        $property = $this->property->find($id);

        if(! $property) return response()->json(['data' => ['msg' => 'Imóvel não encontrado !']], 404);

        $data = ['data' => $property];
        return response()->json($data);
    }


    public function store(Request $request)
    {
        try {
            $propertyData = $request->all();
            $this->property->create($propertyData);

            $return = ['data' => ['msg' => 'Imóvel criado com sucesso !']];
            return response()->json($return, 201);

        } catch (\Exception $e) {
            if(config('app.debug')) {
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010));
            }
            return response()->json(ApiError::errorMessage('Houve um erro ao realizar a operação de inserção !', 1010));
        }
    }


    public function update(Request $request, $id)
    {
        try {
            $propertyData = $request->all();
            $property = $this->property->find($id);
            $property->update($propertyData);

            $return = ['data' => ['msg' => 'Imóvel atualizado com sucesso !']];
            return response()->json($return, 201);

        } catch (\Exception $e) {
            if(config('app.debug')) {
                return response()->json(ApiError::errorMessage($e->getMessage(), 1011));
            }
            return response()->json(ApiError::errorMessage('Houve um erro ao realizar a operação de edição !', 1011));
        }
    }


    public function delete(Property $id)
    {
        try {
            $id->delete();

            return response()->json(['data' => ['msg' => 'Imóvel no Endereço: ' . $id->address . ' foi removido com sucesso !']], 200);

        } catch (\Exception $e) {
            if(config('app.debug')) {
                return response()->json(ApiError::errorMessage($e->getMessage(), 1012));
            }
            return response()->json(ApiError::errorMessage('Houve um erro ao realizar a operação de remoção !', 1012));
        }
    }

}