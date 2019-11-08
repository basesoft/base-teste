<?php

namespace App\Http\Controllers\Api;
use Illuminate\Database\Eloquent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dado;
class DadoController extends Controller
{

    public function add(Request $request){

    	try{
    		$dado = new Dado();
            if(!preg_match('/^[0-9]{5}-[0-9]{3}$/', $request->cep)) {
              echo "Digite um CEP válido, por favor. Ex.: 00000-000.";
            } else{ 
                $dado->cep= $request->cep;
                $dado->endereco= $request->endereco;
                $dado->bairro= $request->bairro;
                $dado->municipio= $request->municipio;
                $dado->estado= $request->estado;
                $dado->tipo_imovel= $request->tipo_imovel;
                $dado->nome_proprietario= $request->nome_proprietario;
                $dado->save();
             
            return['retorno'=>'Cadastrado com Sucesso!'];   

            }


    	} catch(\Exception $erro){

    		return['retorno'=>'erro','details'=>$erro];
    	}

    }

    public function list(){

    	$dado = Dado::paginate(1);
    	return $dado;

    }

    public function bairro($bairro){

    	$dado = Dado::where('bairro',$bairro)->orderBy('bairro')->paginate(1);
        return $dado;
    }

   
    public function municipio($municipio){

        $dado = Dado::where('municipio',$municipio)->orderBy('municipio')->get();
        return $dado;
    }

    public function update(Request $request, $id){

    	try {

    		 if(!preg_match('/^[0-9]{5}-[0-9]{3}$/', $request->cep)) {
              echo "Digite um CEP válido, por favor. Ex.: 00000-000.";
            } else{ 
                $dado->cep= $request->cep;
                $dado->endereco= $request->endereco;
                $dado->bairro= $request->bairro;
                $dado->municipio= $request->municipio;
                $dado->estado= $request->estado;
                $dado->tipo_imovel= $request->tipo_imovel;
                $dado->nome_proprietario= $request->nome_proprietario;
                $dado->save();
    	  return['retorno'=>'Atualizado com Sucesso!'];   

          
            }


        } catch(\Exception $erro){

            return['retorno'=>'erro','details'=>$erro];
        }

    }

      public function delete($id){

      	try{

    		$dado = Dado::find($id);
    		$dado->delete();
             return['retorno'=>'Excluído com Sucesso!']; 

       } catch(\Exception $erro){

            return['retorno'=>'erro','details'=>$erro];
        }


}

}

