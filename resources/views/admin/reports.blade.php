@extends($theme_layout)

@section('content')
<ol class="breadcrumb">
    <li><a href="{{ url('admin') }}">Pannello Amministrazione</a></li>
    <li class="active">Reports</li>
    <li class="pull-right"><a href="{{ url('/auth/logout') }}">Logout</a></li>
</ol>

<div class="container-fluid">
    @if($show_menu)
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Seleziona il gruppo di reports da visualizzare</p>
            </div>
            <div class="col-md-12 contents text-center">
                <a class="btn btn-lg btn-primary" href="{{ url('/admin/reports?section=import') }}">Utenti</a>
                <a class="btn btn-lg btn-primary" href="{{ url('/admin/reports?section=files') }}">Files</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-12 contents">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="textfilter" autocomplete="off" placeholder="Cerca...">
                    </div>
                </div>
                <table class="table filteratable">
                    <thead>
                        <tr>
                            <th width="10%">Data</th>
                            <th width="90%">Messaggio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logs as $log)
                            <tr>
                                <td>{{ $log->created_at }}</td>
                                <td>{{ $log->message }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
@endsection
