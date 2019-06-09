<?php 

namespace AiMi\Controller;
use AiMi\Bbdd\TallaDao;
use AiMi\Models\Talla;
class TallaManager
{
    public function __construct()
	{
		$this->tallaDao = new TallaDao();
	}

    public function findAll()
    {
        return $this->tallaDao->findAll();
    }
    public function save($body)
    {
        try {
            $talla = new Talla();
            $talla->TEXTO =  $body->TEXTO;
            return array(
                'done' => $this->tallaDao->save($talla)
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
        $talla = Talla::find($id);

        if (!$talla) {
            return [
                'done' => false
            ];
        }
        try {
            if (array_key_exists('TEXTO', (array)$body)) {
                $talla->TEXTO =  $body->TEXTO;
            } else {
                return array(
                    'done' => false,
                    'message' => 'Require TEXTO'
                );
            }
            return array(
                'done' => $this->tallaDao->save($talla)
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
        $talla = $this->tallaDao->findById($id);

        if (!$talla) {
            return [
                'done' => false
            ];
        }

        try {
            return array("done" => $this->tallaDao->delete($id));
        } catch (\Exception $e) {
            return array(
                'done' => false,
                'err' => $e->getMessage(),
            );
        }
    }
}
