<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component


{
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $password;

    public function salvar()
    {
        $this->validate([
            'nome' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'cpf' => 'required|string|max:14|unique:clientes,cpf',
            'email' => 'required|email|unique:clientes,email',
            'password' => 'required|min:6',
        ]);

        Cliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

       return redirect()->route('clientes.index')->with(['success' => 'Cliente cadastrado com sucesso!']);

        // Limpa os campos
        $this->reset(['nome', 'endereco', 'telefone', 'cpf', 'email', 'password']);
    }

    public function render()
    {
        return view('livewire.clientes.create');
    }

    
}

