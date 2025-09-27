@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Estados</h2>
    <table id="estadosTable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estados as $estado)
            <tr>
                <td>{{ $estado->nombre }}</td>
                <td>
                    <a href="{{ route('estados.municipios', $estado->nombre) }}" class="btn btn-sm btn-primary">
                        Ver Municipios
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
</div>



@endsection

@push('scripts')

<script>
    $('#estadosTable').DataTable({
        responsive: true,
        paging: true, // <-- activar paginación
        info: true, // <-- activar info de la tabla
        lengthChange: true, // permite cambiar número de registros
        language: {
            processing: "Tratamiento en curso...",
            search: "Buscar&nbsp;:",
            lengthMenu: "Agrupar de _MENU_ Registros",
            info: "Mostrando del Registro _START_ al _END_ de un total de _TOTAL_ Registros",
            infoEmpty: "No existen datos.",
            infoFiltered: "(filtrado de _MAX_ elementos en total)",
            loadingRecords: "Cargando...",
            zeroRecords: "No se encontraron datos con tu busqueda",
            emptyTable: "No hay datos disponibles en la tabla.",
            paginate: {
                first: "Primero",
                previous: "Anterior",
                next: "Siguiente",
                last: "Ultimo"
            },
            aria: {
                sortAscending: ": active para ordenar la columna en orden ascendente",
                sortDescending: ": active para ordenar la columna en orden descendente"
            }
        }
    });
</script>
@endpush