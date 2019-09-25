@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.createTicket.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.create-tickets.update", [$createTicket->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('create_ticket') ? 'has-error' : '' }}">
                <label for="create_ticket">{{ trans('cruds.createTicket.fields.create_ticket') }}*</label>
                <input type="number" id="create_ticket" name="create_ticket" class="form-control" value="{{ old('create_ticket', isset($createTicket) ? $createTicket->create_ticket : '') }}" step="1" required>
                @if($errors->has('create_ticket'))
                    <p class="help-block">
                        {{ $errors->first('create_ticket') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.createTicket.fields.create_ticket_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('id_ticket') ? 'has-error' : '' }}">
                <label for="id_ticket">{{ trans('cruds.createTicket.fields.id_ticket') }}</label>
                <input type="number" id="id_ticket" name="id_ticket" class="form-control" value="{{ old('id_ticket', isset($createTicket) ? $createTicket->id_ticket : '') }}" step="1">
                @if($errors->has('id_ticket'))
                    <p class="help-block">
                        {{ $errors->first('id_ticket') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.createTicket.fields.id_ticket_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection