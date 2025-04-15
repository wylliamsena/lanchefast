<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center bg-dark" style="background-color: #2c2c2c;">
    <div class="card shadow-lg w-100" style="max-width: 600px; background-color: #f9f9f9; border-radius: 12px;">
        <div class="card-body">
            <h4 class="mb-4 text-center" style="color: #007bff; font-weight: bold;">Editar Cliente</h4>

            @if (session()->has('success'))
                <div class="alert alert-success text-center mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit.prevent="atualizar">
                {{-- Nome --}}
                <div class="mb-3">
                    <label class="form-label" style="color: #333; font-weight: 600;">Nome</label>
                    <input type="text" wire:model.defer="nome" class="form-control" placeholder="Nome completo" style="border-radius: 8px; box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);">
                    @error('nome') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Endereço --}}
                <div class="mb-3">
                    <label class="form-label" style="color: #333; font-weight: 600;">Endereço</label>
                    <input type="text" wire:model.defer="endereco" class="form-control" placeholder="Rua, número, bairro..." style="border-radius: 8px; box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);">
                    @error('endereco') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Telefone --}}
                <div class="mb-3">
                    <label class="form-label" style="color: #333; font-weight: 600;">Telefone</label>
                    <input type="text" wire:model.defer="telefone" class="form-control" placeholder="(XX) XXXXX-XXXX" style="border-radius: 8px; box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);">
                    @error('telefone') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- CPF --}}
                <div class="mb-3">
                    <label class="form-label" style="color: #333; font-weight: 600;">CPF</label>
                    <input type="text" wire:model.defer="cpf" class="form-control" placeholder="000.000.000-00" style="border-radius: 8px; box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);">
                    @error('cpf') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label class="form-label" style="color: #333; font-weight: 600;">Email</label>
                    <input type="email" wire:model.defer="email" class="form-control" placeholder="email@exemplo.com" style="border-radius: 8px; box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Senha --}}
                <div class="mb-4">
                    <label class="form-label" style="color: #333; font-weight: 600;">Senha <span class="text-muted">(opcional)</span></label>
                    <input type="password" wire:model.defer="password" class="form-control" placeholder="Nova senha" style="border-radius: 8px; box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);">
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Botão --}}
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary" style="border-radius: 8px; padding: 12px 0; font-weight: 600; background-color: #007bff; border: none;">
                        Atualizar Cliente
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
