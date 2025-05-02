<?php

class Response {
    private $api_version = '1.0.0';
    private $api_ativa = true;
// Função para verificar se a API está ativa
    public function verificarApiAtiva() {
        // fazer a função checar se o servidor smtp está ativo
        return true; // Mude para true se a API estiver ativa
    }

    public function status(){
        header('Content-Type: application/json');
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (!$this->verificarApiAtiva()) {
                $this->api_ativa = false;
                // Se a API não estiver ativa, retorna um erro
                echo json_encode([
                    'status' => 'erro',
                    'mensagem' => 'A API nao esta ativa no momento. Tente novamente mais tarde.',
                    'versao' => $this->api_version
                ]);
                http_response_code(503); // Código de status 503 - Serviço Indisponível
                exit;
            }

            // Se a API estiver ativa
            echo json_encode([
                'status' => 'sucesso',
                'mensagem' => 'A API esta ativa e funcionando.',
                'versao' => $this->api_version
            ]);
        } else {
            // Método http não permitido, tipo post, delete, etc
            echo json_encode([
                'status' => 'erro',
                'mensagem' => 'Metodo nao permitido.',
                'versao' => $this->api_version
            ]);
            http_response_code(405); // Código de status 405 - Método Não Permitido
            }
    }



}