@extends('layouts.layout_admin')
@section('admin')
    <!-- CONTENT -->
    <section id="content">
        <!-- MAIN -->
        <main>
            <!-- TITLE-->
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
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

            <!-- CONTENT DASHBOARD -->
            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <!-- Data diambil dari database dengan pihak tengah OrderController-->
                        <h3>{{ $totalOrders }}</h3>
                        <p>Total Order</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>{{ $visitors }}</h3>
                        <p>Visitors</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">
                        <h3>Rp {{ number_format($totalSales, 0, ',', '.') }}</h3>
                        <p>Total Sales</p>
                    </span>
                </li>
            </ul>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Orders</h3>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Category</th>
                                <th>Game ID</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td style="width: 100px">
                                        <img src="../../assets/images/user.png">
                                        {{ $order->username }}
                                    </td>
                                    <td>{{ $order->category }}</td>
                                    <td>{{ $order->game_id }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td><span class="status {{ $order->status }}"
                                            style="background-color:rgb(255, 82, 82)">{{ ucfirst($order->status) }}</span>
                                    </td>
                                    <td>
                                        @if ($order->status !== 'success')
                                            <form action="{{ route('order.done', $order->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-secondary" style="cursor: pointer; background-color: rgb(72, 203, 72)">Done</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="table-data">
                <div class="todo">
                    <div class="head">
                        <h3>ToDoList</h3>
                        <i class='bx bx-plus' id="openModalButton"></i>
                    </div>
                    <ul class="todo-list">
                        @foreach ($tasks as $task)
                            <li class="not-completed">
                                <td>{{ $task->task }}</td>
                                <div>
                                    <form action="{{ route('tasks.delete', $task->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="all: unset"><i class='bx bx-x bx-tada'></i></button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <!-- Struktur Modal -->
    <div id="taskModal" class="modal">
        <div class="modal-content">
            <span class="close-button" id="closeModalButton">&times;</span>
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <input type="text" name="task" placeholder="New Task" required>
                <button type="submit">Add Task</button>
            </form>
        </div>
    </div>
@endsection
