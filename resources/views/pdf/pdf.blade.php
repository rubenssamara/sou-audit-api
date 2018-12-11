@php
DEFINE('PATH', __DIR__);
DEFINE('DS', DIRECTORY_SEPARATOR); 
$path = PATH . "..".DS. "..".DS . ".." .DS. ".." .DS;
$path = "{$path}public". DS . "images" . DS;
@endphp 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Título Opcional</title>
<style>
   * {
margin: 0;
padding: 0;
}

html,
body {
height: 100%;
}
.geral {
min-height: 100%;
position: relative;
width: 100%;
margin: auto;
}
.footer {
position: absolute;
bottom: 0;
width: 100%;
text-align: center;
}
.table {
position: absolute;
bottom: 150px;
width: 85%;
}
.table1 {
position: absolute;
top: 200px;
width: 85%;
}
.content {
overflow: hidden;
}

table {
border-collapse: collapse;
left: 50%;
transform: translateX(-50%);
}

table,
td,
th {
border: 1px solid black;
padding: 0 15px;
}
.text-center{
text-align: center;
position: relative;
top: -80px;
}
</style>
</head>
<body>             
<img alt="Univesp" src="{{ $path }}univesp.png" style="margin-bottom: 35px;">
<div class="text-center">
 <h1>AUDITORIA POR URGÊNCIA POR PRAZO</h1>
</div>
<div id="tudo">
    @if(isset($urgencies))
        <table class="table1">
            <thead>
                <tr>
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
   
<table class="table">
    <tbody>
        <tr>
            <td width="277">Data de emissão:</td>
            <td width="350">&nbsp;</td>
        </tr>
        <tr>
            <td width="277">Horário de emissão:</td>
            <td width="350">&nbsp;</td>
        </tr>
        <tr>
            <td width="277">Funcionário que emitiu:</td>
            <td width="350">&nbsp;</td>
        </tr>
    </tbody>
</table>
</div>
<footer class="footer">
    <p>Universidade Vírtual do Estado de São Paulo</p>
    <address>Avenida Prof. Almeida Prado, 532 - Térreo - Prédio 01 - Cidade Universitária Butantã - 05508-901 - São Paulo - SP<br/>
        www.univesp.br
    </address>
</footer>
</body>
</html>