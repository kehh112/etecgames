<?php

namespace App\Controllers;

class UsuarioController extends BaseController{

    public function index(){
        echo view('header');
        echo view('cadUsuario');
        echo view('footer');      
    }

    public function inserirUsuario (){
        $data['msg'] = '';

        $request = service('request');

        if($request->getMethod() === 'post'){
            $UsuarioModelo = new \App\Models\UsuarioModel();
            $opcao = ['cost' => 8];

            $senhaCrip = password_hash($request->getPost('senhausu'), PASSWORD_BCRYPT, $opcao);
            $UsuarioModelo->set('emailusu', $request->getPost('emailusu'));
            $UsuarioModelo->set('senhausu', $senhaCrip);
            if($UsuarioModelo->insert()){
                $data['msg'] = "Informações cadastradas com sucesso";
            }else{
                $data['msg'] = "Informações não cadastrada";
            }

        }
        echo view('header');
        echo view('cadUsuario', $data);
        echo view('footer');

    }

    public function todosUsuarios(){
        $UsuarioModel = new \App\Models\UsuarioModel();
        $registros = $UsuarioModel->find();
        $data['usuarios'] = $registros;

        $request = service ('request');
        $codusuario = $request->getPost('codusu');
        $codusuAlterar = $request->getPost('codusuAlterar');

        if($codusuario){
            $this->deletarUsuario($codusuario);
            return redirect()->to(base_url('UsuarioController/todosUsuarios'));
        }

        if($codusuAlterar){
          return $this->alterarUsuario();
        }

        echo view('header');
        echo view('listaUsuario', $data);
        echo view('footer');
    
    }

    public function listaCodUsuario(){
        $request = service('request');
        $usuarioModel = new \App\Models\UsuarioModel();
        $codusuario = $request->getPost('codusu');
        $registros = $usuarioModel->find($codusuario);

        $data['usuario'] = $registros;

        $codusuAlterar = $request->getPost('codusuAlterar');
        $codUsuDel = $request->getPost('codUsuDel');

        if ($codUsuDel) {
            $this->deletarUsuario($codUsuDel);
            return redirect()->to(base_url('UsuarioController/listaCodUsuario/'));
        }

        if ($codusuAlterar) {
            return $this->alterarUsuarioCod();
        }

        echo view ('header');
        echo view ('listaCodUsu',$data);
        echo view ('footer');

    }

    public function alterarUsuario(){

        $request = service ('request');
        $codusuAlterar = $request->getPost('codusuAlterar');
        $emailUsu = $request->getPost('emailUsu');
        

        $UsuarioModel = new \App\Models\UsuarioModel();
        $registros = $UsuarioModel->find($codusuAlterar);

        if($request->getPost('emailUsu')){
            $registros->emailusu = $emailUsu;
            $UsuarioModel->update($codusuAlterar, $registros);

            return redirect()->to(base_url('UsuarioController/todosUsuarios/'));

        }

        $data['usuario'] = $registros;

        echo view ('header');
        echo view ('alterarFormUsuario',$data);
        echo view ('footer');
    }
    public function deletarCodUsuario(){
        $request = service ('request');
        $codusuario = $request->getPost('codusu');

        $this->deletarUsuario($codusuario);
        

    }

    public function formAlterar(){

    }

    public function deletarUsuario($codusuario=null){

        if(is_null($codusuario)){
            return redirect()->to(base_url('UsuarioController/todosUsuarios'));
        }

        $UsuarioModel = new \App\Models\UsuarioModel();
        if($UsuarioModel->delete($codusuario)){
            return redirect()->to(base_url('UsuarioController/todosUsuarios'));
        }else{
            return redirect()->to(base_url('UsuarioController/todosUsuarios'));
        }
            return redirect()->to(base_url('UsuarioController/todosUsuarios'));
    }


public function alterarUsuarioCod()
{        
    $request = service('request');
    $codusuAlterar = $request->getPost('codusuAlterar');
    $emailUsu = $request->getPost('emailUsu');

    $UsuarioModel = new \App\Models\UsuarioModel();
    $registros = $UsuarioModel->find($codusuAlterar);  

    if ($request->getPost('emailUsu')) {
        $registros->emailusu = $emailUsu;
        $UsuarioModel->update($codusuAlterar,$registros);

        return redirect()->to(base_url('UsuarioController/listaCodUsuario/'));
    }

    $data['usuario'] = $registros;

    echo view('header');
    echo view('alterarFormUsuario', $data);
    echo view('footer');
}

public function deletarUsuarioCod($codusuario = null)
    {
        if (is_null($codusuario)) {
            return redirect()->to(base_url('UsuarioController/listaCodUsuario'));
        }

        $UsuarioModel = new \App\Models\UsuarioModel();
        if ($UsuarioModel->delete($codusuario)) {
            return redirect()->to(base_url('UsuarioController/listaCodUsuario'));
        } else {
            return redirect()->to(base_url('UsuarioController/listaCodUsuario'));
        }
    }
}


?>