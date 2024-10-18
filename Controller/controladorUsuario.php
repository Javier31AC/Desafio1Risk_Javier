<?php

class ControladorUsuario{
    public function handleRequest($method) {
        switch ($method) {
            case 'POST':
                $this->crearUsuario();
                break;
            default:
            echo json_encode(['cod'=>204,
            'message'=>'La consulta no es correcta'
        ]);
        }
    }

    private function crearUsuario() {
    }
}