@extends('layouts.layout_admin')
@section('admin')
    <section id="content">
        <main>
            <!-- HEAD TITLE -->
            <div class="head-title">
                <div class="left">
                    <h1>User</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">{{ $title }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- HEAD TITLE END-->
            <div class="container">
                <div class="header">
                    <h1>List User</h1>
                    <div>
                        {{-- <a class="btn" href="{{ Route('admin.user.create') }}">Add user</a> --}}
                    </div>
                </div>
                <hr>
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 50px">#</th>
                            <th style="width: 200px">username</th>
                            <th style="width: 750px">email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $user->username }}</td>
                                <td class="align-middle">{{ $user->email }}</td>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="6">user not found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </section>
@endsection
