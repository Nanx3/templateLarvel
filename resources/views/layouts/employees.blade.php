@extends('layouts.dashboard')

@section('page')
    @php $currentPage = 'employees' @endphp
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="title-1 m-b-25">Employees list</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th class="text-right">Email</th>
                        <th class="text-right">Phone</th>
                        <th class="text-right">Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name}}</td>
                        <td class="text-right">{{ $employee->email }}</td>
                        <td class="text-right">{{ $employee->phone_number }}</td>
                        <td class="text-right">{{ $employee->created_at }}</td>
                        <td>
                            <div class="table-data-feature">
                                <a href="{{ route('employees.edit', $employee->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection