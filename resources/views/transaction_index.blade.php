@extends('admin.sneat')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class=" col md-12">
            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    {{-- <a href="{{ route('incomes.create') }}" class="btn btn-primary">Tambah</a> --}}
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Total Harga</td>
                                <td>Created</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->total_harga }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="/transaction/{{ $item->id }}/edit" class="btn btn-primary">
                                            Edit
                                        </a>
                                        <form href="/transaction/{{ $item->id }}" method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $transaction->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection