@extends('layouts.master')

@section('title', 'کاربران آنلاین')

@section('body')
    <table class="table text-center border rounded table-striped table-hover">
        <thead>
            <tr>
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>ایمیل</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
        </tbody>
    </table>
@endsection
