@extends('layouts.app')

@section('content')
<!-- icon -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rell="stylesheet">

<div class='card'>
    <div class="card-body">
        @if (session('status'))
        <div theme="succes" title="Sukses">
                {{session('status') }}
            </div>
        @endif
        @if ($errors-any())
            <div theme="succes" title="Sukses">
              </ul>
                  @foreach ($error->all() as $error)
                      </li>{{ $error }}</li>
                      @endforeach
                 </ul>
             </div>
       @endif
        <a href="{{route('user.create')}}" class="btn btn-md btn-succes mx-1 shadow"> <i class="fa fa -lg fa-fw fa-plus"></i> Tambah User</a>
        <br/> <br/>
        <div class="table-responsive">
            <table id="tabel_user" class="table table-striped table-hover table-condensed table-bordered">
                <thead>
                    <tr style="background-color: darkgrey">
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th class="text-center" width="70">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($user as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->level}}</td>
                           </td>
                               <a href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-primary" title="Edit">Edit</a>
                               <form action="{{ route('user.delete', $user->id) }}"
                               method= "post" class="d-inline">
                               @csrf
                               @method('delete')
                                <button type="submit" class="btn btn-md btn-danger"><i class="fa-solid fa-trash"></ibutton>
                        </form>
                          </td>
                       </tr>
                    @endforeach
             </tbody>
         </table>
      </div>
  </div>
</div>
@stop   