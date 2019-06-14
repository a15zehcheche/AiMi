<?php

namespace AiMi\Controller;

use AiMi\Bbdd\UsuariDao;
use AiMi\Models\Usuari;

class UsuariManager
{
    public function __construct()
    {
        $this->usuariDao = new UsuariDao();
    }

    public function findAll()
    {
        return $this->usuariDao->findAll();
    }

    public function save($body,$imageFile)
    {
        $usauri = new Usuari();
        if($imageFile){
            $imagePath = ImageAlmacenator::getInstance()->saveImage($imageFile);
        }else{
            $imagePath = "";
        }


        try {
            $usauri->photo_path = $imagePath;
            $usauri->USUARI_NOMBRE =  $body->USUARI_NOMBRE;
            $usauri->USUARI_PASSWORD =  md5($body->USUARI_PASSWORD);
            $usauri->NOMBRE = $body->NOMBRE;
            $usauri->PERMISO =  $body->PERMISO;
            return array(
                'done' => $this->usuariDao->save($usauri)
            );
        } catch (\Exception $e) {
            return array(
                'done' => false,
                'err' => $e->getMessage(),
            );
        }
    }
    public function update($body, $id)
    {
        $usuari = Usuari::find($id);

        if (!$usuari) {
            return [
                'done' => false
            ];
        }
        try {
            if (array_key_exists('TEXTO', (array)$body)) {
                $usuari->TEXTO =  $body->TEXTO;
            } else {
                return array(
                    'done' => false,
                    'message' => 'Require TEXTO'
                );
            }
            return array(
                'done' => $this->usuariDao->save($usuari)
            );
        } catch (\Exception $e) {
            return array(
                'done' => false,
                'err' => $e->getMessage(),
            );
        }
    }

    public function delete($id)
    {
        $usuari = $this->usuariDao->findById($id);

        if (!$usuari) {
            return [
                'done' => false
            ];
        }

        try {
            return array("done" => $this->usuariDao->delete($usuari));
        } catch (\Exception $e) {
            return array(
                'done' => false,
                'err' => $e->getMessage(),
            );
        }
    }
    public static function login($user_name,$user_password){
        $usuari = Usuari::where('USUARI_NOMBRE','=', $user_name)
            ->first();

        if($usuari->USUARI_PASSWORD == md5($user_password) ){
            session_start();
            $_SESSION["USUARI_NOMBRE"]= $usuari->USUARI_NOMBRE;
            $_SESSION["PERMISO"]= $usuari->PERMISO;
            header('Location: http://localhost:8000');
            return $usuari;

        }else{
           header('Location: http://localhost:8000/login');
           return [
                'done' => false
            ];
        }

    }
}
