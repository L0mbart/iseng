@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.closeTicket.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.close-tickets.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('close_ticket') ? 'has-error' : '' }}">
                <label for="close_ticket">{{ trans('cruds.closeTicket.fields.close_ticket') }}</label>
                <input type="number" id="close_ticket" name="close_ticket" class="form-control" value="{{ old('close_ticket', isset($closeTicket) ? $closeTicket->close_ticket : '') }}" step="1">
                @if($errors->has('close_ticket'))
                    <p class="help-block">
                        {{ $errors->first('close_ticket') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.closeTicket.fields.close_ticket_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('closeticket') ? 'has-error' : '' }}">
                <label for="closeticket">{{ trans('cruds.closeTicket.fields.closeticket') }}</label>
                <input type="text" id="closeticket" name="closeticket" class="form-control" value="{{ old('closeticket', isset($closeTicket) ? $closeTicket->closeticket : '') }}">
                @if($errors->has('closeticket'))
                    <p class="help-block">
                        {{ $errors->first('closeticket') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.closeTicket.fields.closeticket_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection