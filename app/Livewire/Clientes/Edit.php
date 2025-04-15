<?php

namespace App\Livewire\Clientes;

use Livewire\Component;
use App\Models\Cliente;

class Edit extends Component
{
    public $clienteId;
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $password;

    // Carrega os dados do cliente
    public function mount($cliente)
    {

        $cliente = Cliente::find($cliente); 
        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->endereco = $cliente->endereco;
        $this->telefone = $cliente->telefone;
        $this->cpf = $cliente->cpf;
        $this->email = $cliente->email;
        // A senha não é carregada por segurança
    }

    public function atualizar()
    {
        $this->validate([
            'nome' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'cpf' => 'required|string|max:14',
            'email' => 'required|email|max:255',
        ]);

        $cliente = Cliente::findOrFail($this->clienteId);
        $cliente->nome = $this->nome;
        $cliente->endereco = $this->endereco;
        $cliente->telefone = $this->telefone;
        $cliente->cpf = $this->cpf;
        $cliente->email = $this->email;

        if ($this->password) {
            $cliente->password = bcrypt($this->password);
        }

        $cliente->save();

        return redirect()->route('clientes.index')->with(['success' => 'Cliente atualizado com sucesso!']);
    }

    public function render()
    {
        return view('livewire.clientes.edit');
    }
}
