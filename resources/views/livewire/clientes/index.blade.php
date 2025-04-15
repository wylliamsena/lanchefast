<div style="background: url('/images/bg-clientes.jpg') no-repeat center center fixed; background-size: cover;" class="min-vh-100">
    <div class="bg-dark bg-opacity-75 min-vh-100">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#">Sistema de Pedidos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- Conteúdo -->
        <div class="container py-5">
            <div class="d-flex justify-content-between align-items-center mb-4 text-white">
                <h2 class="mb-0">Clientes</h2>
                <a href="{{ route('clientes.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle me-1"></i> Novo Cliente
                </a>
            </div>

            <div class="card bg-dark text-white shadow-lg border-0">
                <div class="card-body">
                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-md-6">
                            <input type="text" wire:model.debounce.300ms="search" class="form-control"
                                placeholder="Buscar clientes...">
                        </div>
                        <div class="col-md-3">
                            <select wire:model="perPage" class="form-select">
                                <option value="10">10 por página</option>
                                <option value="25">25 por página</option>
                                <option value="50">50 por página</option>
                                <option value="100">100 por página</option>
                            </select>
                        </div>
                    </div>

                    @if (session()->has('message'))
                        <div class="alert alert-success text-white bg-success bg-opacity-50 border-0">
                            {{ session('message') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-dark table-hover align-middle mb-0">
                            <thead class="table-light text-dark">
                                <tr>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th class="text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($clientes as $cliente)
                                    <tr>
                                        <td>{{ $cliente->nome }}</td>
                                        <td>{{ $cliente->cpf }}</td>
                                        <td>{{ $cliente->email }}</td>
                                        <td>{{ $cliente->telefone }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-sm btn-outline-light me-1" title="Visualizar">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-outline-warning me-1" title="Editar">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <button wire:click="delete({{ $cliente->id }})" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Tem certeza que deseja excluir este cliente?')" title="Excluir">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">Nenhum cliente encontrado.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        {{ $clientes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
