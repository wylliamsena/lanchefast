<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Clientes</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('clientes.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Novo Cliente
            </a>
        </div>

    </div>

    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" wire:model.debounce.300ms="search" class="form-control"
                        placeholder="Buscar clientes...">
                </div>
                <div class="col-md-3">
                    <select wire:model="perPage" class="form-select ">
                        <option value="10">10 por página</option>
                        <option value="25">25 por página</option>
                        <option value="50">50 por página</option>
                        <option value="100">100 por página</option>
                    </select>
                </div>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-sucess">
                    {{ seesion('message') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-strped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->cpf }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->selefone }}</td>
                                <td>
                                    <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-sm btn-info">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <button wire::click="delete({{ $cliente->id }})" class="btn btn-danger"
                                        onclick="return confirm('Tem certeza?')">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Nenhum cliente encontrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $clientes->links() }}
            </div>
        </div>
    </div>
</div>
