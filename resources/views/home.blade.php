@extends('common.master')

@section('title', ('Home'))

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="/js/api.js"></script>
@endsection

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <section class="section">
            <h2 class="title">You are logged in!</h2>

            <div class="select is-fullwidth">
                <select class="filterSelect">
                    <option value="">Select dropdown</option>
                </select>
            </div>

            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <tr>
                    <th>API</th>
                    <th>Description</th>
                    <th>Auth</th>
                    <th>HTTPS</th>
                    <th>Cors</th>
                    <th>Link</th>
                    <th>Category</th>
                </tr>
                @foreach($response as $api)
                    <tr class="">
                        <td>{{ $api['API'] }}</td>
                        <td>{{ $api['Description'] }}</td>
                        <td>{{ $api['Auth'] == "" ? "None" : $api['Auth'] }}</td>
                        <td>{{ $api['HTTPS'] == 1 ? "Yes" : "No" }}</td>
                        <td>{{ $api['Cors'] }}</td>
                        <td><a href="{{ $api['Link'] }}" target="_blank">API link</a></td>
                        <td class="filter">{{ $api['Category'] }}</td>
                    </tr>
                @endforeach
            </table>
        </section>
    </div>
@endsection