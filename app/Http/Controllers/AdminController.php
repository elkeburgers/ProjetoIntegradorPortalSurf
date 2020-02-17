<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User; 
use App\Administrator;  
use App\Status; 
// use App\Users_group;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    //criando usuário admin:
    public function createAdmin(Request $request){

        if($request->isMethod('GET')){
            
            return view('Admin.registerAdmin');

        } else {

            //criando novo usuário admin na tabela Administrators:
            $newAdmin = new Administrator();
            $newAdmin->name = $request->nameAdmin; 
            $newAdmin->user_id = $newUser->id;;

            $result = $newAdmin->save();

            //enviando result para a view:
            return view('Admin.registerAdmin', ["result"=>$result]); 
        }
    }
        
        //editando usuário admin: 
        public function updateAdmin(Request $request, $id=0){
            
            if($request->isMethod('GET')){
                
                //encontrando o id em Users:
                $user = User::find($id);
                
                //encontrando o name em Administrators:
                $nameAdmin = Administrator::where('user_id', $id)->value('name');
                
                //enviando os objetos para a view: 
                if($user){
                    return view('Admin.updateAdmin', ["user"=>$user, "nameAdmin"=>$nameAdmin]);
                } else {
                    return view('Admin.updateAdmin');
                }
            } else {
                
                //alterando email, senha e status na tabela Users:
                $user = User::find($request->idAdmin); 
                $user->email = $request->emailAdmin;
                $user->password = Hash::make($request->passwordAdmin);
                // $user->status_id = $request->statusAdmin;
                
                $result = $user->save();
                
                //alterando nome na tabela Administrators: 
                $admin = Administrator::where('user_id', $user->id)->first();
                $admin->name = $request->nameAdmin;
        
                $result = $admin->save();
        
                return view('Admin.updateAdmin', ["result"=>$result]);
            }
    }

    //deletando usuário:
    public function deleteAdmin(Request $request, $id=0){
        $result = User::destroy($id);
        if($result){
            return redirect('/admin'); 
        }
    } 

    //visualizando a lista de usuários tipo admin 
    public function viewAllAdmin(Request $request){ 

        $listAdmin = User::join('administrators', 'users.id', '=', 'administrators.user_id')->select('users.email', 'users.id', 'users.status_id', 'users.created_at', 'users.updated_at',  'administrators.name')->get();

        return view('Admin.listAdmin', ["listAdmin"=>$listAdmin]); 
    }


    //visualizando a lista de usuários 
    public function viewAllUsers(Request $request){

        $listUsers = User::select('users.id', 'users.name', 'users.email', 'users.cpf', 'users.gender', 'users.state', 'users.city', 'users.phone1', 'users.phone2', 'users.emailNotification', 'users.created_at', 'users.updated_at')->get();

        return view('Admin.allUsers', ["allUsers"=>$allUsers]);
    }
           
    //visualizando a lista de ofertas
    public function viewAllOfertas(Request $request){

        $listOfertas = Desapego::select('desapego_produtos.id', 'desapego_produtos.descriptionProduct', 'desapego_produtos.priceProduct', 'desapego_produtos.withdrawalState', 'desapego_produtos.withdrawalCity', 'desapego_produtos.withdrawalNeighborhood', 'desapego_produtos.phone','desapego_produtos.user_id', 'desapego_produtos.created_at', 'desapego_produtos.updated_at')->get();

        return view('Admin.allOfertas', ["allOfertas"=>$allOfertas]);
    }

}