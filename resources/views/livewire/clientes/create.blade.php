<div style="max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
    <h2 style="text-align: center; margin-bottom: 20px;">Criar Novo Cliente</h2>

    @if (session()->has('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px; border: 1px solid #c3e6cb;">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="salvar" style="display: flex; flex-direction: column; gap: 15px;">
        <div>
            <label for="nome" style="font-weight: bold; display: block; margin-bottom: 5px;">Nome:</label>
            <input type="text" id="nome" wire:model="nome" placeholder="Digite o nome do cliente" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" />
            @error('nome') <span style="color: #e3342f; font-size: 0.9em;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="endereco" style="font-weight: bold; display: block; margin-bottom: 5px;">Endereço:</label>
            <input type="text" id="endereco" wire:model="endereco" placeholder="Digite o endereço do cliente" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" />
            @error('endereco') <span style="color: #e3342f; font-size: 0.9em;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="telefone" style="font-weight: bold; display: block; margin-bottom: 5px;">Telefone:</label>
            <input type="text" id="telefone" wire:model="telefone" placeholder="Digite o telefone do cliente" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" />
            @error('telefone') <span style="color: #e3342f; font-size: 0.9em;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="cpf" style="font-weight: bold; display: block; margin-bottom: 5px;">CPF:</label>
            <input type="text" id="cpf" wire:model="cpf" placeholder="Digite o CPF do cliente" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" />
            @error('cpf') <span style="color: #e3342f; font-size: 0.9em;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email" style="font-weight: bold; display: block; margin-bottom: 5px;">Email:</label>
            <input type="email" id="email" wire:model="email" placeholder="Digite o email do cliente" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" />
            @error('email') <span style="color: #e3342f; font-size: 0.9em;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password" style="font-weight: bold; display: block; margin-bottom: 5px;">Senha:</label>
            <input type="password" id="password" wire:model="password" placeholder="Digite a senha do cliente" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" />
            @error('password') <span style="color: #e3342f; font-size: 0.9em;">{{ $message }}</span> @enderror
        </div>

        <button type="submit" style="background-color: #3490dc; color: white; padding: 10px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer; transition: background-color 0.3s ease;">
            Criar Cliente
        </button>
    </form>
</div>
