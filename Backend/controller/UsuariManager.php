<?php

namespace AiMi\Controller;

use AiMi\Bbdd\UsuariDao;
use AiMi\Models\Usuari;
use AiMi\Constants\ConstantsJWT;
use Firebase\JWT\JWT;

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
        $usuari = new Usuari();
        if($imageFile){
            $imagePath = ImageAlmacenator::getInstance()->saveImage($imageFile);
        }else{
            $imagePath = "";
        }


        try {
            $usuari->photo_path = $imagePath;
            $usuari->USUARI_NOMBRE =  $body->USUARI_NOMBRE;
            $usuari->USUARI_PASSWORD =  md5($body->USUARI_PASSWORD);
            $usuari->NOMBRE = $body->NOMBRE;
            $usuari->PERMISO =  $body->PERMISO;
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
    public function update($body, $id)
    {
        $usuari = Usuari::find($id);

        if (!$usuari) {
            return [
                'done' => false
            ];
        }
        try {
            if (array_key_exists('NOMBRE', (array)$body)) {
                $usuari->NOMBRE =  $body->NOMBRE;
            }
            if (array_key_exists('PASSWORD_OLD', (array)$body) && array_key_exists('PASSWORD_NEW', (array)$body)) {
                if( $usuari->USUARI_PASSWORD == md5($body->PASSWORD_OLD)){
                    $usuari->USUARI_PASSWORD =  md5($body->PASSWORD_NEW);
                }else{
                    return[
                        'done' =>false
                    ];
                }
            }

            $token = array(
                "iss" => ConstantsJWT::iat,
                "aud" => ConstantsJWT::aud,
                "iat" => ConstantsJWT::iat,
                "nbf" => ConstantsJWT::nbf,
                "data" => array(
                    "ID" => $usuari->ID,
                    "USUARI_NOMBRE" => $usuari->USUARI_NOMBRE,
                    "NOMBRE"=> $usuari->NOMBRE,
                    "photo_path"=> $usuari->photo_path,
                    "PERMISO" => $usuari->PERMISO,
                    "ESTADO" => $usuari->ESTADO
                )
            );
            // generate jwt
            $jwt = JWT::encode($token, ConstantsJWT::key);
            return [
                "message" => "Successful login.",
                "jwt" => $jwt,
                'done' => $this->usuariDao->save($usuari)

            ];

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

    public function  getActualUser($body){
        if(!array_key_exists('jwt', (array)$body)){
            return[
                'done' => false
            ];
        }
        try {
            // decode jwt
            $decoded = JWT::decode($body->jwt, ConstantsJWT::key, array('HS256'));

            return [
                "message" => "Access granted.",
                "data" => $decoded->data
            ];
        }catch (\Exception $e) {
            return array(
                'done' => false,
                'err' => $e->getMessage(),
            );
        }
    }
    public function login($body){
        if(!array_key_exists('user_name', (array)$body) || !array_key_exists('user_password', (array)$body)){
            return[
                'done' => false,
                'date' => null
            ];
        }

        $usuari = Usuari::where('USUARI_NOMBRE','=', $body->user_name)
            ->first();

        if(!$usuari){
            return [
                'done' => false
            ];
        }
        if($usuari->USUARI_PASSWORD == md5($body->user_password) ){
            $token = array(
                "iss" => ConstantsJWT::iat,
                "aud" => ConstantsJWT::aud,
                "iat" => ConstantsJWT::iat,
                "nbf" => ConstantsJWT::nbf,
                "data" => array(
                    "ID" => $usuari->ID,
                    "USUARI_NOMBRE" => $usuari->USUARI_NOMBRE,
                    "NOMBRE"=> $usuari->NOMBRE,
                    "photo_path"=> $usuari->photo_path,
                    "PERMISO" => $usuari->PERMISO,
                    "ESTADO" => $usuari->ESTADO
                )
            );
            // generate jwt
            $jwt = JWT::encode($token, ConstantsJWT::key);
                return [
                    "message" => "Successful login.",
                    "jwt" => $jwt
                ];
        }else{
           return [
                'done' => false
            ];
        }

    }
}
