@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.updateTicket.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.update-tickets.update", [$updateTicket->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('update_ticket') ? 'has-error' : '' }}">
                <label for="update_ticket">{{ trans('cruds.updateTicket.fields.update_ticket') }}*</label>
                <input type="number" id="update_ticket" name="update_ticket" class="form-control" value="{{ old('update_ticket', isset($updateTicket) ? $updateTicket->update_ticket : '') }}" step="1" required>
                @if($errors->has('update_ticket'))
                    <p class="help-block">
                        {{ $errors->first('update_ticket') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.updateTicket.fields.update_ticket_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('nomor_ticket') ? 'has-error' : '' }}">
                <label for="nomor_ticket">{{ trans('cruds.updateTicket.fields.nomor_ticket') }}*</label>
                <input type="text" id="nomor_ticket" name="nomor_ticket" class="form-control" value="{{ old('nomor_ticket', isset($updateTicket) ? $updateTicket->nomor_ticket : '') }}" required>
                @if($errors->has('nomor_ticket'))
                    <p class="help-block">
                        {{ $errors->first('nomor_ticket') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.updateTicket.fields.nomor_ticket_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection