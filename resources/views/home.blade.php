@extends($theme_layout)

@section('content')
<ol class="breadcrumb">
    <li class="pull-right"><a href="{{ url('/auth/logout') }}">Logout</a></li>
</ol>

<div class="container-fluid">
    @if(!empty($user->group->message))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning">
                {{ $user->group->message }}
            </div>
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <input type="text" class="form-control" id="textfilter" autocomplete="off" placeholder="Cerca...">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            @if(count($files) == 0)
                <p class="alert alert-info">Non hai files assegnati</p>
            @else
                <table class="table filelist filteratable">
                    <tbody>
                        @foreach($files as $file)
                            <tr>
                                <td><a href="{{ url('file/' . $file) }}">{{ basename($file) }}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="col-md-6">
            @if(count($groupfiles) == 0)
                <p class="alert alert-info">Il tuo gruppo non ha files assegnati</p>
            @else
                <table class="table filelist filteratable">
                    <tbody>
                        @foreach($groupfiles as $file)
                            <tr>
                                <td><a href="{{ url('file/' . $file) }}">{{ basename($file) }}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
