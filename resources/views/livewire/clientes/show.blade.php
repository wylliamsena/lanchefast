<div class="container mt-5">
    <div class="row g-4">
        {{-- Nome --}}
        <div class="col-md-6">
            <div class="card shadow" style="background-color: #2c2c2c; color: white; border-radius: 12px;">
                <div class="card-body">
                    <h5 class="card-title text-primary">Nome</h5>
                    <p class="card-text">{{ $cliente->nome }}</p>
                </div>
            </div>
        </div>

        {{-- Endereço --}}
        <div class="col-md-6">
            <div class="card shadow" style="background-color: #2c2c2c; color: white; border-radius: 12px;">
                <div class="card-body">
                    <h5 class="card-title text-primary">Endereço</h5>
                    <p class="card-text">{{ $cliente->endereco }}</p>
                </div>
            </div>
        </div>

        {{-- Telefone --}}
        <div class="col-md-6">
            <div class="card shadow" style="background-color: #2c2c2c; color: white; border-radius: 12px;">
                <div class="card-body">
                    <h5 class="card-title text-primary">Telefone</h5>
                    <p class="card-text">{{ $cliente->telefone }}</p>
                </div>
            </div>
        </div>

        {{-- CPF --}}
        <div class="col-md-6">
            <div class="card shadow" style="background-color: #2c2c2c; color: white; border-radius: 12px;">
                <div class="card-body">
                    <h5 class="card-title text-primary">CPF</h5>
                    <p class="card-text">{{ $cliente->cpf }}</p>
                </div>
            </div>
        </div>

        {{-- Email --}}
        <div class="col-md-12">
            <div class="card shadow" style="background-color: #2c2c2c; color: white; border-radius: 12px;">
                <div class="card-body">
                    <h5 class="card-title text-primary">Email</h5>
                    <p class="card-text">{{ $cliente->email }}</p>
                </div>
            </div>
        </div>

        {{-- Botão Voltar --}}
<div class="col-md-12 d-flex justify-content-end">
    <a href="{{ route('clientes.index') }}" class="btn" style="background-color: #1c1c1c; color: white; border-radius: 8px; padding: 10px 20px;">
        Voltar
    </a>
</div>
    </div>
</div>
