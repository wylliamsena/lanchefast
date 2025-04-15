<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Detalhes do Cliente</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label fw-bold">Nome</label>
                <p class="form-control-plaintext">{{ $cliente->nome }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Endereço</label>
                <p class="form-control-plaintext">{{ $cliente->endereco }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Telefone</label>
                <p class="form-control-plaintext">{{ $cliente->telefone }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">CPF</label>
                <p class="form-control-plaintext">{{ $cliente->cpf }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Email</label>
                <p class="form-control-plaintext">{{ $cliente->email }}</p>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
            
            </div>
        </div>
    </div>
</div>
