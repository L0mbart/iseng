@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.createTicket.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.createTicket.fields.id') }}
                        </th>
                        <td>
                            {{ $createTicket->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.createTicket.fields.create_ticket') }}
                        </th>
                        <td>
                            {{ $createTicket->create_ticket }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.createTicket.fields.id_ticket') }}
                        </th>
                        <td>
                            {{ $createTicket->id_ticket }}
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