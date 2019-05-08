<?php 
// Criando métodos
class Users
{
    // Métodos - public, private, protected
    public function changePassword($actualPassword, $newPassword)
    {
        // Conectar ao banco de dados;
        // Verificar se a senha atual está correta;
        // Trocar a senha;
    }
    private function conectDB()
    {
        // Coneção privada ao banco de dados
    }
    protected function verifyPassword()
    {
        // Verifica a senha
    }
}
