@extends('admin.layout-admin')
@section('content-admin')

<h2>Data Pelanggan</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                
                    <th>Id</th>
                    <th>Nama User</th>
                    <th>email</th>
                </tr>
            </thead>

        <tbody>
            @foreach ($user as $u)
            <tr>
            
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}} </td>
            </tr>
            @endforeach
            
        </tbody>
        </table>
@endsection