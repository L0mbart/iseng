@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.updateTicket.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.updateTicket.fields.id') }}
                        </th>
                        <td>
                            {{ $updateTicket->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.updateTicket.fields.update_ticket') }}
                        </th>
                        <td>
                            {{ $updateTicket->update_ticket }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.updateTicket.fields.nomor_ticket') }}
                        </th>
                        <td>
                            {{ $updateTicket->nomor_ticket }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection