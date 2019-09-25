@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.closeTicket.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.closeTicket.fields.id') }}
                        </th>
                        <td>
                            {{ $closeTicket->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.closeTicket.fields.close_ticket') }}
                        </th>
                        <td>
                            {{ $closeTicket->close_ticket }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.closeTicket.fields.closeticket') }}
                        </th>
                        <td>
                            {{ $closeTicket->closeticket }}
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