<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Título Opcional</title>

    <style>
        body {
            position: relative;
        }
        table {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
        td, th {
            padding: 0 30px;
        }
    </style>
</head>
<body>
    <h1>Auditoria</h1>
    <ul>
        @if(isset($urgencies))
            <table>
                <thead>
                    <tr class="">
                        <th>Nome</th>
                        <th>Ra</th>
                        <th>Polo</th>
                        <th>Data Inícial</th>
                        <th>Data Final</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($urgencies as $student)
                        <tr>
                            <td>{{ $student['name'] }}</td>
                            <td>{{ $student['ra'] }}</td>
                            <td>{{ $student['institution_name'] }}</td>
                            <td>{{ $student['init_date'] }}</td>
                            <td>{{ $student['end_date'] }}</td>
                        </tr>
                    @empty
                        <li>Nenhum Estudante Encontrado.</li>
                    @endforelse
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        @endif
    </ul>
</body>
</html>